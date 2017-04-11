<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeWidgetMostViewed extends TLThemeWidget 
{
	
	/**************************************************************************/
	
    function TLThemeWidgetMostViewed() 
	{
		parent::WP_Widget(THEME_CONTEXT.'_widget_most_viewed',TLThemeTranslator::__('Themis theme: Most viewed'),array('description'=>TLThemeTranslator::__('Displays most viewed posts')));
    }
	
	/**************************************************************************/
	
    function widget($argument,$instance) 
	{
		$parameter=array
		(
			'post_type'							=>	'post',
			'posts_per_page'					=>	(int)$instance['count'],
			'meta_key'							=>	THEME_CONTEXT.'_post_view_count',
			'orderby'							=>	'meta_value_num',
			'order'								=>	'desc'
		);

		$query=new WP_Query($parameter);
		if($query===false) return;

		$argument['_data']['query']=$query;
		$argument['_data']['file']='widget_most_viewed.php';
		
		parent::widget($argument,$instance);
    }
	
	/**************************************************************************/
	
    function update($new_instance,$old_instance) 
	{
		$instance=array();
		$instance['title']=$new_instance['title'];
		$instance['count']=(int)$new_instance['count'];
		return($instance);
    }
	
	/**************************************************************************/
	
	function form($instance) 
	{	
		$instance['_data']['file']='widget_most_viewed.php';
		$instance['_data']['field']=array('title','count');
		
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