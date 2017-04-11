<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeWidgetTestimonial extends TLThemeWidget 
{
	
	/**************************************************************************/
	
    function TLThemeWidgetTestimonial() 
	{
		parent::WP_Widget(THEME_CONTEXT.'_widget_testimonial',TLThemeTranslator::__('Themis theme: Testimonials'),array('description'=>TLThemeTranslator::__('Displays carousel of testimonials')));
    }
	
	/**************************************************************************/
	
    function widget($argument,$instance) 
	{
		TLThemeHelper::removeUIndex($instance,'category','items_per_page');
		
		$TesimonialPost=new TLThemeTestimonialPost();
		$data=$TesimonialPost->getTestimonial(array('category'=>$instance['category'],'items_per_page'=>$instance['items_per_page']));

		$argument['_data']['data']=$data;
		$argument['_data']['file']='widget_testimonial.php';
		
		parent::widget($argument,$instance);
    }
	
	/**************************************************************************/
	
    function update($new_instance,$old_instance) 
	{
		$instance=array();
		$instance['title']=$new_instance['title'];
		$instance['category']=$new_instance['category'];
		return($instance);
    }
	
	/**************************************************************************/
	
	function form($instance) 
	{	
		$instance['_data']['file']='widget_testimonial.php';
		$instance['_data']['field']=array('title','category');
		
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