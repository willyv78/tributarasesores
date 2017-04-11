<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeOption
{
	/**************************************************************************/
	
	static function createOption($refresh=false)
	{
		$GlobalData=new TLThemeGlobalData();
		return($GlobalData->setGlobalData(THEME_OPTION_GLOBAL_ARRAY_KEY,array('TLThemeOption','createOptionObject'),$refresh));				
	}
	
	/**************************************************************************/
	
	static function createOptionObject()
	{
		return((array)get_option(THEME_OPTION_PREFIX));
	}
	
	/**************************************************************************/
	
	static function refreshOption()
	{
		return(TLThemeOption::createOption(true));
	}
	
	/**************************************************************************/
	
	static function getOption($name)
	{
		TLThemeOption::createOption();
		
		global $themeGlobalData;
		
		if(!array_key_exists($name,$themeGlobalData[THEME_OPTION_GLOBAL_ARRAY_KEY])) return(null);
		return($themeGlobalData[THEME_OPTION_GLOBAL_ARRAY_KEY][$name]);		
	}
	
	/**************************************************************************/
	
	static function getGlobalOption($post,$name)
	{
		TLThemeOption::createOption();
		
		$value=0;
		$prefix=array
		(
			'post'						=>	array('post','blog_post'),
			'page'						=>	array('page','page')
		);
		
		if(!is_object($post)) return($value);
		if(!in_array($post->post_type,array_keys($prefix))) return($value);
		
		$option=TLThemeOption::getPostMeta($post);
	
		$key=$prefix[$post->post_type][0].'_'.$name;
		if(array_key_exists($key,(array)$option)) $value=$option[$key];
		
		$key=$prefix[$post->post_type][1].'_'.$name;
		if($value==-1) $value=TLThemeOption::getOption($key);
		
		return($value);
	}
	
	/**************************************************************************/
	
	static function getOptionObject()
	{
		global $themeGlobalData;
		return($themeGlobalData[THEME_OPTION_GLOBAL_ARRAY_KEY]);
	}
	
	/**************************************************************************/
	
	static function updateOption($option)
	{
		$nOption=array();
		foreach($option as $index=>$value) $nOption[$index]=$value;
		
		$oOption=TLThemeOption::refreshOption();
		update_option(THEME_OPTION_PREFIX,array_merge($oOption,$nOption));
		
		TLThemeOption::refreshOption();
	}
	
	/**************************************************************************/
	
	static function resetOption()
	{
		update_option(THEME_OPTION_PREFIX,array());
		TLThemeOption::refreshOption();		
	}
	
	/**************************************************************************/
	
	static function getPostMeta($post)
	{
		$id=is_object($post) ? $post->ID : (int)$post;
		return(get_post_meta($id,THEME_OPTION_PREFIX,true));
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>