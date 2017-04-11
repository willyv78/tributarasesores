<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeTranslator
{
	/**************************************************************************/
	
	static function __($text,$textId=null,$textPrefix='text_')
	{
		$text=TLThemeTranslator::translate($text,$textId,$textPrefix);
		
		if(TLThemeOption::getOption('text_translator_enable')==1) return($text);
		elseif(TLThemeOption::getOption('text_translator_method')==2) return(__($text,$textId));
		elseif(TLThemeOption::getOption('text_translator_method')==1) return(__($text,THEME_CONTEXT)); 
	}

	/**************************************************************************/

	static function _e($text,$textId=null,$textPrefix='text_')
	{
		$text=TLThemeTranslator::translate($text,$textId,$textPrefix);
		
		if(TLThemeOption::getOption('text_translator_enable')==1) echo $text;
		elseif(TLThemeOption::getOption('text_translator_method')==2) _e($text,$textId);
		elseif(TLThemeOption::getOption('text_translator_method')==1) _e($text,THEME_CONTEXT);
	}
	
	/**************************************************************************/

	static function esc_html__($text,$textId=null,$textPrefix='text_')
	{
		$text=TLThemeTranslator::translate($text,$textId,$textPrefix);
		
		if(TLThemeOption::getOption('text_translator_enable')==1) return(esc_html($text));
		elseif(TLThemeOption::getOption('text_translator_method')==2) return(esc_html__($text,$textId));
		elseif(TLThemeOption::getOption('text_translator_method')==1) return(esc_html__($text,THEME_CONTEXT));
	}
	
	/**************************************************************************/

	static function esc_html_e($text,$textId=null,$textPrefix='text_')
	{
		$text=TLThemeTranslator::translate($text,$textId,$textPrefix);

		if(TLThemeOption::getOption('text_translator_enable')==1) echo esc_html($text);
		elseif(TLThemeOption::getOption('text_translator_method')==2) esc_html_e($text,$textId);
		elseif(TLThemeOption::getOption('text_translator_method')==1) esc_html_e($text,THEME_CONTEXT);
	}
	
	/**************************************************************************/

	static function esc_attr__($text,$textId=null,$textPrefix='text_')
	{
		$text=TLThemeTranslator::translate($text,$textId,$textPrefix);
		
		if(TLThemeOption::getOption('text_translator_enable')==1) return(esc_attr($text));
		elseif(TLThemeOption::getOption('text_translator_method')==2) return(esc_attr__($text,$textId));
		elseif(TLThemeOption::getOption('text_translator_method')==1) return(esc_attr__($text,THEME_CONTEXT));	
	}
	
	/**************************************************************************/

	static function esc_attr_e($text,$textId=null,$textPrefix='text_')
	{
		$text=TLThemeTranslator::translate($text,$textId,$textPrefix);
		
		if(TLThemeOption::getOption('text_translator_enable')==1) echo esc_attr($text);
		elseif(TLThemeOption::getOption('text_translator_method')==2) esc_attr_e($text,$textId);
		elseif(TLThemeOption::getOption('text_translator_method')==1) esc_attr_e($text,THEME_CONTEXT);
	}
	
	/**************************************************************************/
	
	static function getText($text,$textPrefix='text_')
	{
		return(TLThemeOption::getOption($textPrefix.$text));
	}

	/**************************************************************************/
	
	static function register()
	{
		if((int)TLThemeTranslator::getText('translator_enable')!=1)
			load_theme_textdomain(THEME_DOMAIN,THEME_PATH.'languages/');
	}
	
	/**************************************************************************/
	
	static function translate($text,$textId,$textPrefix)
	{
		if(((int)TLThemeTranslator::getText('translator_enable')==1) && (!is_null($textId)))
			$text=TLThemeTranslator::getText($textId,$textPrefix);	

		return($text);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>