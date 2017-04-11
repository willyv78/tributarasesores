<?php

/******************************************************************************/
/******************************************************************************/

class TLThemePricingListPost
{
	/**************************************************************************/
	
	function TLThemePricingListPost()
	{
		
	}
	
	/**************************************************************************/
	
	function adminInit()
	{
		register_post_type
		(
			THEME_CONTEXT.'_pricing_list',  
			array
			(  
				'labels'								=> array
				(
					'name'								=>	TLThemeTranslator::__('Pricing List'),
					'singular_name'						=>	TLThemeTranslator::__('Pricing List'),
					'add_new'							=>	TLThemeTranslator::__('Add New'),
					'add_new_item'						=>	TLThemeTranslator::__('Add New Pricing List'),
					'edit_item'							=>	TLThemeTranslator::__('Edit Pricing List Item'),
					'new_item'							=>	TLThemeTranslator::__('New Pricing List Item'),
					'all_items'							=>	TLThemeTranslator::__('All Pricing List Items'),
					'view_item'							=>	TLThemeTranslator::__('View Pricing List Item'),
					'search_items'						=>	TLThemeTranslator::__('Search Pricing List Item'),
					'not_found'							=>	TLThemeTranslator::__('No Pricing List items found'),
					'not_found_in_trash'				=>	TLThemeTranslator::__('No Pricing List items found in Trash'), 
					'parent_item_colon'					=>	'',
					'menu_name'							=>	TLThemeTranslator::__('Pricing List')
				), 
				'public'								=>	false,  
				'show_ui'								=>	true,  
				'capability_type'						=>	'post',
				'menu_position'							=>	25,
				'hierarchical'							=>	false,  
				'rewrite'								=>	true,  
				'supports'								=>	array('title','page-attributes')  
			)
		);
		
		register_taxonomy
		(
			THEME_CONTEXT.'_pricing_list_category',
			array(THEME_CONTEXT.'_pricing_list'),
			array
			(
				'label'								=>	TLThemeTranslator::__('Categories'),
				'labels'							=>	array
				(
					'name'							=>	TLThemeTranslator::__('Pricing lists categories'),		 
					'singular_name'					=>	TLThemeTranslator::__('Pricing list category'),		 
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
			'title'			=> TLThemeTranslator::__('Title'),
			'price'			=> TLThemeTranslator::__('Price')   
		);    

		return $column;  
	}  
	
	/**************************************************************************/
	
	function adminManageEditSortableColumn($column)
	{
		$column['title']='title';
		$column['price']='title';
		return($column);
	}
	
	/**************************************************************************/
	
	function adminManageColumn($column)
	{
		global $post;
		$option=TLThemeOption::getPostMeta($post);

		switch($column)  
		{
			case 'price':   
				echo TLThemeHelper::esc_html($option['pricing_list_price']); 
			break;

		}  
		
		return($column);
	}

	/**************************************************************************/
	
	function adminInitMetaBox()
	{
		add_meta_box(THEME_CONTEXT.'_pricing_list',TLThemeTranslator::__('Options'),array($this,'adminCreateMetaBox'),THEME_CONTEXT.'_pricing_list','normal','high');	
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBox() 
	{
		global $post;
		
		$data=array();

		$data['option']=TLThemeOption::getPostMeta($post);
		$data['nonce']=wp_nonce_field('adminSaveMetaBox',THEME_OPTION_PREFIX.'_pricing_list_noncename',false,false);
		
		TLThemeHelper::setDeafultOption($data['option'],'pricing_list_price',null);

		$Template=new TLThemeTemplate($data,THEME_PATH_TEMPLATE.'admin/pricing_list_meta_box.php');
		echo $Template->output();		
	}
	
	/**************************************************************************/
	
	function adminSaveMetaBox($post_id) 
	{
		if($_POST)
		{
			if(TLThemeHelper::checkSavePost($post_id,THEME_OPTION_PREFIX.'_pricing_list_noncename','adminSaveMetaBox')===false) return(false);
			
			$option=TLThemeHelper::getPostOption('pricing_list');
			update_post_meta($post_id,THEME_OPTION_PREFIX,$option);
		}
	}
	
	/**************************************************************************/
	
	function createPricingList($attr)
	{
		$default=array
		(
			'category'		=>	'',
			'css_class'		=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		$argument=array
		(
			'post_type'								=>	THEME_CONTEXT.'_pricing_list',
			THEME_CONTEXT.'_pricing_list_category'	=>	$attribute['category'],
			'posts_per_page'						=>	-1,
			'orderby'								=>	'menu_order',
			'order'									=>	'asc'
		);
		
		$query=new WP_Query($argument);
		if($query===false) return;
		
		$Validation=new TLThemeValidation();
		
		$output=null;
		$data=new stdClass();
		$data->exclude=array();
		
		foreach($query->posts as $value)
		{
			$option=TLThemeOption::getPostMeta($value);
			if($Validation->isEmpty($value->post_title) || $Validation->isEmpty($option['pricing_list_price']))
				$data->exclude[]=$value->ID;
		}	
		
		$count=count($query->posts);
		
		if(($count) && ($count!=count($data->exclude)))
		{
			$data->query=$query;
			
			$data->meta=new stdClass();
			
			$data->meta->css_class=$attribute['css_class'];

			$Template=new TLThemeTemplate($data,THEME_TEMPLATE_DIR.'pricing_list.php');
			$output=$Template->outputWP(true);	
		}

		return($output);	
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>