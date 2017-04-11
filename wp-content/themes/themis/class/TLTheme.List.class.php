<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeList
{
	
	/**************************************************************************/
	
	function TLThemeList()
	{
		$this->type=array
		(
			'bullet-1'		=>	array(TLThemeTranslator::__('Bullet 1')),
			'bullet-2'		=>	array(TLThemeTranslator::__('Bullet 2')),
			'bullet-3'		=>	array(TLThemeTranslator::__('Bullet 3')),
			'bullet-4'		=>	array(TLThemeTranslator::__('Bullet 4')),
			'bullet-5'		=>	array(TLThemeTranslator::__('Bullet 5')),
			'bullet-6'		=>	array(TLThemeTranslator::__('Bullet 6')),
			'bullet-7'		=>	array(TLThemeTranslator::__('Bullet 7')),
			'bullet-8'		=>	array(TLThemeTranslator::__('Bullet 8')),
			'bullet-9'		=>	array(TLThemeTranslator::__('Bullet 9')),
			'bullet-10'		=>	array(TLThemeTranslator::__('Bullet 10')),
			'bullet-11'		=>	array(TLThemeTranslator::__('Bullet 11')),
			'bullet-12'		=>	array(TLThemeTranslator::__('Bullet 12')),
			'bullet-13'		=>	array(TLThemeTranslator::__('Bullet 13')),
			'bullet-14'		=>	array(TLThemeTranslator::__('Bullet 14')),
			'bullet-15'		=>	array(TLThemeTranslator::__('Bullet 15')),
		);
	}
	
	/**************************************************************************/
	
	function createList($attr,$content)
	{
		$Layout=new TLThemeLayout();
		
		$default=array
		(
			'type'			=>	'bullet-1',
			'layout'		=>	'100',
			'css_class'		=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		if(!isset($this->type[$attribute['type']])) $attribute['type']=$default['type'];
		if(!isset($Layout->layout[$attribute['layout']])) $attribute['layout']=$default['layout'];
		
		$this->columnIndex=0;
		$this->currentLayout=$attribute['layout'];
		
		$output=
		'
			<ul class="'.trim('clear-fix layout-p-'.TLThemeHelper::esc_attr($attribute['layout']).' list list-'.TLThemeHelper::esc_attr($attribute['type']).' '.TLThemeHelper::esc_attr($attribute['css_class'])).'">
				'.do_shortcode($content).'
			</ul>
		';
		
		return($output);		
	}
	
	/**************************************************************************/
	
	function createListItem($attr,$content)
	{
		$default=array
		(
			'href'		=>	'',
		);
		
		$attribute=shortcode_atts($default,$attr);
		
		$Layout=new TLThemeLayout();
		$Validation=new TLThemeValidation();
		
		$output=$content;
		if($Validation->isNotEmpty($attribute['href']))
			$output='<a href="'.TLThemeHelper::esc_attr($attribute['href']).'">'.$content.'</a>';
				
		$output='<li class="'.$Layout->getLayoutColumnNameByIndex($this->columnIndex,$this->currentLayout).' paragraph"><div>'.do_shortcode($output).'</div></li>';
		
		$this->columnIndex++;

		return($output);		
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>