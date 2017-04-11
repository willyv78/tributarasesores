<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeWidgetCompanyInfo extends TLThemeWidget 
{
	
	/**************************************************************************/
	
    function TLThemeWidgetCompanyInfo() 
	{
		parent::WP_Widget(THEME_CONTEXT.'_widget_company_info',TLThemeTranslator::__('Themis theme: Company info'),array('description'=>TLThemeTranslator::__('Displays company address details')));
    }
	
	/**************************************************************************/
	
    function widget($argument,$instance) 
	{
		$argument['_data']=array();
		$argument['_data']['file']='widget_company_info.php';
		
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
		$instance['_data']['file']='widget_company_info.php';
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