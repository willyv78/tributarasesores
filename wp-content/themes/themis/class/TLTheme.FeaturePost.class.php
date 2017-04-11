<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeFeaturePost
{
	/**************************************************************************/

	function TLThemeFeaturePost()
	{
		$this->icon=array
		(
			'app'					=>	array(TLThemeTranslator::__('App')),
			'balance'				=>	array(TLThemeTranslator::__('Balance')),
			'balloon'				=>	array(TLThemeTranslator::__('Balloon')),
			'binoculars'			=>	array(TLThemeTranslator::__('Binoculars')),
			'briefcase'				=>	array(TLThemeTranslator::__('Briefcase')),
			'chart'					=>	array(TLThemeTranslator::__('Chart')),
			'contract'				=>	array(TLThemeTranslator::__('Contract')),
			'document'				=>	array(TLThemeTranslator::__('Document')),
			'envelope'				=>	array(TLThemeTranslator::__('Envelope')),
			'graph'					=>	array(TLThemeTranslator::__('Graph')),
			'image'					=>	array(TLThemeTranslator::__('Image')),
			'leaves'				=>	array(TLThemeTranslator::__('Leaves')),
			'mobile'				=>	array(TLThemeTranslator::__('Mobile')),
			'music'					=>	array(TLThemeTranslator::__('Music')),
			'people'				=>	array(TLThemeTranslator::__('People')),
			'screen'				=>	array(TLThemeTranslator::__('Screen')),
			'signpost'				=>	array(TLThemeTranslator::__('Signpost')),
			'target'				=>	array(TLThemeTranslator::__('Target')),
			'tick'					=>	array(TLThemeTranslator::__('Tick')),
			'video'					=>	array(TLThemeTranslator::__('Video'))
		);		
		
		$this->style=array
		(
			1						=>	array(TLThemeTranslator::__('List style')),
			2						=>	array(TLThemeTranslator::__('Box style'))
		);
	}
	
	/**************************************************************************/
	
	function adminInit()
	{
		register_post_type
		(
			THEME_CONTEXT.'_feature',
			array
			(  
				'labels'							=> array
				(
					'name'							=>	TLThemeTranslator::__('Feature'),
					'singular_name'					=>	TLThemeTranslator::__('Features'),
					'add_new'						=>	TLThemeTranslator::__('Add New'),
					'add_new_item'					=>	TLThemeTranslator::__('Add New Feature'),
					'edit_item'						=>	TLThemeTranslator::__('Edit Feature'),
					'new_item'						=>	TLThemeTranslator::__('New Feature'),
					'all_items'						=>	TLThemeTranslator::__('All Features'),
					'view_item'						=>	TLThemeTranslator::__('View Feature'),
					'search_items'					=>	TLThemeTranslator::__('Search Feature'),
					'not_found'						=>	TLThemeTranslator::__('No Features found'),
					'not_found_in_trash'			=>	TLThemeTranslator::__('No Features found in Trash'), 
					'parent_item_colon'				=>	'',
					'menu_name'						=>	TLThemeTranslator::__('Features')
				), 
				'public'							=>	false,  
				'show_ui'							=>	true,  
				'capability_type'					=>	'post',
				'menu_position'						=>	25,
				'hierarchical'						=>	false,  
				'rewrite'							=>	true,  
				'supports'							=>	array('title','editor','page-attributes')  
			)				
		);  
		
		register_taxonomy
		(
			THEME_CONTEXT.'_feature_category',
			array(THEME_CONTEXT.'_feature'),
			array
			(
				'label'								=>	TLThemeTranslator::__('Categories'),
				'labels'							=>	array
				(
					'name'							=>	TLThemeTranslator::__('Features categories'),		 
					'singular_name'					=>	TLThemeTranslator::__('Features category'),		 
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
			'feature'		=> TLThemeTranslator::__('Feature'),
			'icon'			=> TLThemeTranslator::__('Icon')   
		);    

		return $column;  
	}  
	
	/**************************************************************************/
	
	function adminManageEditSortableColumn($column)
	{
		$column['feature']='title';
		$column['icon']='title';
		return($column);
	}
	
	/**************************************************************************/
	
	function adminManageColumn($column)
	{
		global $post;
		$option=TLThemeOption::getPostMeta($post);

		switch($column)  
		{
			case 'feature':   
				echo '<a href="'.get_edit_post_link($post->ID).'">'.get_the_title($post->ID).'</a>'; 
			break;
			case 'icon':   
				echo '<a href="'.get_edit_post_link($post->ID).'">'.TLThemeHelper::esc_html($this->icon[$option['feature_icon']][0]).'</a>'; 
			break;
		}  
		
		return($column);
	}

	/**************************************************************************/
	
	function adminInitMetaBox()
	{
		add_meta_box(THEME_CONTEXT.'_feature',TLThemeTranslator::__('Options'),array($this,'adminCreateMetaBox'),THEME_CONTEXT.'_feature','normal','high');	
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBox() 
	{
		global $post;
		
		$Theme=new TLTheme();
		
		$data=array();

		$data['option']=TLThemeOption::getPostMeta($post);
		$data['nonce']=wp_nonce_field('adminSaveMetaBox',THEME_OPTION_PREFIX.'_feature_noncename',false,false);
		
		$icon=$this->icon;
		ksort($icon);
		
		$data['dictionary']['icon']=$icon;
		$data['dictionary']['windowTarget']=$Theme->windowTarget;
		
		TLThemeHelper::setDeafultOption($data['option'],'feature_icon',null);
		
		TLThemeHelper::setDeafultOption($data['option'],'feature_url',null);
		TLThemeHelper::setDeafultOption($data['option'],'feature_url_window_target',null);

		$Template=new TLThemeTemplate($data,THEME_PATH_TEMPLATE.'admin/feature_meta_box.php');
		echo $Template->output();		
	}
	
	/**************************************************************************/
	
	function adminSaveMetaBox($post_id) 
	{
		if($_POST)
		{
			if(TLThemeHelper::checkSavePost($post_id,THEME_OPTION_PREFIX.'_feature_noncename','adminSaveMetaBox')===false) return(false);
			
			$option=TLThemeHelper::getPostOption('feature');
			update_post_meta($post_id,THEME_OPTION_PREFIX,$option);
		}
	}
	
	/**************************************************************************/
	
	function createFeature($attr)
	{
		$default=array
		(
			'type'			=>	'1',
			'layout'		=>	'100',
			'category'		=>	'',
			'css_class'		=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		$Layout=new TLThemeLayout();
		$Validation=new TLThemeValidation();
		
		if(!in_array($attribute['type'],array(1,2))) return;
		if(!isset($Layout->layout[$attribute['layout']])) return;
		
		$argument=array
		(
			'post_type'							=>	THEME_CONTEXT.'_feature',
			THEME_CONTEXT.'_feature_category'	=>	$attribute['category'],
			'posts_per_page'					=>	-1,
			'orderby'							=>	'menu_order',
			'order'								=>	'asc'
		);
		
		$query=new WP_Query($argument);
		if($query===false) return;

		$output=null;
		$data=new stdClass();
		$data->exclude=array();
		
		foreach($query->posts as $value)
		{
			if($Validation->isEmpty($value->post_title) || $Validation->isEmpty($value->post_content))
				$data->exclude[]=$value->ID;
		}
		
		$count=count($query->posts);
		
		if(($count) && ($count!=count($data->exclude)))
		{
			$data->query=$query;
			
			$data->meta=new stdClass();
			
			$data->meta->type=$attribute['type'];
			$data->meta->layout=$attribute['layout'];
			$data->meta->css_class=$attribute['css_class'];

			$Template=new TLThemeTemplate($data,THEME_TEMPLATE_DIR.'feature.php');
			$output=$Template->outputWP(true);	
		}
		
		return($output);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>