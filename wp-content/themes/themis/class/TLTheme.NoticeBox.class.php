<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeNoticeBox
{
	/**************************************************************************/

	function TLThemeNoticeBox()
	{
		$this->type=array
		(
			'info'			=>	array(TLThemeTranslator::__('Information')),
			'error'			=>	array(TLThemeTranslator::__('Error')),
			'success'		=>	array(TLThemeTranslator::__('Success'))
		);
	}
	
	/**************************************************************************/
	
	function createNoticeBox($attr,$content)
	{
		$default=array
		(
			'type'					=>	'success',
			'header'				=>	'',
			'css_class'				=>	'',
			'time_to_close'			=>	'0',
			'show_close_button'		=>	'1'
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		if(!in_array($attribute['type'],array_keys($this->type))) $attribute['type']=$default['type'];
		
		$data=array();
		
		$data=new stdClass();
		$data->meta=new stdClass();
		
		$data->content=$content;
		$data->header=$attribute['header'];
		
		$data->meta->type=$attribute['type'];
		$data->meta->css_class=$attribute['css_class'];
		$data->meta->show_close_button=$attribute['show_close_button'];
		
		$data->meta->time_to_close=(int)$attribute['time_to_close']<0 ? 0 : (int)$attribute['time_to_close'];
		
		$Template=new TLThemeTemplate($data,THEME_TEMPLATE_DIR.'notice_box.php');
		$output=$Template->outputWP(true);
		
		return($output);		
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>