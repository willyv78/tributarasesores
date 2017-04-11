<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeInfoPanelPost
{
	
	/**************************************************************************/
	
	var $option;
	
	/**************************************************************************/
	
	function TLThemeInfoPanelPost()
	{
		
	}
	
	/**************************************************************************/
	
	function adminInit()
	{
		register_post_type
		(
			THEME_CONTEXT.'_infopanel',
			array
			(  
				'labels'								=>	array
				(
					'name'								=>	TLThemeTranslator::__('Infopanel'),
					'singular_name'						=>	TLThemeTranslator::__('Infopanel'),
					'add_new'							=>	TLThemeTranslator::__('Add New'),
					'add_new_item'						=>	TLThemeTranslator::__('Add New Infopanel'),
					'edit_item'							=>	TLThemeTranslator::__('Edit Infopanel'),
					'new_item'							=>	TLThemeTranslator::__('New Infopanel'),
					'all_items'							=>	TLThemeTranslator::__('All Infopanels'),
					'view_item'							=>	TLThemeTranslator::__('View Infopanel'),
					'search_items'						=>	TLThemeTranslator::__('Search Infopanels'),
					'not_found'							=>	TLThemeTranslator::__('No Infopanels found'),
					'not_found_in_trash'				=>	TLThemeTranslator::__('No Infopanels found in Trash'), 
					'parent_item_colon'					=>	'',
					'menu_name'							=>	'Infopanels'
				), 
				'public'								=>	false,  
				'show_ui'								=>	true,  
				'capability_type'						=>	'post',
				'menu_position'							=>	25,
				'hierarchical'							=>	false,  
				'rewrite'								=>	true,  
				'supports'								=>	array('title')  
			)
		);
	}

	/**************************************************************************/

	function adminManageEditColumn($column)
	{
		return $column;  
	}  
	
	/**************************************************************************/
	
	function adminManageEditSortableColumn($column)
	{
		return($column);
	}
	
	/**************************************************************************/
	
	function adminManageColumn($column)
	{
		return($column);
	}

	/**************************************************************************/
	
	function adminInitMetaBox()
	{
		add_meta_box(THEME_CONTEXT.'_infopanel',TLThemeTranslator::__('Options'),array($this,'adminCreateMetaBox'),THEME_CONTEXT.'_infopanel','normal','high');	
	}
	
	/**************************************************************************/
	
	function adminCreateMetaBox() 
	{
		global $post;
		
		$data=array();

		$data['option']=TLThemeOption::getPostMeta($post);
		$data['nonce']=wp_nonce_field('adminSaveMetaBox',THEME_OPTION_PREFIX.'_infopanel_noncename',false,false);

		$data['postId']=$post->ID;
		
		TLThemeHelper::setDeafultOption($data['option'],'infopanel_first_line_text',null);
		TLThemeHelper::setDeafultOption($data['option'],'infopanel_first_line_text_color',null);
		TLThemeHelper::setDeafultOption($data['option'],'infopanel_second_line_text',null);
		TLThemeHelper::setDeafultOption($data['option'],'infopanel_second_line_text_color',null);
		TLThemeHelper::setDeafultOption($data['option'],'infopanel_box_padding_top',null);
		TLThemeHelper::setDeafultOption($data['option'],'infopanel_box_padding_right',null);
		TLThemeHelper::setDeafultOption($data['option'],'infopanel_box_padding_bottom',null);
		TLThemeHelper::setDeafultOption($data['option'],'infopanel_box_padding_left',null);
		TLThemeHelper::setDeafultOption($data['option'],'infopanel_box_bg_color',null);
		TLThemeHelper::setDeafultOption($data['option'],'infopanel_button_label',null);
		TLThemeHelper::setDeafultOption($data['option'],'infopanel_button_link',null);
		TLThemeHelper::setDeafultOption($data['option'],'infopanel_button_text_color',null);
		TLThemeHelper::setDeafultOption($data['option'],'infopanel_button_bg_color',null);
		
		$Template=new TLThemeTemplate($data,THEME_PATH_TEMPLATE.'admin/infopanel_meta_box.php');
		echo $Template->output();		
	}
	
	/**************************************************************************/
	
	function adminSaveMetaBox($post_id) 
	{
		if($_POST)
		{
			if(TLThemeHelper::checkSavePost($post_id,THEME_OPTION_PREFIX.'_infopanel_noncename','adminSaveMetaBox')===false) return(false);
			
			$option=TLThemeHelper::getPostOption('infopanel');
			update_post_meta($post_id,THEME_OPTION_PREFIX,$option);
		}
	}
	
	/**************************************************************************/
	
	function createInfoPanel($attr,$content)
	{
		$default=array
		(
			'id'			=>	'0',
			'css_class'		=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		$argument=array
		(
			'p'									=>	(int)$attribute['id'],
			'post_type'							=>	THEME_CONTEXT.'_infopanel',
			'posts_per_page'					=>	1	
		);
		
		$query=new WP_Query($argument);	
		
		if($query===false) return;
		if(count($query->posts)!=1) return;

		$data=new stdClass();
		$data->meta=new stdClass();

		$data->query=$query;
		$data->option=TLThemeOption::getPostMeta($query->posts[0]);
		
		$data->meta->css_class=$attribute['css_class'];
			
		$Template=new TLThemeTemplate($data,THEME_TEMPLATE_DIR.'infopanel.php');
		return($Template->outputWP(true));
	}
	
	/**************************************************************************/
	
	function getInfoPanelStyle()
	{
		$post=get_posts(array('post_type'=>THEME_CONTEXT.'_infopanel','numberposts'=>-1,'orderby'=>'menu_order','order'=>'asc','suppress_filters'=>false));
		
		$data=array();
		
		foreach($post as $value)
		{
			$option=TLThemeOption::getPostMeta($value);
			$data[$value->ID]=$option;
		}	
		
		return($data);
	}
	
	/**************************************************************************/
	
	function createDictionary()
	{
		$argument=array
		(
			'post_type'			=>	THEME_CONTEXT.'_infopanel'
		);
		
		return(TLThemeHelper::createDictionary($argument));		
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>