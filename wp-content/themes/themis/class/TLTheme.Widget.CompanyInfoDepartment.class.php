<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeWidgetCompanyInfoDepartment extends TLThemeWidget 
{
	
	/**************************************************************************/
	
    function TLThemeWidgetCompanyInfoDepartment() 
	{
		parent::WP_Widget(THEME_CONTEXT.'_widget_company_info_department',TLThemeTranslator::__('Themis theme: Department info'),array('description'=>TLThemeTranslator::__('Displays company department address details')));
    }
	
	/**************************************************************************/
	
    function widget($argument,$instance) 
	{
		$argument['_data']=array();
		$argument['_data']['file']='widget_company_info_department.php';
		
		parent::widget($argument,$instance);
    }
	
	/**************************************************************************/
	
    function update($new_instance,$old_instance) 
	{
		$instance=array();
		$instance['title']=$new_instance['title'];
		$instance['company_name']=$new_instance['company_name'];
		$instance['company_street']=$new_instance['company_street'];
		$instance['company_postcode']=$new_instance['company_postcode'];
		$instance['company_city']=$new_instance['company_city'];
		$instance['company_state']=$new_instance['company_state'];
		$instance['company_country']=$new_instance['company_country'];
		$instance['company_phone']=$new_instance['company_phone'];
		$instance['company_fax']=$new_instance['company_fax'];
		$instance['company_email']=$new_instance['company_email'];
		
		return($instance);
    }
	
	/**************************************************************************/
	
	function form($instance) 
	{	
		$instance['_data']['file']='widget_company_info_department.php';
		$instance['_data']['field']=array('title','company_name','company_street','company_postcode','company_city','company_state','company_country','company_phone','company_fax','company_email');
		
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