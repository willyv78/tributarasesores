<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeShortcode
{
	/**************************************************************************/

	function TLThemeShortcode()
	{

	}
	
	/**************************************************************************/
	
	function header($attr,$content)
	{
		$output=null;
		
		$default=array
		(
			'important'		=>	'3',
			'underline'		=>	'1',
			'css_class'		=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		if(!in_array((int)$attribute['underline'],array(0,1))) $attribute['underline']=$default['underline'];
		if(!in_array((int)$attribute['important'],array(1,2,3,4,5,6))) $attribute['important']=$default['important'];
		
		if($attribute['underline']==1) $output='<span class="underline"></span>';
		
		$output='<h'.(int)$attribute['important'].' class="'.TLThemeHelper::esc_attr($attribute['css_class']).'">'.do_shortcode($content).$output.'</h'.(int)$attribute['important'].'>';
		return($output);		
	}
	
	/**************************************************************************/
	
	function dropcap($attr,$content)
	{
		$default=array
		(
			'css_class'		=>	'',
			'bg_color'		=>	'',
			'text_color'	=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		$style=null;
		$Validation=new TLThemeValidation();
		
		if($Validation->isHexColor($attribute['bg_color']))		$style.='background-color:#'.$attribute['bg_color'].';';
		if($Validation->isHexColor($attribute['text_color']))	$style.='color:#'.$attribute['text_color'].';';
		
		if($Validation->isNotEmpty($style)) $style='style="'.$style.'"';
		
		$letter=mb_substr($content,0,1);
		$content=mb_substr($content,1);
		
		$output='<p class="dropcap '.TLThemeHelper::esc_attr($attribute['css_class']).'"><span '.$style.'>'.$letter.'</span>'.do_shortcode($content).'</p>';
		return($output);
	}
	
	/**************************************************************************/
	
	function redirect($attr)
	{
		$default=array
		(
			'url'			=>	'',
			'post_id'		=>	'',
			'status'		=>	'301'
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		$Validation=new TLThemeValidation();
		
		if($Validation->isEmpty($attribute['url']) && $Validation->isEmpty($attribute['post_id'])) return;
		$url=$Validation->isEmpty($attribute['url']) ? get_permalink($attribute['post_id']) : $attribute['url'];
		
		ob_clean();
		wp_redirect($url,$attribute['status']);
		exit;
	}
	
	/**************************************************************************/
	
	function pre($attr,$content)
	{
		$default=array
		(
			'css_class'	=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		$content=trim(preg_replace(array('/\[/','/\]/'),array('&#91;','&#93;'),htmlspecialchars($content)));
		
		$output='<pre class="'.TLThemeHelper::esc_attr($attribute['css_class']).'">'.$content.'</pre>';
		return($output);
	}	
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>