<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeGoogleFont
{
	/**************************************************************************/
	
	function TLThemeGoogleFont()
	{
		
	}
	
	/**************************************************************************/

	function scheduleDownload()
	{
		$cTime=time();
		$oTime=(int)TLThemeOption::getOption('font_google_time');

		if($cTime-$oTime>(THEME_GOOGLE_FONT_REFRESH_INTERVAL)) $this->download();
	}
	
	/**************************************************************************/		

	function download()
	{
		$font=wp_remote_get('https://www.googleapis.com/webfonts/v1/webfonts?key='.THEME_GOOGLE_FONT_KEY,array('sslverify'=>false));
		
		if(is_wp_error($font)) return(false);

		update_option(THEME_FONT_OPTION_PREFIX,$font['body']);

		TLThemeOption::updateOption(array('font_google_time'=>time()));
		
		return(true);
	}
	
	/**************************************************************************/
	
	function unpack()
	{
		$data=array();
		$font=json_decode(get_option(THEME_FONT_OPTION_PREFIX));

		foreach((array)$font->items as $value)
			$data[$value->family]=array('variant'=>$value->variants,'subset'=>$value->subsets);	

		return($data);
	}
	
	/**************************************************************************/
	
	function import()
	{
		$response=array('global'=>array('error'=>1));
		
		$Notice=new TLThemeNotice();
		
		$result=$this->download();
		
		if($result)
		{
			$response['global']['error']=0;
		}
		else
		{
			$Notice->addError(TLThemeHelper::getFormName('to_import_google_font',false),TLThemeHelper::esc_html('Cannot import list of fonts'));

			$response['local']=$Notice->getError();
		}
			
		$response['global']['notice']=$Notice->createHTML(THEME_PATH_TEMPLATE.'notice.php');

		echo json_encode($response);
		exit;			
	}

	/**************************************************************************/
	
	function getFontByName()
	{
		$query=$_GET['query'];
		
		$data=array();
		$dictionary=$this->unpack();
		
		foreach($dictionary as $index=>$value)
		{
			if(preg_match('/^'.preg_quote($query,'/').'/i',$index,$result))
			{
				$data[]=array('label'=>$index,'value'=>$index,'variant'=>json_encode($value['variant']));
				if(count($data)==10) break;
			}
		}
		
		echo json_encode($data);
		exit;
	}
	
	/**************************************************************************/
	
	function setToStyle(&$style)
	{
		$Validation=new TLThemeValidation();
		
		$download=array();
		$selector=array('base','h1','h2','h3','h4','h5','h6');
	
		$dictionary=$this->unpack();

		foreach($selector as $value)
		{
			$name=TLThemeOption::getOption('font_'.$value.'_family_google');
			
			if(($Validation->isNotEmpty($name)) && (!in_array($name,$download)))
			{
				if(!isset($dictionary[$name])) continue;
				
				$subset=join(',',(array)$dictionary[$name]['subset']);
				$variant=join(',',(array)$dictionary[$name]['variant']);
				
				$download[]=$name;
				$style['google-font-'.preg_replace('/ /','-',strtolower($name))]=array(1,null,'//fonts.googleapis.com/css?family='.urlencode($name).':'.$variant.'&subset='.$subset,array('style'));
			}
		}	
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>