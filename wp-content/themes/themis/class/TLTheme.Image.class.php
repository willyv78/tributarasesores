<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeImage
{
	/**************************************************************************/
	
	function TLThemeImage()
	{
		$this->image=array
		(
			'image-990-300'		=> array(990,300,TLThemeTranslator::__('Image - 100% page width'),1),
			'image-650-240'		=> array(650,240,TLThemeTranslator::__('Image - 66% page width'),0),
			'image-480-240'		=> array(480,240,TLThemeTranslator::__('Image - 50% page width'),2),
			'image-310-200'		=> array(310,200,TLThemeTranslator::__('Image - 33% page width'),3),
			'image-225-200'		=> array(225,200,TLThemeTranslator::__('Image - 25% page width'),4),
			'image-190-190'		=> array(190,190,TLThemeTranslator::__('Image - 20% page width'),5),
			'image-100-100'		=> array(100,100,TLThemeTranslator::__('Image - thumbnail'),0)
		);
	}
	
	/**************************************************************************/
	
	function register()
	{
		foreach($this->image as $index=>$data)
			add_image_size($index,$data[0],$data[1],$data[2]);
	}
	
	/**************************************************************************/
	
	function addImageSupport($size)
	{
		$addsize=array();
		foreach($this->image as $index=>$data)
			$addsize[$index]=$data[2];
		
		return(array_merge($size,$addsize));
	}
	
	/**************************************************************************/
	
	function getImageDimension($id)
	{
		return(array($this->image[$id][0],$this->image[$id][1]));
	}
	
	/**************************************************************************/
	
	function itemExist($id)
	{
		return((bool)$this->image[$id]);
	}
	
	/**************************************************************************/
	
	function getImageNameByColumnCount($columnCount)
	{
		foreach($this->image as $index=>$value)
		{
			if($value[3]==$columnCount) return($index);
		}
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>