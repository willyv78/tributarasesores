<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeCarouFredSel
{
	/**************************************************************************/

	function TLThemeCarouFredSel()
	{
		$this->direction=array
		(
			'right'				=>	array(TLThemeTranslator::__('Right')),
			'left'				=>	array(TLThemeTranslator::__('Left'))
		);

		$this->effect=array
		(
			'none'				=>	array(TLThemeTranslator::__('None')),
			'scroll'			=>	array(TLThemeTranslator::__('Scroll')),
			'directscroll'		=>	array(TLThemeTranslator::__('Directscroll')),
			'crossfade'			=>	array(TLThemeTranslator::__('Crossfade')),
			'cover'				=>	array(TLThemeTranslator::__('Cover')),
			'cover-fade'		=>	array(TLThemeTranslator::__('Cover-fade')),
			'uncover'			=>	array(TLThemeTranslator::__('Uncover')),
			'uncover-fade'		=>	array(TLThemeTranslator::__('Uncover-fade'))
		);		
		
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>