<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeTestimonialPost
{
	
	/**************************************************************************/
	
	var $option;
	
	/**************************************************************************/
	
	function TLThemeTestimonialPost()
	{
		
	}
	
	/**************************************************************************/
	
	function adminInit()
	{
		register_post_type
		(
			THEME_CONTEXT.'_testimonial',
			array
			(  
				'labels'							=>	array
				(
					'name'							=>	TLThemeTranslator::__('Testimonial'),
					'singular_name'					=>	TLThemeTranslator::__('Testimonials'),
					'add_new'						=>	TLThemeTranslator::__('Add New'),
					'add_new_item'					=>	TLThemeTranslator::__('Add New Testimonial'),
					'edit_item'						=>	TLThemeTranslator::__('Edit Testimonial'),
					'new_item'						=>	TLThemeTranslator::__('New Testimonial'),
					'all_items'						=>	TLThemeTranslator::__('All Testimonials'),
					'view_item'						=>	TLThemeTranslator::__('View Testimonial'),
					'search_items'					=>	TLThemeTranslator::__('Search Testimonial'),
					'not_found'						=>	TLThemeTranslator::__('No Testimonials found'),
					'not_found_in_trash'			=>	TLThemeTranslator::__('No Testimonials found in Trash'), 
					'parent_item_colon'				=>	'',
					'menu_name'						=>	TLThemeTranslator::__('Testimonials')
				), 
				'public'							=>	false,  
				'show_ui'							=>	true,  
				'capability_type'					=>	'post',  
				'menu_position'						=>	25,
				'hierarchical'						=>	false,  
				'rewrite'							=>	true,  
				'supports'							=>	array('title','page-attributes')  
			)
		);
		
		register_taxonomy
		(
			THEME_CONTEXT.'_testimonial_category',
			array(THEME_CONTEXT.'_testimonial'),
			array
			(
				'label'								=>	'Categories',
				'labels'							=>	array
				(
					'name'							=>	TLThemeTranslator::__('Testimonials categories'),		 
					'singular_name'					=>	TLThemeTranslator::__('Testimonial category'),		 
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
			'testimonial'	=> TLThemeTranslator::__('Testimonial'),
			'person'		=> TLThemeTranslator::__('Person'),   
			'company'		=> TLThemeTranslator::__('Company')
		);    

		return $column;  
	}  
	
	/**************************************************************************/
	
	function adminManageEditSortableColumn($column)
	{
		$column['testimonial']='title';
		$column['person']='title';
		$column['company']='title';
		return($column);
	}
	
	/**************************************************************************/
	
	function adminManageColumn($column)
	{
		global $post;
		$option=TLThemeOption::getPostMeta($post);

		switch($column)  
		{
			case 'testimonial':   
				echo '<a href="'.get_edit_post_link($post->ID).'">'.get_the_title($post->ID).'</a>'; 
			break;
			case 'person':   
				echo '<a href="'.get_edit_post_link($post->ID).'">'.TLThemeHelper::esc_html($option['testimonial_person']).'</a>'; 
			break;
			case 'company':   
				echo '<a href="'.get_edit_post_link($post->ID).'">'.TLThemeHelper::esc_html($option['testimonial_company']).'</a>'; 
			break;
		}  
		
		return($column);
	}

	/**************************************************************************/
	
	function adminInitMetaBox()
	{
		add_meta_box(THEME_CONTEXT.'_testimonial',TLThemeTranslator::__('Options'),array($this,'adminCreateMetaBox'),THEME_CONTEXT.'_testimonial','normal','high');	
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBox() 
	{
		global $post;
		
		$data=array();

		$data['option']=TLThemeOption::getPostMeta($post);
		$data['nonce']=wp_nonce_field('adminSaveMetaBox',THEME_OPTION_PREFIX.'_testimonial_noncename',false,false);
		
		TLThemeHelper::setDeafultOption($data['option'],'testimonial_person',null);
		TLThemeHelper::setDeafultOption($data['option'],'testimonial_company',null);

		$Template=new TLThemeTemplate($data,THEME_PATH_TEMPLATE.'admin/testimonial_meta_box.php');
		echo $Template->output();		
	}
	
	/**************************************************************************/
	
	function adminSaveMetaBox($post_id) 
	{
		if($_POST)
		{
			if(TLThemeHelper::checkSavePost($post_id,THEME_OPTION_PREFIX.'_testimonial_noncename','adminSaveMetaBox')===false) return(false);
			
			$option=TLThemeHelper::getPostOption('testimonial');
			update_post_meta($post_id,THEME_OPTION_PREFIX,$option);
		}
	}
	
	/**************************************************************************/
	
	function getTestimonial($attr)
	{
		$default=array
		(
			'layout'				=>	'33x33x33',
			'category'				=>	'',
			'css_class'				=>	'',
			'items_per_page'		=>	'0'
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		$Layout=new TLThemeLayout();
		$Validation=new TLThemeValidation();
		
		if(!isset($Layout->layout[$attribute['layout']])) 
			$attribute['layout']=$default['layout'];
		if(!$Validation->isNumber($attribute['items_per_page'],1,1000)) 
			$attribute['items_per_page']=$default['items_per_page'];
		
		$argument=array
		(
			'post_type'								=>	THEME_CONTEXT.'_testimonial',
			THEME_CONTEXT.'_testimonial_category'	=>	$attribute['category'],
			'posts_per_page'						=>	-1,
			'orderby'								=>	'menu_order',
			'order'									=>	'asc'
		);
		
		$query=new WP_Query($argument);
		if($query===false) return;

		$data=new stdClass();
		
		$data->exclude=array();
		$data->pageIndex=array();
		
		$k=0;
		$i=0;
		
		$data->pageIndex[]=$k;

		foreach($query->posts as $value)
		{
			$option=TLThemeOption::getPostMeta($value);
			
			if($Validation->isEmpty($value->post_title)) continue;
			if(($Validation->isEmpty($value->post_title)) && ($Validation->isEmpty($option['testimonial_person'])) && ($Validation->isEmpty($option['testimonial_company']))) continue;
			
			$i++;
			$k++;

			if($attribute['items_per_page']>0)
			{
				if($i-$attribute['items_per_page']==0) 
				{
					$i=0;
					$data->pageIndex[]=$k;
				}
			}
		}	

		$count=count($query->posts);
		
		if(($count) && ($count!=count($data->exclude)))
		{
			if($attribute['items_per_page']>0) $data->pageIndex[]=$k;
			
			$data->query=$query;
			
			$data->meta=new stdClass();
			
			$data->meta->id=TLThemeHelper::createId();
			$data->meta->layout=$attribute['layout'];
			$data->meta->css_class=$attribute['css_class'];
			
			$data->meta->items_per_page=$attribute['items_per_page'];

			return($data);
		}
		
		return(null);
	}
	
	/**************************************************************************/
	
	function createTestimonial($attr)
	{
		$data=$this->getTestimonial($attr);
		
		if(is_null($data)) return;

		$Template=new TLThemeTemplate($data,THEME_TEMPLATE_DIR.'testimonial.php');
		return($Template->outputWP(true));
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>