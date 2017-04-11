<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeLayout
{
	/**************************************************************************/

	function TLThemeLayout()
	{
		$this->layout=array
		(
			'100'				=>  (is_rtl() ? array('right') : array('left')),
			'50x50'				=>  (is_rtl() ? array('right','left') : array('left','right'))	,
			'33x33x33'			=>  (is_rtl() ? array('right','center','left') : array('left','center','right'))	,
			'25x25x25x25'	    =>	(is_rtl() ? array('right','center-right','center-left','left') : array('left','center-left','center-right','right')),
			'20x20x20x20x20'    =>	(is_rtl() ? array('right','center-right','center','center-left','left') : array('left','center-left','center','center-right','right')),
			'66x33'				=>	(is_rtl() ? array('right','left') : array('left','right')),
			'33x66'				=>	(is_rtl() ? array('right','left') : array('left','right'))
		);
		
		$this->layoutColumn=array
		(
			'left'				=>	TLThemeTranslator::__('Left column'),
			'center-left'		=>	TLThemeTranslator::__('Center left column'),
			'center'			=>	TLThemeTranslator::__('Center column'),
			'center-right'		=>	TLThemeTranslator::__('Center right column'),
			'right'				=>	TLThemeTranslator::__('Right column')
		);			
	}
	
	/**************************************************************************/

	function layout($attr,$content)
	{
		$default=array
		(
			'layout'		=>	'50x50',
			'css_class'		=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		if(!isset($this->layout[$attribute['layout']])) $attribute['layout']=$default['layout'];
		
		$this->columnIndex=0;
		$this->layoutType=$attribute['layout'];
		
		$output='<div class="layout-p-'.TLThemeHelper::esc_attr($attribute['layout']).' clear-fix '.TLThemeHelper::esc_attr($attribute['css_class']).'">'.do_shortcode($content).'</div>';
		return($output);
	}
	
	/**************************************************************************/
	
	function layout_column($attr,$content)
	{
		$output='<div class="'.TLThemeHelper::esc_attr($this->getLayoutColumnNameByIndex($this->columnIndex,$this->layoutType)).' paragraph">'.do_shortcode($content).'</div>';
		
		$this->columnIndex++;
		
		return $output;		
	}
	
	/**************************************************************************/
	
	function getLayoutColumnNameByIndex($index,$name)
	{
		if(!isset($this->layout[$name])) return;
		$index%=substr_count($name,'x')+1;
		return('column-'.$this->layout[$name][$index]);
	}
	
	/**************************************************************************/
	
	function getLayoutCoulumnCount($name)
	{
		return(count($this->layout[$name]));
	}
	
	/**************************************************************************/
	
	function getLayoutNameByColumnCount($columnCount,$layout)
	{
		foreach($layout as $index=>$value)
		{
			if($columnCount==$this->getLayoutCoulumnCount($index)) return($index);
		}
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/
	
?>