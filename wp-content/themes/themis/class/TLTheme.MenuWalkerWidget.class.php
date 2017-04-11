<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeMenuWalkerWidget extends Walker_Nav_Menu 
{
	/**************************************************************************/

	function start_lvl(&$output,$depth=0,$args=array()) 
	{
		parent::start_lvl($output,$depth,$args);  
	}

	/**************************************************************************/
	
	function end_lvl(&$output,$depth=0,$args=array()) 
	{
		parent::end_lvl($output,$depth,$args); 
	}

	/**************************************************************************/
	
	function start_el(&$output,$object,$depth=0,$args=array(),$current_object_id=0) 
	{		
		$Validation=new TLThemeValidation();
		
		$header=$Validation->isNotEmpty($object->title) ? $object->title : $object->post_title;
		$output.='<li class="'.join(' ',(array)$object->classes).'"><a href="'.esc_attr($object->url).'"><span class="widget-menu-link-arrow"></span><span class="widget-menu-link-caption">'.TLThemeHelper::esc_html($header).'</span></a>';
	}

	/**************************************************************************/
	
	function end_el(&$output,$item,$depth=0,$args=array()) 
	{
		$output.='</li>';
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>