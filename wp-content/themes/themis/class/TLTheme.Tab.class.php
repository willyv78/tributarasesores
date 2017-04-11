<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeTab
{
	/**************************************************************************/
	
	var $tab;
	
	/**************************************************************************/
	
	function TLThemeTab()
	{
		$this->tab=array();
	}
	
	/**************************************************************************/
	
	function createTab($attr,$content)
	{
		$default=array
		(
			'active'		=>	'0',
			'css_class'		=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);

		$this->tab=array();
		
		$data=new stdClass();
		$data->meta=new stdClass();
		
		do_shortcode($content);
		
		$data->tab=$this->tab;
		
		$data->meta->active=(int)$attribute['active'];
		$data->meta->css_class=$attribute['css_class'];
		$data->meta->id='tab_'.TLThemeHelper::createId();
		
		$Template=new TLThemeTemplate($data,THEME_TEMPLATE_DIR.'tab.php');
		return($Template->outputWP(true));
	}
	
	/**************************************************************************/
	
	function createTabItem($attr,$content)
	{
		$attribute=shortcode_atts(array('header'=>'Header'),$attr);
		$this->tab[]=array('header'=>$attribute['header'],'content'=>do_shortcode($content));
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>