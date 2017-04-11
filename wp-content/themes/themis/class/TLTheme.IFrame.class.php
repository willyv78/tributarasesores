<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeIFrame
{
	/**************************************************************************/
	
	function TLThemeIFrame()
	{
		
		
	}
	
	/**************************************************************************/
	
	function createIFrame($attr)
	{
		$default=array
		(
			'url'			=>	'',
			'width'			=>	'0',
			'height'		=>	'0',
			'css_class'		=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		$Validation=new TLThemeValidation();
		if($Validation->isEmpty($attribute['url'])) return;
		
		$style1=null;
		$style2=null;
		
		if((int)$attribute['width']>0) $style1=' style="width:'.(int)$attribute['width'].'px;"';
		if((int)$attribute['height']>0) $style2=' style="height:'.(int)$attribute['height'].'px;padding-bottom:0px;"';
		
		$output='<div class="iframe-wrapper '.TLThemeHelper::esc_attr($attribute['css_class']).'"'.$style1.'><div class="iframe"'.$style2.'><iframe src="'.TLThemeHelper::esc_attr($attribute['url']).'"></iframe></div></div>';
		
		return($output);		
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>