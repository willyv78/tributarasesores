<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeWidgetMenuBox extends TLThemeWidget 
{
	
	/**************************************************************************/
	
    function TLThemeWidgetMenuBox() 
	{
		parent::WP_Widget(THEME_CONTEXT.'_widget_menu_box',TLThemeTranslator::__('Themis theme: Menu box'),array('description'=>TLThemeTranslator::__('Displays menu box as a widget')));
    }
	
	/**************************************************************************/
	
    function widget($argument,$instance) 
	{		
		$MenuBox=new TLThemeMenuBox();
		$post=$MenuBox->getMenuBox();
		
		if($post===false) return;
		
		$argument['_data']['post']=$post;
		$argument['_data']['file']='widget_menu_box.php';
		
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
		$instance['_data']['file']='widget_menu_box.php';
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