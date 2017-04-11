<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeSocial
{
	/**************************************************************************/

	function TLThemeSocial()
	{
		$this->social=array
		(
			'blogger'			=>	array('name'=>'Blogger','info'=>TLThemeTranslator::__('Blogger profile settings')),
			'deviantart'		=>	array('name'=>'Deviantart','info'=>TLThemeTranslator::__('Deviantart profile settings')),
			'dribble'			=>	array('name'=>'Dribble','info'=>TLThemeTranslator::__('Dribble profile settings')),
			'envato'			=>	array('name'=>'Envato','info'=>TLThemeTranslator::__('Envato profile settings')),
			'facebook'			=>	array('name'=>'Facebook','info'=>TLThemeTranslator::__('Facebook profile settings')),
			'flickr'			=>	array('name'=>'Flickr','info'=>TLThemeTranslator::__('Flickr profile settings')),
			'forrst'			=>	array('name'=>'Forrst','info'=>TLThemeTranslator::__('Forrst profile settings')),
			'googleplus'		=>	array('name'=>'Google +','info'=>TLThemeTranslator::__('Google+ profile settings')),
			'linkedin'			=>	array('name'=>'Linkedin','info'=>TLThemeTranslator::__('Linkedin profile settings')),
			'myspace'			=>	array('name'=>'Myspace','info'=>TLThemeTranslator::__('Myspace profile settings')),
			'picasa'			=>	array('name'=>'Picasa','info'=>TLThemeTranslator::__('Picasa profile settings')),
			'skype'				=>	array('name'=>'Skype','info'=>TLThemeTranslator::__('Skype profile settings')),
			'soundcloud'		=>	array('name'=>'Soundcloud','info'=>TLThemeTranslator::__('Soundcloud profile settings')),
			'stumbleupon'		=>	array('name'=>'Stumbleupon','info'=>TLThemeTranslator::__('Stumbleupon profile settings')),
			'tumblr'			=>	array('name'=>'Tumblr','info'=>TLThemeTranslator::__('Tumblr profile settings')),
			'twitter'			=>	array('name'=>'Twitter','info'=>TLThemeTranslator::__('Twitter profile settings')),
			'vimeo'				=>	array('name'=>'Vimeo','info'=>TLThemeTranslator::__('Vimeo profile settings')),
			'xing'				=>	array('name'=>'Xing','info'=>TLThemeTranslator::__('Xing profile settings')),
			'youtube'			=>	array('name'=>'Youtube','info'=>TLThemeTranslator::__('Youtube profile settings'))
		);
	}
	
	/**************************************************************************/
	
	function createSocialProfile($attr)
	{
		$attribute=shortcode_atts(array('css_class'=>''),$attr);
		
		$Validation=new TLThemeValidation();
		
		$socialNetwork=array();
		foreach($this->social as $index=>$value)
		{
			$url=TLThemeOption::getOption('social_network_'.$index.'_url');
			$order=TLThemeOption::getOption('social_network_'.$index.'_order');
			
			if($Validation->isEmpty($url)) continue;
			if($Validation->isEmpty($order)) array_push($socialNetwork,array('url'=>$url,'index'=>$index));
			else $socialNetwork[$order]=array('url'=>$url,'index'=>$index);
		}
		
		ksort($socialNetwork);
		
		$data=array();
		foreach($socialNetwork as $index=>$value)
		{
			$data['profile'][$value['index']]=array('url'=>$value['url']);
		}
		
		if(!count($data)) return;
		
		$data['css_class']=$attribute['css_class'];
		
		$Template=new TLThemeTemplate($data,THEME_TEMPLATE_DIR.'social_profile_list.php');
		return($Template->outputWP(true));			
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>