<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeHelper
{
	/**************************************************************************/

	static function esc_html($text)
	{
		return(esc_html($text));
	}
	
	/**************************************************************************/

	static function esc_attr($text)
	{
		return(esc_attr($text));
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
	
	static function hexToRgb($hex) 
	{
		$color=array();

		$color['r']=hexdec(substr($hex,0,2));
		$color['g']=hexdec(substr($hex,2,2));
		$color['b']=hexdec(substr($hex,4,2));
	
		return($color);
	}
	
	/**************************************************************************/
	
	static function decToHex($dec,$add=true)
	{
		$hex=dechex($dec);
		if(($add) && (strlen($dec))==1) $hex='0'.$hex;
		return($hex);
	}
	
	/**************************************************************************/
	
	static function rgbToArgb($rgb,$opacity)
	{
		$opacity=dechex($opacity*255);
		return($opacity.NLThemeHelper::DEC2HEX($rgb['r']).NLThemeHelper::DEC2HEX($rgb['g']).NLThemeHelper::DEC2HEX($rgb['b']));
	}
	
	/**************************************************************************/
	
	static function createId()
	{
		return(strtoupper(md5(microtime())));
	}
	
	/**************************************************************************/
	
	static function getPostOption($prefix=null)
	{
		if(!is_null($prefix)) $prefix='_'.$prefix.'_';
		
		$option=array();
		foreach($_POST as $key=>$value)
		{
			if(preg_match('/^'.THEME_OPTION_PREFIX.$prefix.'/',$key,$result)) 
			{
				$index=preg_replace('/^'.THEME_OPTION_PREFIX.'_/','',$key);
				$option[$index]=$value;
			}
		}	
		
		$option=TLThemeHelper::stripslashesPOST($option);
		
		return($option);
	}

	/**************************************************************************/
	
	static function setDeafultOption(&$option,$index,$value)
	{
		if(array_key_exists($index,(array)$option)) return;
		$option[$index]=$value;
	}
	
	/**************************************************************************/
	
	static function stripslashesPOST($value)
	{
		return(stripslashes_deep($value));
	}

	/**************************************************************************/
	
	static function formatCode($value)
	{
		$value=preg_replace('/\t/','',$value);
		$value=preg_replace('~[\r\n\r\n]+~','',$value);
		return($value);
	}
	
	/**************************************************************************/
	
	static function getFormName($name,$display=true)
	{
		if(!$display) return(THEME_OPTION_PREFIX.'_'.$name);
		echo THEME_OPTION_PREFIX.'_'.$name;
	}
	
	/**************************************************************************/
	
	static function displayIf($value,$testValue,$text,$display=true)
	{
		if(is_array($value))
		{
			foreach($value as $v)
			{
				if(strcmp($v,$testValue)==0) 
				{
					if($display) echo $text;
					else return($text);
					return;
				}	
			}
		}
		else 
		{
			if(strcmp($value,$testValue)==0) 
			{
				if($display) echo $text;
				else return($text);
			}
		}
	}
	
	/**************************************************************************/
	
	static function disabledIf($value,$testValue,$display=true)
	{
		return(TLThemeHelper::displayIf($value,$testValue,' disabled ',$display));
	}
	
	/**************************************************************************/

	static function checkedIf($value,$testValue=1,$display=true)
	{
		return(TLThemeHelper::displayIf($value,$testValue,' checked ',$display));
	}
	
	/**************************************************************************/
	
	static function selectedIf($value,$testValue=1,$display=true)
	{
		return(TLThemeHelper::displayIf($value,$testValue,' selected ',$display));
	}
		
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
	
	static function addProtocolName($value,$protocol='http://')
	{
		if(!preg_match('/^'.preg_quote($protocol,'/').'/',$value)) return($protocol.$value);
		return($value);
	}
	
	/**************************************************************************/
	
	static function getPageNumber()
	{
		$page=1;
		
		if(get_query_var('paged')) $page=get_query_var('paged');
		elseif (get_query_var('page')) $page=get_query_var('page');

		return($page);
	}
	
	/**************************************************************************/
		
	static function extractDictionary($data,$element=array(),$labelIndex=0)
	{
		$dictionary=array();
		
		if(in_array('useNone',$element)) $dictionary[-1]=TLThemeTranslator::__('[None]');
		if(in_array('useSelect',$element)) $dictionary[-1]=TLThemeTranslator::__('[Select]');
		if(in_array('useDefault',$element)) $dictionary[-1]=TLThemeTranslator::__('[Use default settings]');
		
		foreach($data as $index=>$value)
			$dictionary[$index]=is_array($value) ? $value[$labelIndex] : $value;
		
		return($dictionary);
	}
	
	/**************************************************************************/
	
	static function createTermDictionary($term,$arg=array(),$data=array(),$element=array(),$key='slug')
	{
		$dictionary=array();

		$default=array
		(
			'hide_empty'	=>	false
		);
		
		$argument=array_merge($default,$arg);
		$result=get_terms(array($term),$argument);	
		
		if(in_array('useNone',$element)) $dictionary[-1]=TLThemeTranslator::__('[None]');
		if(in_array('useSelect',$element)) $dictionary[-1]=TLThemeTranslator::__('[Select]');
		if(in_array('useDefault',$element)) $dictionary[-1]=TLThemeTranslator::__('[Use default settings]');
		
		if($result)
		{		
			if(is_array($result))
			{
				foreach($result as $post)
				{
					if($key=='id') $dictionary[$post->term_id]=$post->name;
					if($key=='slug') $dictionary[$post->slug]=$post->name;
				}
			}
		}
			
		return($dictionary);		
	}
	
	/**************************************************************************/
	
	static function createDictionary($arg,$data=array(),$element=array())
	{
		$data=(array)$data;
		
		$default=array
		(
			'posts_per_page'	=>	-1,
			'orderby'			=>	'title',
			'order'				=>	'asc'
		);
		
		$argument=array_merge($default,$arg);
		
		$dictionary=array();
		
		$result=new WP_Query($argument);	
		
		if(in_array('useNone',$element)) $dictionary[-1]=TLThemeTranslator::__('[None]');
		if(in_array('useSelect',$element)) $dictionary[-1]=TLThemeTranslator::__('[Select]');
		if(in_array('useDefault',$element)) $dictionary[-1]=TLThemeTranslator::__('[Use default settings]');
		
		if(count($result->posts))
		{			
			foreach($result->posts as $post)
				$dictionary[$post->ID]=$post->post_title;
		}
			
		return($dictionary);		
	}
	
	/**************************************************************************/
	
	static function limitChar($text,$limit)
	{
		return(mb_substr($text,0,$limit,'UTF-8'));
	}
	
	/**************************************************************************/
	
	static function limitWord($text,$limit)
	{
		$words=explode(' ',$text,($limit+1));
		if(count($words)>$limit) array_pop($words);
		return implode(' ',$words);
	}
	
	/**************************************************************************/
	
	static function escapeShortcodeAttr($value)
	{
		return(esc_attr($value));
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>