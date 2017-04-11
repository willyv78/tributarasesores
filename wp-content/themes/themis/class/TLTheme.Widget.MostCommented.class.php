<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeWidgetMostCommented extends TLThemeWidget 
{
	
	/**************************************************************************/
	
    function TLThemeWidgetMostCommented() 
	{
		parent::WP_Widget(THEME_CONTEXT.'_widget_most_commented',TLThemeTranslator::__('Themis theme: Most commented'),array('description'=>TLThemeTranslator::__('Displays most commented posts')));
    }
	
	/**************************************************************************/
	
    function widget($argument,$instance) 
	{
		$parameter=array
		(
			'post_type'							=>	'post',
			'posts_per_page'					=>	(int)$instance['count'],
			'orderby'							=>	'comment_count',
			'order'								=>	'desc'
		);

		$query=new WP_Query($parameter);
		if($query===false) return;

		$argument['_data']['query']=$query;
		$argument['_data']['file']='widget_most_commented.php';
		
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
		$instance['_data']['file']='widget_most_commented.php';
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