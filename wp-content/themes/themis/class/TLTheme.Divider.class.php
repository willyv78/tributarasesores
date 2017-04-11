<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeDivider
{
	/**************************************************************************/
	
	function TLThemeDivider()
	{
		$this->borderStyle=array
		(
			'none'		=>	array(TLThemeTranslator::__('None')),
			'hidden'	=>	array(TLThemeTranslator::__('Hidden')),
			'dotted'	=>	array(TLThemeTranslator::__('Dotted')),
			'dashed'	=>	array(TLThemeTranslator::__('Dashed')),
			'solid'		=>	array(TLThemeTranslator::__('Solid')),
			'double'	=>	array(TLThemeTranslator::__('Double')),
			'groove'	=>	array(TLThemeTranslator::__('Groove')),
			'ridge'		=>	array(TLThemeTranslator::__('Ridge')),
			'inset'		=>	array(TLThemeTranslator::__('Inset')),
			'outset'	=>	array(TLThemeTranslator::__('Outset')),
			'inherit'	=>	array(TLThemeTranslator::__('Inherit'))
		);
	}
	
	/**************************************************************************/
	
	function createDivider($attr)
	{
		$default=array
		(
			'line_height'		=>	'',
			'line_style'		=>	'',
			'line_color'		=>	'',
			'margin_top'		=>	'',
			'margin_bottom'		=>	'',
			'css_class'			=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		$Validation=new TLThemeValidation();
		
		$style=array();
		
		if($Validation->isNumber($attribute['line_height'],0,999))
			$style['border-bottom-width']=$attribute['line_height'].'px';
		if($Validation->isHexColor($attribute['line_color']))
			$style['border-color']='#'.$attribute['line_color'];
		if(in_array($attribute['line_style'],array_keys($this->borderStyle)))
			$style['border-style']=$attribute['line_style'];
		if($Validation->isNumber($attribute['margin_top'],0,999))
			$style['padding-top']=$attribute['margin_top'].'px';
		if($Validation->isNumber($attribute['margin_bottom'],0,999))
			$style['margin-bottom']=$attribute['margin_bottom'].'px';
		
		$styleString=null;
		foreach($style as $index=>$value)
			$styleString.=$index.':'.$value.';';
		
		if(!is_null($styleString)) $styleString=' style="'.$styleString.'"';
		
		$output='<div class="divider clear-fix '.TLThemeHelper::esc_attr($attribute['css_class']).'"'.$styleString.'></div>';
		
		return($output);		
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>