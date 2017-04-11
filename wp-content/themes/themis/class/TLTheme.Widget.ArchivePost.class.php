<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeWidgetArchivePost extends TLThemeWidget 
{
	
	/**************************************************************************/
	
    function TLThemeWidgetArchivePost() 
	{
		parent::WP_Widget(THEME_CONTEXT.'_widget_archive_post',TLThemeTranslator::__('Themis theme: Archive posts'),array('description'=>TLThemeTranslator::__('List of monthly archive posts')));
    }
	
	/**************************************************************************/
	
    function widget($argument,$instance) 
	{
		$argument['_data']=array();
		$argument['_data']['file']='widget_archive_post.php';
		
		parent::widget($argument,$instance);
    }
	
	/**************************************************************************/
	
    function update($new_instance,$old_instance) 
	{
		$instance=array();
		$instance['title']=$new_instance['title'];
		return($instance);
    }
	
	/**************************************************************************/
	
	function form($instance) 
	{	
		$instance['_data']['file']='widget_archive_post.php';
		$instance['_data']['field']=array('title');
		
		parent::form($instance);
	}
	
	/**************************************************************************/
	
	function register($class=null)
	{
		parent::register(is_null($class) ? get_class() : $class);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>