<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeMenuBox
{
	/**************************************************************************/

	function TLThemeMenuBox()
	{

	}
	
	/**************************************************************************/
	
	function getMenuBox($pageId=array())
	{
		$argument=array
		(
			'post_type'			=>	'page',
			'posts_per_page'	=>	-1,
			'orderby'			=>	'menu_order',
			'order'				=>	(is_rtl() ? 'desc' : 'asc')
		);
		
		if(count($pageId)) $argument['post__in']=$pageId;

		$query=new WP_Query($argument);
		if($query===false) return(false);
		
		$Validation=new TLThemeValidation();
		
		$data=new stdClass();
		$data->exclude=array();
		
		foreach($query->posts as $value)
		{
			$option=TLThemeOption::getPostMeta($value);
			
			TLThemeHelper::removeUIndex($option,'page_menu_box_visible');
			
			if($option['page_menu_box_visible']!=1)
			{
				$data->exclude[]=$value->ID;
				continue;
			}
			
			TLThemeHelper::removeUIndex($option,'page_url_window_target','page_url');
			
			$data->post[$value->ID]=new stdClass();
			
			$data->post[$value->ID]->option=$option;
			
			$data->post[$value->ID]->permalink=$Validation->isEmpty($option['page_url']) ? get_permalink($value->ID) : $option['page_url'];
			$data->post[$value->ID]->window_target=$Validation->isEmpty($option['page_url_window_target']) ? '_self' : $option['page_url_window_target'];

			$data->post[$value->ID]->icon=THEME_URL.'media/image/public/icon/icon_1/tab_icon_'.$option['page_menu_icon'].'.png';
			$data->post[$value->ID]->icon_hover=THEME_URL.'media/image/public/icon/icon_1/tab_icon_'.$option['page_menu_icon'].'_hover.png';
			
			$data->post[$value->ID]->image=$Validation->isEmpty($option['page_menu_box_image_custom']) ? THEME_URL.'media/image/public/menu_box/'.$option['page_menu_box_image_defined'].'.jpg' : $option['page_menu_box_image_custom'];
		}
		
		$count=count($query->posts);
		
		if(($count) && ($count!=count($data->exclude))) 
		{
			$data->query=$query;
			return($data);
		}
			
		return(false);
	}
	
	/**************************************************************************/
	
	function createMenuBox($attr)
	{
		$default=array
		(
			'id'								=>	'',
			'css_class'							=>	'',
			'item_dimension_width'				=>	TLThemeOption::getOption('menu_box_item_dimension_width'),
			'item_dimension_height'				=>	TLThemeOption::getOption('menu_box_item_dimension_height'),
			'item_dimension_padding'			=>	TLThemeOption::getOption('menu_box_item_dimension_padding'),
			'item_icon_position'				=>	TLThemeOption::getOption('menu_box_item_icon_position'),
			'item_header_position'				=>	TLThemeOption::getOption('menu_box_item_header_position'),
			'item_navigation_arrow_position'	=>	TLThemeOption::getOption('menu_box_item_navigation_arrow_position'),
			'autoplay'							=>	TLThemeOption::getOption('menu_box_autoplay'),
			'circular'							=>	TLThemeOption::getOption('menu_box_circular'),
			'infinite'							=>	TLThemeOption::getOption('menu_box_infinite'),
			'direction'							=>	TLThemeOption::getOption('menu_box_direction'),
			'item_visible'						=>	TLThemeOption::getOption('menu_box_item_visible'),
			'item_start'						=>	TLThemeOption::getOption('menu_box_item_start'),
			'scroll_item'						=>	TLThemeOption::getOption('menu_box_scroll_item'),
			'scroll_effect'						=>	TLThemeOption::getOption('menu_box_scroll_effect'),
			'scroll_easing'						=>	TLThemeOption::getOption('menu_box_scroll_easing'),
			'scroll_duration'					=>	TLThemeOption::getOption('menu_box_scroll_duration')
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		$id=array();
		$tId=array_map('intval',explode(',',$attribute['id']));
		foreach($tId as $value)
		{
			if($value>0) $id[]=$value;
		}
		
		$data=$this->getMenuBox($id);
		if($data===false) return;
		
		$Theme=new TLTheme();
		$Validation=new TLThemeValidation();
		$CarouFredSel=new TLThemeCarouFredSel();
		
		if(!$Validation->isNumber($attribute['item_dimension_width'],0,999))
			$attribute['item_dimension_width']=$default['item_dimension_width'];
		if(!$Validation->isNumber($attribute['item_dimension_height'],0,999))
			$attribute['item_dimension_height']=$default['item_dimension_height'];
		if(!$Validation->isNumber($attribute['item_dimension_padding'],0,999))
			$attribute['item_dimension_padding']=$default['item_dimension_padding'];
		if(!$Validation->isNumber($attribute['item_icon_position'],0,100))
			$attribute['item_icon_position']=$default['item_icon_position'];
		if(!$Validation->isNumber($attribute['item_header_position'],0,100))
			$attribute['item_header_position']=$default['item_header_position'];
		if(!$Validation->isNumber($attribute['item_navigation_arrow_position'],0,100))
			$attribute['item_navigation_arrow_position']=$default['item_navigation_arrow_position'];		
		if(!$Validation->isNumber($attribute['autoplay'],0,1))
			$attribute['autoplay']=$default['autoplay'];
		if(!$Validation->isNumber($attribute['circular'],0,1))
			$attribute['circular']=$default['circular'];
		if(!$Validation->isNumber($attribute['infinite'],0,1))
			$attribute['infinite']=$default['infinite'];
		if(!in_array($attribute['direction'],array_keys($CarouFredSel->direction)))
			$attribute['direction']=$default['direction'];	
		if(!$Validation->isNumber($attribute['item_visible'],1,999))
			$attribute['item_visible']=$default['item_visible'];
		if(!$Validation->isNumber($attribute['item_start'],0,999))
			$attribute['item_start']=$default['item_start'];
		if(!$Validation->isNumber($attribute['scroll_item'],1,999))
			$attribute['scroll_item']=$default['scroll_item'];		
		if(!in_array($attribute['scroll_effect'],array_keys($CarouFredSel->effect)))
			$attribute['scroll_effect']=$default['scroll_effect'];	
		if(!in_array($attribute['scroll_easing'],array_keys($Theme->easingType)))
			$attribute['scroll_easing']=$default['scroll_easing'];	
		if(!$Validation->isNumber($attribute['scroll_duration'],1,99999))
			$attribute['scroll_duration']=$default['scroll_duration'];			

		$data->meta=new stdClass();
		$data->option=new stdClass();
		
		$data->meta->css_class=$attribute['css_class'];
		$data->meta->id='menu-box-'.TLThemeHelper::createId();
		
		$data->option->item_dimension_width=$attribute['item_dimension_width'];
		$data->option->item_dimension_height=$attribute['item_dimension_height'];
		$data->option->item_dimension_padding=$attribute['item_dimension_padding'];
		$data->option->item_icon_position=$attribute['item_icon_position'];
		$data->option->item_header_position=$attribute['item_header_position'];
		$data->option->item_navigation_arrow_position=$attribute['item_navigation_arrow_position'];
		$data->option->autoplay=$attribute['autoplay'];
		$data->option->circular=$attribute['circular'];
		$data->option->infinite=$attribute['infinite'];
		$data->option->direction=$attribute['direction'];
		$data->option->item_visible=$attribute['item_visible'];
		$data->option->item_start=$attribute['item_start'];
		$data->option->scroll_item=$attribute['scroll_item'];
		$data->option->scroll_effect=$attribute['scroll_effect'];
		$data->option->scroll_easing=$attribute['scroll_easing'];
		$data->option->scroll_duration=$attribute['scroll_duration'];

		$Template=new TLThemeTemplate($data,THEME_TEMPLATE_DIR.'menu_box.php');
		return($Template->outputWP(true));			
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>