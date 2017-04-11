<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeMenuWalker extends Walker_Nav_Menu 
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
		
		$option=TLThemeOption::getPostMeta($object->object_id);
		
		TLThemeHelper::removeUIndex($option,'page_url','page_url_window_target','page_menu_header','page_menu_subheader');

		$url=$object->url;
		
		if($Validation->isNotEmpty($option['page_url'])) $url=$option['page_url'];
		
		$output.='<li class="'.join(' ',(array)$object->classes).'"><a href="'.esc_attr($url).'" class="'.($object->target=='_blank' ? 'target-blank' : '').'">';

		$header=$Validation->isNotEmpty($option['page_menu_header']) ? $option['page_menu_header'] : $object->title;
		
		if($depth==0)
		{
			$output.='<span class="title">'.esc_html($header).'</span>';
			if($Validation->isNotEmpty($option['page_menu_subheader']))
				$output.='<span class="subtitle">'.esc_html($option['page_menu_subheader']).'</span>';
		}
		else $output.=esc_html($header);
		
		$output.='</a>';
	}

	/**************************************************************************/
	
	function end_el(&$output,$object,$depth=0,$args=array()) 
	{
		$output.='</li>';
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>