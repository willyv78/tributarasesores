<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeWidgetMenu extends TLThemeWidget 
{
	
	/**************************************************************************/
	
    function TLThemeWidgetMenu() 
	{
		parent::WP_Widget(THEME_CONTEXT.'_widget_menu',TLThemeTranslator::__('Themis theme: Widget menu'),array('description'=>TLThemeTranslator::__('Creates vertical menu.')));
    }
	
	/**************************************************************************/
	
    function widget($argument,$instance) 
	{
		$argument['_data']=array();
		$argument['_data']['file']='widget_menu.php';

		parent::widget($argument,$instance);
    }
	
	/**************************************************************************/
	
    function update($new_instance,$old_instance)
	{
		$instance=array();
		$instance['title']=$new_instance['title'];
		$instance['menu_id']=$new_instance['menu_id'];
		return($instance);
    }
	
	/**************************************************************************/
	
	function form($instance) 
	{	
		$instance['_data']['file']='widget_menu.php';
		$instance['_data']['field']=array('title','menu_id');
		
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