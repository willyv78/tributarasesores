<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeNivoSlider
{
	/**************************************************************************/

	function TLThemeNivoSlider() 
	{ 
		$this->effect=array
		(
			'sliceDown'							=>	array(TLThemeTranslator::__('Slice down')),
			'sliceDownLeft'						=>	array(TLThemeTranslator::__('Slice down left')),
			'sliceUp'							=>	array(TLThemeTranslator::__('Slice up')),
			'sliceUpLeft'						=>	array(TLThemeTranslator::__('Slice up left')),
			'sliceUpDown'						=>	array(TLThemeTranslator::__('Slice up down')),
			'sliceUpDownLeft'					=>	array(TLThemeTranslator::__('Slice up down left')),
			'fold'								=>	array(TLThemeTranslator::__('Fold')),
			'fade'								=>	array(TLThemeTranslator::__('Fade')),
			'random'							=>	array(TLThemeTranslator::__('Random')),
			'slideInRight'						=>	array(TLThemeTranslator::__('Slide in right')),
			'slideInLeft'						=>	array(TLThemeTranslator::__('Slide in left')),
			'boxRandom'							=>	array(TLThemeTranslator::__('Box random')),
			'boxRain'							=>	array(TLThemeTranslator::__('Box rain')),
			'boxRainReverse'					=>	array(TLThemeTranslator::__('Box rain reverse')),
			'boxRainGrow'						=>	array(TLThemeTranslator::__('Box rain grow')),
			'boxRainGrowReverse'				=>	array(TLThemeTranslator::__('Box rain grow reverse'))
		);		
	}

	/**************************************************************************/
	
	function createSlider($attr)
	{
		if(TLThemeOption::getOption('nivo_slider_enable')!=1) return(null);
		
		$default=array
		(
			'effect'							=>	TLThemeOption::getOption('nivo_slider_effect'),
			'col_number'						=>	TLThemeOption::getOption('nivo_slider_col_number'),
			'row_number'						=>	TLThemeOption::getOption('nivo_slider_row_number'),
			'pause_time'						=>	TLThemeOption::getOption('nivo_slider_pause_time'),
			'start_slide'						=>	TLThemeOption::getOption('nivo_slider_start_slide'),
			'pause_hover'						=>	TLThemeOption::getOption('nivo_slider_pause_hover'),
			'random_start'						=>	TLThemeOption::getOption('nivo_slider_random_start'),
			'slice_number'						=>	TLThemeOption::getOption('nivo_slider_slice_number'),
			'manual_advance'					=>	TLThemeOption::getOption('nivo_slider_manual_advance'),
			'transition_speed'					=>	TLThemeOption::getOption('nivo_slider_transition_speed'),
			'direction_navigation_enable'		=>	TLThemeOption::getOption('nivo_slider_direction_navigation_enable'),
			'category'							=>	'',
			'css_class'							=>	'',
			'image_type'						=>	'image-480-240',
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		$Image=new TLThemeImage();
		$Validation=new TLThemeValidation();
		
		if(!$Validation->isNumber($attribute['col_number'],1,9999))
			$attribute['col_number']=$default['col_number'];
		if(!$Validation->isNumber($attribute['row_number'],1,9999))
			$attribute['row_number']=$default['row_number'];
		if(!$Validation->isNumber($attribute['pause_time'],0,99999))
			$attribute['pause_time']=$default['pause_time'];		
		if(!$Validation->isNumber($attribute['start_slide'],0,999))
			$attribute['start_slide']=$default['start_slide'];			
		if(!$Validation->isNumber($attribute['pause_hover'],0,1))
			$attribute['pause_hover']=$default['pause_hover'];	
		if(!$Validation->isNumber($attribute['random_start'],0,1))
			$attribute['random_start']=$default['random_start'];			
		if(!$Validation->isNumber($attribute['slice_number'],1,9999))
			$attribute['slice_number']=$default['slice_number'];
		if(!$Validation->isNumber($attribute['transition_speed'],0,99999))
			$attribute['transition_speed']=$default['transition_speed'];		
		if(!$Validation->isNumber($attribute['manual_advance'],0,1))
			$attribute['manual_advance']=$default['manual_advance'];	
		if(!$Validation->isNumber($attribute['direction_navigation_enable'],0,1))
			$attribute['direction_navigation_enable']=$default['direction_navigation_enable'];		
		
		if(!$Image->itemExist($attribute['image_type']))
			$attribute['image_type']=$default['image_type'];
		
		$argument=array
		(
			'post_type'							=>	THEME_CONTEXT.'_gallery',
			THEME_CONTEXT.'_gallery_category'	=>	$attribute['category'],
			'posts_per_page'					=>	-1,
			'orderby'							=>	'menu_order',
			'order'								=>	'asc'
		);
		
		$query=new WP_Query($argument);
		if($query===false) return;		
		
		$output=null;
		$data=new stdClass();
		
		$data->post=array();
		$data->exclude=array();
		
		foreach($query->posts as $value)
		{
			$thumbnail=wp_get_attachment_image_src(get_post_thumbnail_id($value->ID),$attribute['image_type']);
			
			if($thumbnail===false)
			{
				$this->exclude[]=$value->ID;
				continue;
			}
		
			$data->post[$value->ID]=new stdClass();
			
			$data->post[$value->ID]->thumbnail=$thumbnail[0];
			$data->post[$value->ID]->option=TLThemeOption::getPostMeta($value);
		}
		
		$count=count($query->posts);
		
		if(($count) && ($count!=count($data->exclude)))
		{
			$data->query=$query;
			
			$data->meta=new stdClass();
			$data->option=new stdClass();
			
			$data->meta->css_class=$attribute['css_class'];
			$data->meta->id='nivo-slider-'.TLThemeHelper::createId();
			
			$data->option->effect=(array)$attribute['effect'];
			$data->option->col_number=$attribute['col_number'];
			$data->option->row_number=$attribute['row_number'];
			$data->option->pause_time=$attribute['pause_time'];
			$data->option->start_slide=$attribute['start_slide'];
			$data->option->pause_hover=$attribute['pause_hover'];
			$data->option->random_start=$attribute['random_start'];
			$data->option->slice_number=$attribute['slice_number'];
			$data->option->manual_advance=$attribute['manual_advance'];
			$data->option->transition_speed=$attribute['transition_speed'];
			$data->option->direction_navigation_enable=$attribute['direction_navigation_enable'];
			
			list($data->meta->width,$data->meta->height)=$Image->getImageDimension($attribute['image_type']);

			$Template=new TLThemeTemplate($data,THEME_TEMPLATE_DIR.'nivo_slider.php');
			$output=$Template->outputWP(true);
		}
		
		return($output);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>