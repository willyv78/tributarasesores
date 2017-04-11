<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeMenuDropdownWalker extends Walker_Nav_Menu 
{
	/**************************************************************************/

	function start_lvl(&$output,$depth=0,$args=array()) 
	{
		$output.='';
	}

	/**************************************************************************/
	
	function end_lvl(&$output,$depth=0,$args=array()) 
	{
		$output.='';
	}

	/**************************************************************************/
	
	function start_el(&$output,$object,$depth=0,$args=array(),$current_object_id=0) 
	{		
		$Validation=new TLThemeValidation();
		
		$header=$Validation->isNotEmpty($object->title) ? $object->title : $object->post_title;
		
		$output.='<option value="'.esc_attr($object->url).'">'.str_repeat('-',$depth).($depth>0 ? ' ' : null).$header.'</option>';
	}

	/**************************************************************************/
	
	function end_el(&$output,$object,$depth=0,$args=array()) 
	{
		$output.='';
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>