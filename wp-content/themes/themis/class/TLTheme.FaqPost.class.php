<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeFaqPost
{
	/**************************************************************************/
	
	function TLThemeFaqPost()
	{
		
	}
	
	/**************************************************************************/
	
	function adminInit()
	{
		register_post_type
		(
			THEME_CONTEXT.'_faq',
			array
			(  
				'labels'							=> array
				(
					'name'							=>	TLThemeTranslator::__('FAQ'),
					'singular_name'					=>	TLThemeTranslator::__('FAQ'),
					'add_new'						=>	TLThemeTranslator::__('Add New'),
					'add_new_item'					=>	TLThemeTranslator::__('Add New FAQ Item'),
					'edit_item'						=>	TLThemeTranslator::__('Edit FAQ Item'),
					'new_item'						=>	TLThemeTranslator::__('New FAQ Item'),
					'all_items'						=>	TLThemeTranslator::__('All FAQ Items'),
					'view_item'						=>	TLThemeTranslator::__('View FAQ Item'),
					'search_items'					=>	TLThemeTranslator::__('Search FAQ Items'),
					'not_found'						=>	TLThemeTranslator::__('No FAQ items found'),
					'not_found_in_trash'			=>	TLThemeTranslator::__('No FAQ items found in Trash'), 
					'parent_item_colon'				=>	'',
					'menu_name'						=>	TLThemeTranslator::__('FAQ')
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
			THEME_CONTEXT.'_faq_category',
			array(THEME_CONTEXT.'_faq'),
			array
			(
				'label'								=>	TLThemeTranslator::__('Categories'),
				'labels'							=>	array
				(
					'name'							=>	TLThemeTranslator::__('FAQ categories'),		 
					'singular_name'					=>	TLThemeTranslator::__('FAQ category'),		 
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
			'question'		=> TLThemeTranslator::__('Question')
		);    

		return $column;  
	}  
	
	/**************************************************************************/
	
	function adminManageEditSortableColumn($column)
	{
		$column['question']='title';
		return($column);
	}
	
	/**************************************************************************/
	
	function adminManageColumn($column)
	{
		global $post;

		switch($column)  
		{
			case 'question':   
				echo '<a href="'.get_edit_post_link($post->ID).'">'.get_the_title($post->ID).'</a>'; 
			break;
		}  
		
		return($column);
	}

	/**************************************************************************/
	
	function adminInitMetaBox()
	{
		
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBox() 
	{
	
	}
	
	/**************************************************************************/
	
	function adminSaveMetaBox() 
	{

	}
	
	/**************************************************************************/
	
	function createFaq($attr)
	{
		$default=array
		(
			'active'		=>	'0',
			'category'		=>	'',
			'css_class'		=>	''
		);		
		
		$attribute=shortcode_atts($default,$attr);
		
		$Validation=new TLThemeValidation();
		
		$argument=array
		(
			'post_type'							=>	THEME_CONTEXT.'_faq',
			THEME_CONTEXT.'_faq_category'		=>	$attribute['category'],
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
			
			$data->meta->active=$attribute['active'];
			$data->meta->css_class=$attribute['css_class'];

			$Template=new TLThemeTemplate($data,THEME_TEMPLATE_DIR.'faq.php');
			$output=$Template->outputWP(true);	
		}
		
		return(do_shortcode($output));		
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>