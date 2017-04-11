<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeWidgetLatestPost extends TLThemeWidget 
{
	
	/**************************************************************************/
	
    function TLThemeWidgetLatestPost() 
	{
		parent::WP_Widget(THEME_CONTEXT.'_widget_latest_post',TLThemeTranslator::__('Themis theme: Latest posts'),array('description'=>TLThemeTranslator::__('Displays latest posts')));
    }
	
	/**************************************************************************/
	
    function widget($argument,$instance) 
	{
		$data=array();
		
		$parameter=array
		(
			'post_type'							=>	'post',
			'posts_per_page'					=>	(int)$instance['count'],
			'orderby'							=>	'post_date',
			'order'								=>	'desc'
		);

		$query=new WP_Query($parameter);
		if($query===false) return;
		
		$argument['_data']['query']=$query;
		$argument['_data']['file']='widget_latest_post.php';

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
		$instance['_data']['file']='widget_latest_post.php';
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