<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeWidgetTwitterCarousel extends TLThemeWidget 
{
	
	/**************************************************************************/
	
    function TLThemeWidgetTwitterCarousel() 
	{
		parent::WP_Widget(THEME_CONTEXT.'_widget_twitter_carousel',TLThemeTranslator::__('Themis theme: Twitter carousel'),array('description'=>TLThemeTranslator::__('Displays latest Twitter feeds')));
    }
	
	/**************************************************************************/
	
    function widget($argument,$instance) 
	{
		$TwitterCarousel=new TLThemeTwitterCarousel();

		$argument['_data']['id']='latest_tweets_'.TLThemeHelper::createId();
		$argument['_data']['tweet']=$TwitterCarousel->getLatestTweet($instance);
		
		$argument['_data']['file']='widget_twitter_carousel.php';
		
		parent::widget($argument,$instance);
    }
	
	/**************************************************************************/
	
    function update($new_instance,$old_instance) 
	{
		$instance=array();
		$instance['title']=$new_instance['title'];
		$instance['name']=$new_instance['name'];
		$instance['count']=(int)$new_instance['count'];
		
		$instance['consumer_key']=$new_instance['consumer_key'];
		$instance['consumer_key_secret']=$new_instance['consumer_key_secret'];
		
		$instance['access_token']=$new_instance['access_token'];
		$instance['access_token_secret']=$new_instance['access_token_secret'];
		
		return($instance);
    }
	
	/**************************************************************************/
	
	function form($instance) 
	{	
		$instance['_data']['file']='widget_twitter_carousel.php';
		$instance['_data']['field']=array('title','name','consumer_key','consumer_key_secret','access_token','access_token_secret','count');

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