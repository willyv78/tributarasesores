<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeGoogleMap
{
	/**************************************************************************/
	
	function TLThemeGoogleMap()
	{
		$this->zoomControlStyle=array
		(
			'DEFAULT'			=>	array(TLThemeTranslator::__('Default')),
			'SMALL'				=>	array(TLThemeTranslator::__('Small')),
			'LARGE'				=>	array(TLThemeTranslator::__('Large'))
		);

		$this->mapTypeControlStyle=array
		(
			'DEFAULT'			=>	array(TLThemeTranslator::__('Default')),
			'HORIZONTAL_BAR'	=>	array(TLThemeTranslator::__('Horizontal Bar')),
			'DROPDOWN_MENU'		=>	array(TLThemeTranslator::__('Dropdown Menu'))
		);

		$this->position=array
		(
			'TOP_CENTER'		=>	array(TLThemeTranslator::__('Top center')),
			'TOP_LEFT'			=>	array(TLThemeTranslator::__('Top left')),
			'TOP_RIGHT'			=>	array(TLThemeTranslator::__('Top right')),
			'LEFT_TOP'			=>	array(TLThemeTranslator::__('Left top')),
			'RIGHT_TOP'			=>	array(TLThemeTranslator::__('Right top')),
			'LEFT_CENTER'		=>	array(TLThemeTranslator::__('Left center')),
			'RIGHT_CENTER'		=>	array(TLThemeTranslator::__('Right center')),
			'LEFT_BOTTOM'		=>	array(TLThemeTranslator::__('Left bottom')),
			'RIGHT_BOTTOM'		=>	array(TLThemeTranslator::__('Right bottom')),
			'BOTTOM_CENTER'		=>	array(TLThemeTranslator::__('Bottom center')),
			'BOTTOM_LEFT'		=>	array(TLThemeTranslator::__('Bottom left')),
			'BOTTOM_RIGHT'		=>	array(TLThemeTranslator::__('Bottom right'))	
		);

		$this->mapTypeId=array
		(
			'ROADMAP'			=>	array(TLThemeTranslator::__('Roadmap')),
			'SATELLITE'			=>	array(TLThemeTranslator::__('Satellite')),
			'HYBRID'			=>	array(TLThemeTranslator::__('Hybrid')),
			'TERRAIN'			=>	array(TLThemeTranslator::__('Terrain'))
		);	
	}
	
	/**************************************************************************/
	
	function createGoogleMap($attr)
	{
		if(TLThemeOption::getOption('google_map_enable')!=1) return(null);
		
		$attribute=shortcode_atts(array('css_class'=>''),$attr);

		$default=array
		(
			'map_type_id'					=>	TLThemeOption::getOption('google_map_map_type_id'),
			'coordinate_lat'				=>	TLThemeOption::getOption('google_map_coordinate_lat'),
			'coordinate_lng'				=>	TLThemeOption::getOption('google_map_coordinate_lng'),
			'coordinate_marker_lat'			=>	TLThemeOption::getOption('google_map_coordinate_marker_lat'),
			'coordinate_marker_lng'			=>	TLThemeOption::getOption('google_map_coordinate_marker_lng'),
			'width'							=>	TLThemeOption::getOption('google_map_width'),
			'height'						=>	TLThemeOption::getOption('google_map_height'),
			'map_type_control_enable'		=>	TLThemeOption::getOption('google_map_map_type_control_enable'),
			'map_type_control_style'		=>	TLThemeOption::getOption('google_map_map_type_control_style'),
			'map_type_control_position'		=>	TLThemeOption::getOption('google_map_map_type_control_position'),
			'zoom_control_enable'			=>	TLThemeOption::getOption('google_map_zoom_control_enable'),
			'zoom_level'					=>	TLThemeOption::getOption('google_map_zoom_level'),
			'zoom_style'					=>	TLThemeOption::getOption('google_map_zoom_style'),
			'zoom_position'					=>	TLThemeOption::getOption('google_map_zoom_position'),
			'pan_control_enable'			=>	TLThemeOption::getOption('google_map_pan_control_enable'),
			'pan_control_position'			=>	TLThemeOption::getOption('google_map_pan_control_position'),
			'scale_control_enable'			=>	TLThemeOption::getOption('google_map_scale_control_enable'),
			'scale_control_position'		=>	TLThemeOption::getOption('google_map_scale_control_position'),
			'street_view_enable'			=>	TLThemeOption::getOption('google_map_street_view_enable'),
			'street_view_position'			=>	TLThemeOption::getOption('google_map_street_view_position'),
		);
		
		$option=shortcode_atts($default,$attr);
		$option['theme_url']=THEME_URL;
		
		$data=new stdClass();
		$data->meta=new stdClass();
		
		$data->option=$option;
		
		$data->meta->id='googleMap_'.TLThemeHelper::createId();
		$data->meta->css_class=$attribute['css_class'];
		
		$Template=new TLThemeTemplate($data,THEME_TEMPLATE_DIR.'google_map.php');
		$output=$Template->outputWP(true);
		
		return($output);		
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/
	
?>