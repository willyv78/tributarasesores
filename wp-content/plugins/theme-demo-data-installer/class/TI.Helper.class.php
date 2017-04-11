<?php

/******************************************************************************/
/******************************************************************************/

class TIHelper
{
	/**************************************************************************/
	
	static function removeUIndex(&$data)
	{
		$argument=array_slice(func_get_args(),1);
		
		$data=(array)$data;
		
		foreach($argument as $index)
		{
			if(!is_array($index))
			{
				if(!array_key_exists($index,$data))
					$data[$index]='';
			}
			else
			{
				if(!array_key_exists($index[0],$data))
					$data[$index[0]]=$index[1];				
			}
		}
	}
	
	/**************************************************************************/

	static function returnIf($value,$testValue,$text='checked')
	{
		if(is_array($value))
		{
			foreach($value as $v)
			{
				if(strcmp($v,$testValue)==0) return($text);
			}
		}
		else 
		{
			if(strcmp($value,$testValue)==0) return($text);
		}
	}
	
	/**************************************************************************/

	static function checkSavePost($post_id,$name,$action=null)
	{
		if((defined('DOING_AUTOSAVE')) && (DOING_AUTOSAVE)) return(false);

		if(!array_key_exists($name,$_POST)) return(false);
		
		if(!wp_verify_nonce($_POST[$name],$action)) return(false);

		unset($_POST[$name]);
		
		if(!current_user_can('edit_post',$post_id)) return(false);
		
		return(true);
	}
	
	/**************************************************************************/
	
	static function getPOSTOption($prefix=null)
	{
		if(!is_null($prefix)) $prefix='_'.$prefix.'_';
		
		$option=array();
		foreach($_POST as $key=>$value)
		{
			if(preg_match('/^'.THEME_STYLE_PLUGIN_CONTEXT.$prefix.'/',$key,$result)) 
			{
				$index=preg_replace('/^'.THEME_STYLE_PLUGIN_CONTEXT.'_/','',$key);
				$option[$index]=$value;
			}
		}	
		
		$option=TIHelper::stripslashesPOST($option);
		
		return($option);
	}
	
	/**************************************************************************/
	
	static function stripslashesPOST($value)
	{
		return(stripslashes_deep($value));
	}
		
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>