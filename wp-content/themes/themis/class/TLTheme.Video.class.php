<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeVideo
{
	/**************************************************************************/

	function TLThemeVideo()
	{
		$this->mediaType=array
		(
			'youtube'		=>	array(TLThemeTranslator::__('Youtube video'),'video'),
			'vimeo'			=>	array(TLThemeTranslator::__('Vimeo video'),'video'),
			'metacafe'		=>	array(TLThemeTranslator::__('Metacafe video'),'video'),
			'dailymotion'	=>	array(TLThemeTranslator::__('Dailymotion video'),'video')
		);		
	}
	
	/**************************************************************************/
	
	function createVideo($attr)
	{
		$output=null;
		$default=array
		(
			'url'							=>	'',
			'type'							=>	'youtube',
			'width'							=>	'',
			'css_class'						=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);	
		
		$url=$this->parseVideoURL($attribute['url'],$attribute['type']);
		if($url===false) return(null);
				
		$data=new stdClass();	
		$data->meta=new stdClass();
		
		$data->meta->url=$url;
		$data->meta->css_class=$attribute['css_class'];
		
		$data->meta->width=$attribute['width']>0 ? $attribute['width'] : 0;
		
		$Template=new TLThemeTemplate($data,THEME_TEMPLATE_DIR.'video.php');
		$output=$Template->outputWP(true);

		return($output);
	}

	/**************************************************************************/
	
	function parseVideoURL($url,$type)
	{
		$parseURL=null;
		$result=array();
		
		switch($type)
		{
			case 'youtube':
				
				if(preg_match('/(youtube\.com|youtu\.be)\/(watch\?v=|v\/|u\/|embed\/?)?(videoseries\?list=(.*)|[\w-]{11}|\?listType=(.*)&list=(.*)).*/i',$url,$result))
					$parseURL='http://www.youtube.com/embed/'.$result[3];
				
			break;
			case 'vimeo':
				
				if(preg_match('/(?:vimeo(?:pro)?.com)\/(?:[^\d]+)?(\d+)(?:.*)/',$url,$result))
					$parseURL='http://player.vimeo.com/video/'.$result[1];
				
			break;	
			case 'metacafe':
				
				if(preg_match('/metacafe.com\/(?:watch|fplayer)\/([\w\-]{1,10})/',$url,$result))
					$parseURL='http://www.metacafe.com/fplayer/'.$result[1].'/.swf';	
				
			break;
			case 'dailymotion':
				
				if(preg_match('/dailymotion.com\/video\/(.*)\/?(.*)/',$url,$result))
					$parseURL='http://www.dailymotion.com/swf/video/'.$result[1];	
				
			break;
		}
		
		return($parseURL);
	}
		
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>