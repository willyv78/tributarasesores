<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeWidgetBlogSearch extends TLThemeWidget 
{
	
	/**************************************************************************/
	
    function TLThemeWidgetBlogSearch() 
	{
		parent::WP_Widget(THEME_CONTEXT.'_widget_blog_search',TLThemeTranslator::__('Themis theme: Search'),array('description'=>TLThemeTranslator::__('Displays search form')));
    }
	
	/**************************************************************************/
	
    function widget($argument,$instance) 
	{
		$argument['_data']=array();
		$argument['_data']['file']='widget_blog_search.php';

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
		$instance['_data']['file']='widget_blog_search.php';
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