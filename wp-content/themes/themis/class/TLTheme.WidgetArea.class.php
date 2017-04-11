<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeWidgetArea
{
	/**************************************************************************/

	function TLThemeWidgetArea()
	{
		$this->widgetAreaData=array
		(
			0	=>	array(TLThemeTranslator::__('[None]'),'page-sidebar-disable'),
			1	=>	array(TLThemeTranslator::__('Left sidebar'),'page-sidebar-enable page-sidebar-left'),
			2	=>	array(TLThemeTranslator::__('Right sidebar'),'page-sidebar-enable page-sidebar-right')
		);		
		
		$this->widgetAreaBuiltIn=array
		(
			'blog'		=>	array('Sidebar Blog'),
			'page'		=>	array('Sidebar Page'),
			'footer'	=>	array('Sidebar Footer')
		);
	}
	
	/**************************************************************************/
	
	function adminInit()
	{
		register_post_type
		(
			THEME_CONTEXT.'_widget_area',
			array
			(
				'labels'=>array
				(
					'name'						=>	TLThemeTranslator::__('Widget Area'),
					'singular_name'				=>	TLThemeTranslator::__('Widgets Areas'),
					'add_new'					=>	TLThemeTranslator::__('Add New'),
					'add_new_item'				=>	TLThemeTranslator::__('Add New Widget Area'),
					'edit_item'					=>	TLThemeTranslator::__('Edit Widget Area'),
					'new_item'					=>	TLThemeTranslator::__('New Widget Area'),
					'all_items'					=>	TLThemeTranslator::__('All Widgets Areas'),
					'view_item'					=>	TLThemeTranslator::__('View Widget Area'),
					'search_items'				=>	TLThemeTranslator::__('Search Widgets Areas'),
					'not_found'					=>	TLThemeTranslator::__('No Widgets Areas Found'),
					'not_found_in_trash'		=>	TLThemeTranslator::__('No Widgets Areas Found in Trash'), 
					'parent_item_colon'			=>	'',
					'menu_name'					=>	TLThemeTranslator::__('Widgets Areas')
				),	
				'public'						=> false,  
				'show_ui'						=> true,  
				'capability_type'				=> 'post',
				'menu_position'					=> 25,
				'hierarchical'					=> false,  
				'rewrite'						=> true,  
				'supports'						=> array('title','page-attributes')  
			)
		);
	}

	/**************************************************************************/

	function adminManageEditColumn($column)
	{
		$column=array
		(  
			'cb'			=> '<input type="checkbox"/>',
			'title'			=> TLThemeTranslator::__('Title')
		);    

		return $column;  
	}  
	
	/**************************************************************************/
	
	function adminManageEditSortableColumn($column)
	{
		$column['title']='title';
		return($column);
	}
	
	/**************************************************************************/
	
	function adminManageColumn($column)
	{

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
	
	function adminSaveMetaBox($post_id) 
	{

	}
	
	/**************************************************************************/
	
	function getWidgetAreaId($id)
	{
		if((int)$id>0) return(THEME_CONTEXT.'_widget_area_id_'.$id);
		else return(THEME_CONTEXT.'_'.$id);
	}
	
	/**************************************************************************/
	
	function getWidgetArea($postStatus='publish',$orderBy='title',$order='asc')
	{
		$argument=array
		(
			'post_type'							=>	THEME_CONTEXT.'_widget_area',
			'posts_per_page'					=>	-1,
			'orderby'							=>	$orderBy,
			'order'								=>	$order
		);
		
		if(!is_null($postStatus)) 
			$argument['post_status']=$postStatus;
		
		$query=new WP_Query($argument);
		if($query===false) return;
		
		$data=array();
		
		foreach($this->widgetAreaBuiltIn as $index=>$value)
			$data[$index]=array($value[0]);
		
		foreach($query->posts as $index=>$value)
			$data[$value->ID]=array($value->post_title);
		
		return($data);
	}
	
	/**************************************************************************/
	
	function register()
	{ 
		if(!function_exists('register_sidebar')) return;
		
		$data=$this->getWidgetArea();

		foreach($data as $index=>$value)
		{
			register_sidebar(array
			(
				'id'				=> $this->getWidgetAreaId($index),
				'name'				=> $value[0],
				'before_widget'		=> '<div class="widget clear-fix">',
				'after_widget'		=> '</div>',
				'before_title'		=> '<h3>',
				'after_title'		=> '<span class="underline"></span></h3>'
			));		
		}
	}
	
	/**************************************************************************/

	function getWidgetAreaByPost($post,$sidebar=true,$widgetArea=true)
	{
		$data=array('id'=>0,'location'=>0);
		
		if(!$widgetArea) return($data);
		if(!is_object($post)) return($data);
		if(!in_array($post->post_type,array('post','page'))) return($data);

		if($sidebar)
		{
			$id=TLThemeOption::getGlobalOption($post,'content_widget_area');
			$location=TLThemeOption::getGlobalOption($post,'content_widget_area_location');
		}
		else
		{
			$id=TLThemeOption::getGlobalOption($post,'footer_widget_area');
			$location=1;
		}
		
		if(strcmp($id,'0')==0) return($data);
		if(strcmp($location,'0')==0) return($data);
	
		if(in_array(strval($id),array_keys($this->widgetAreaBuiltIn)))
		{
			return(array('id'=>$id,'location'=>$location));
		}
		else 
		{
			$post=get_post($id);
			if(is_null($post)) return($data);	
			return(array('id'=>$id,'location'=>$location));
		}
	}
	
	/**************************************************************************/
	
	function getWidgetAreaCSSClass($data)
	{
		if($data['location']==0) return(null);
		return($this->widgetAreaData[$data['location']][1]);
	}
	
	/**************************************************************************/
	
	function getWidgetAreaDictionary($useNone=true,$useGlobal=true,$useLeftUnchanged=false)
	{
		$widget=$this->getWidgetArea(null,'title','asc');
		
		$data=array();
		
		if($useNone) $data[0]=array('[None]');
		if($useGlobal) $data[-1]=array('[Use global settings]');
		if($useLeftUnchanged) $data[-10]=array('[Left unchanged]');
		
		foreach($widget as $index=>$value)
			$data[$index]=array($value[0]);
		
		return($data);
	}
	
	/**************************************************************************/
	
	function getWidgetAreaLocationDictionary($useNone=true,$useGlobal=true,$useLeftUnchanged=false)
	{
		$data=array();
		
		if($useNone) $data[0]=array('[None]');
		if($useGlobal) $data[-1]=array('[Use global settings]');
		if($useLeftUnchanged) $data[-10]=array('[Left unchanged]');
		
		foreach($this->widgetAreaData as $index=>$value)
		{
			if($index==0) continue;
			$data[$index]=array($value[0]);
		}
		
		return($data);
	}
	
	/**************************************************************************/

	function create($widgetArea)
	{
		if(!function_exists('dynamic_sidebar')) return;
		dynamic_sidebar($this->getWidgetAreaId($widgetArea['id']));
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>