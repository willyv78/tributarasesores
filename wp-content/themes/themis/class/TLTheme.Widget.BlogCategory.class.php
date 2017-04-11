<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeWidgetBlogCategory extends TLThemeWidget 
{
	
	/**************************************************************************/
	
    function TLThemeWidgetBlogCategory() 
	{
		parent::WP_Widget(THEME_CONTEXT.'_widget_blog_category',TLThemeTranslator::__('Themis theme: Blog categories'),array('description'=>TLThemeTranslator::__('List of blog categories')));
    }
	
	/**************************************************************************/
	
    function widget($argument,$instance) 
	{
		$argument['_data']=array();
		$argument['_data']['file']='widget_blog_category.php';
		
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
		$instance['_data']['file']='widget_blog_category.php';
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