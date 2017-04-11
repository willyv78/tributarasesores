<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeTeamPost
{
	/**************************************************************************/
	
	function TLThemeTeamPost()
	{
		$Layout=new TLThemeLayout();
		
		$this->layout=$Layout->layout;
		unset($this->layout['66x33'],$this->layout['33x66']);
	}
	
	/**************************************************************************/
	
	function adminInit()
	{
		register_post_type
		(
			THEME_CONTEXT.'_team',
			array
			(  
				'labels'							=> array
				(
					'name'							=>	TLThemeTranslator::__('Team'),
					'singular_name'					=>	TLThemeTranslator::__('Team'),
					'add_new'						=>	TLThemeTranslator::__('Add New Team Member'),
					'add_new_item'					=>	TLThemeTranslator::__('Add New Team Member'),
					'edit_item'						=>	TLThemeTranslator::__('Edit Team Member'),
					'new_item'						=>	TLThemeTranslator::__('New Team Member'),
					'all_items'						=>	TLThemeTranslator::__('All Team Members'),
					'view_item'						=>	TLThemeTranslator::__('View Team Member'),
					'search_items'					=>	TLThemeTranslator::__('Search Team Members'),
					'not_found'						=>	TLThemeTranslator::__('No Team Members found'),
					'not_found_in_trash'			=>	TLThemeTranslator::__('No Team Members found in Trash'), 
					'parent_item_colon'				=>	'',
					'menu_name'						=>	TLThemeTranslator::__('Team')
				),
				'public'							=>	false,  
				'show_ui'							=>	true,  
				'capability_type'					=>	'post',
				'menu_position'						=>	25,
				'hierarchical'						=>	false,  
				'rewrite'							=>	true,  
				'supports'							=>	array('title','excerpt','page-attributes','thumbnail')  
			)				
		);  

		register_taxonomy
		(
			THEME_CONTEXT.'_team_category',
			array(THEME_CONTEXT.'_team'),
			array
			(
				'label'								=>	TLThemeTranslator::__('Categories'),
				'labels'							=>	array
				(
					'name'							=>	TLThemeTranslator::__('Team categories'),		 
					'singular_name'					=>	TLThemeTranslator::__('Team category'),		 
					'menu_name'						=>	TLThemeTranslator::__('Categories'),	
					'all_items'						=>	TLThemeTranslator::__('All Categories'),	
					'edit_item'						=>	TLThemeTranslator::__('Edit Category'),	
					'view_item'						=>	TLThemeTranslator::__('View Category'),	
					'update_item'					=>	TLThemeTranslator::__('Update Category'),	
					'add_new_item'					=>	TLThemeTranslator::__('Add New Category'),	
					'new_item_name'					=>	TLThemeTranslator::__('New Category Name'),	
					'parent_item'					=>	TLThemeTranslator::__('Parent Category'),	
					'parent_item_colon'				=>	TLThemeTranslator::__('Parent Category:'),	
					'search_items'					=>	TLThemeTranslator::__('Search Categories'),	
					'popular_items'					=>	TLThemeTranslator::__('Popular Categories'),	
					'separate_items_with_commas'	=>	TLThemeTranslator::__('Separate categories with commas'),	
					'add_or_remove_items'			=>	TLThemeTranslator::__('Add or remove categories'),	
					'choose_from_most_used'			=>	TLThemeTranslator::__('Choose from the most used categories')
				)
			)
		); 
	}

	/**************************************************************************/

	function adminManageEditColumn($column)
	{
		$column=array
		(  
			'cb'			=> '<input type="checkbox"/>',
			'name'			=> TLThemeTranslator::__('Name'),
			'position'		=> TLThemeTranslator::__('Position')   
		);    

		return $column;  
	}  
	
	/**************************************************************************/
	
	function adminManageEditSortableColumn($column)
	{
		$column['name']='title';
		$column['position']='title';
		return($column);
	}
	
	/**************************************************************************/
	
	function adminManageColumn($column)
	{
		global $post;
		$option=TLThemeOption::getPostMeta($post);

		switch($column)  
		{
			case 'name':   
				
				if(has_post_thumbnail($post->ID))
				{
					echo '<a href="'.get_edit_post_link($post->ID).'">'.get_the_post_thumbnail($post->ID,'image-190-190').'</a><br/>'; 
				}
				
				echo '<a href="'.get_edit_post_link($post->ID).'">'.TLThemeHelper::esc_html($post->post_title).'</a>'; 
				
			break;
			case 'position':  
				
				echo '<a href="'.get_edit_post_link($post->ID).'">'.TLThemeHelper::esc_html($option['team_position']).'</a>'; 
				
			break;
		}  
		
		return($column);
	}

	/**************************************************************************/
	
	function adminInitMetaBox()
	{
		add_meta_box(THEME_CONTEXT.'_team',TLThemeTranslator::__('Options'),array($this,'adminCreateMetaBox'),THEME_CONTEXT.'_team','normal','high');	
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBox() 
	{
		global $post;
		
		$data=array();

		$data['option']=TLThemeOption::getPostMeta($post);
		$data['nonce']=wp_nonce_field('adminSaveMetaBox',THEME_OPTION_PREFIX.'_team_noncename',false,false);
		
		TLThemeHelper::setDeafultOption($data['option'],'team_link',null);
		TLThemeHelper::setDeafultOption($data['option'],'team_position',null);

		$Template=new TLThemeTemplate($data,THEME_PATH_TEMPLATE.'admin/team_meta_box.php');
		echo $Template->output();		
	}
	
	/**************************************************************************/
	
	function adminSaveMetaBox($post_id) 
	{
		if($_POST)
		{
			if(TLThemeHelper::checkSavePost($post_id,THEME_OPTION_PREFIX.'_team_noncename','adminSaveMetaBox')===false) return(false);
			$option=TLThemeHelper::getPostOption('team');
			update_post_meta($post_id,THEME_OPTION_PREFIX,$option);
		}
	}
	
	/**************************************************************************/
	
	function createTeam($attr)
	{
		$default=array
		(
			'layout'					=>	'4',
			'fancybox'					=>	'1',
			'url_new_window'			=>	'0',
			'carousel'					=>	'1',
			'css_class'					=>	'',
			'category'					=>	'',
			'header'					=>	'',
			'autoplay'					=>	'0',
			'circular'					=>	'1',
			'infinite'					=>	'1',
			'direction'					=>	'left',
			'item_start'				=>	'0',
			'scroll_item'				=>	'1',
			'scroll_effect'				=>	'scroll',
			'scroll_easing'				=>	'swing',
			'scroll_duration'			=>	'500'			
		);		
		
		$Theme=new TLTheme();
		$Image=new TLThemeImage();
		$Layout=new TLThemeLayout();
		$Validation=new TLThemeValidation();
		$CarouFredSel=new TLThemeCarouFredSel();
		
		$attribute=shortcode_atts($default,$attr);
		
		if(!in_array($attribute['layout'],array(1,2,3,4,5)))
			$attribute['layout']=$default['layout'];
		if(!in_array($attribute['fancybox'],array(0,1)))
			$attribute['fancybox']=$default['fancybox'];
		if(!in_array($attribute['url_new_window'],array(0,1)))
			$attribute['url_new_window']=$default['url_new_window'];
		if(!in_array($attribute['carousel'],array(0,1)))
			$attribute['carousel']=$default['carousel'];		
		if(!$Validation->isNumber($attribute['autoplay'],0,1))
			$attribute['autoplay']=$default['autoplay'];
		if(!$Validation->isNumber($attribute['circular'],0,1))
			$attribute['circular']=$default['circular'];
		if(!$Validation->isNumber($attribute['infinite'],0,1))
			$attribute['infinite']=$default['infinite'];		
		if(!in_array($attribute['direction'],array_keys($CarouFredSel->direction)))
			$attribute['direction']=$default['direction'];			
		if(!$Validation->isNumber($attribute['item_start'],0,999))
			$attribute['item_start']=$default['item_start'];
		if(!$Validation->isNumber($attribute['scroll_item'],1,999))
			$attribute['scroll_item']=$default['scroll_item'];		
		if(!in_array($attribute['scroll_effect'],array_keys($CarouFredSel->effect)))
			$attribute['scroll_effect']=$default['scroll_effect'];	
		if(!in_array($attribute['scroll_easing'],array_keys($Theme->easingType)))
			$attribute['scroll_easing']=$default['scroll_easing'];	
		if(!$Validation->isNumber($attribute['scroll_duration'],1,99999))
			$attribute['scroll_duration']=$default['scroll_duration'];			
		
		$argument=array
		(
			'post_type'							=>	THEME_CONTEXT.'_team',
			THEME_CONTEXT.'_team_category'		=>	$attribute['category'],
			'posts_per_page'					=>	-1,
			'orderby'							=>	'menu_order',
			'order'								=>	(is_rtl() ? 'desc' : 'asc')
		);
		
		$query=new WP_Query($argument);
		if($query===false) return;

		$output=null;
		$data=new stdClass();
		
		$data->post=array();
		$data->exclude=array();
		$data->meta=new stdClass();
		$data->option=new stdClass();
		
		$data->meta->image_type=$attribute['layout']==1 ? 'image-990-300' : 'image-480-240';
		
		$id=TLThemeHelper::createId();
		
		foreach($query->posts as $value)
		{
			$option=TLThemeOption::getPostMeta($value);
			
			$full=wp_get_attachment_image_src(get_post_thumbnail_id($value->ID),'full');
			$thumbnail=wp_get_attachment_image_src(get_post_thumbnail_id($value->ID),$data->meta->image_type);
			
			if($Validation->isEmpty($full[0]) || $Validation->isEmpty($thumbnail[0]) || $Validation->isEmpty($value->post_title))
			{
				$this->exclude[]=$value->ID;
				continue;
			}
			
			$data->post[$value->ID]=new stdClass();

			$data->post[$value->ID]->option=$option;
			
			$data->post[$value->ID]->full=$full[0];
			$data->post[$value->ID]->thumbnail=$thumbnail[0];

			if($Validation->isEmpty($option['team_link']))
			{
				$data->post[$value->ID]->url=$data->post[$value->ID]->full;
						
				$data->post[$value->ID]->use_link=$attribute['fancybox'];
				
				$data->post[$value->ID]->link_rel='gallery-'.$id;
				$data->post[$value->ID]->link_class='theme-fancybox-image overlay-image';
			}
			else
			{
				$data->post[$value->ID]->use_link=1;
				
				$data->post[$value->ID]->url=$option['team_link'];
						
				$data->post[$value->ID]->link_rel=null;
				$data->post[$value->ID]->link_class='overlay-url';
			}
		}
		
		$count=count($query->posts);
		
		if(($count) && ($count!=count($data->exclude)))
		{
			$data->query=$query;
			
			$data->meta->header=$attribute['header'];
			$data->meta->header_enable=$Validation->isEmpty($attribute['header']) ? 0 : 1;
			
			$data->meta->id='team-'.$id;
			$data->meta->css_class=$attribute['css_class'];
			$data->meta->carousel=(int)$attribute['carousel'];
			
			$data->meta->layout=$Layout->getLayoutNameByColumnCount($attribute['layout'],$this->layout);
			
			list($data->option->image_width)=$Image->getImageDimension($Image->getImageNameByColumnCount($attribute['layout']));
			
			$data->meta->url_new_window=$attribute['url_new_window'];
			
			$data->option->autoplay=$attribute['autoplay'];
			$data->option->circular=$attribute['circular'];
			$data->option->infinite=$attribute['infinite'];
			$data->option->direction=$attribute['direction'];
			$data->option->item_start=$attribute['item_start'];
			$data->option->scroll_item=$attribute['scroll_item'];
			$data->option->scroll_effect=$attribute['scroll_effect'];
			$data->option->scroll_easing=$attribute['scroll_easing'];
			$data->option->scroll_duration=$attribute['scroll_duration'];
			
			$data->option->column_count=$attribute['layout'];
			
			$Template=new TLThemeTemplate($data,THEME_TEMPLATE_DIR.'team.php');
			$output=$Template->outputWP(true);
		}
		
		return($output);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>