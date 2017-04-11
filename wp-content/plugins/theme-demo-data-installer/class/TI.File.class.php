<?php

/******************************************************************************/
/******************************************************************************/

class TIFile
{
	/**************************************************************************/
	
	static function scanDir($dir)
	{
		$file=array();
		
		if(!is_dir($dir)) return(false);
		
		$file=scandir($dir);
		
		unset($file[0],$file[1]);
		
		return($file);
	}

	/**************************************************************************/
	
	static function includeFile($path)
	{
		$file=TSFile::scanDir($path);
		if($file===false) return;
		
		foreach($file as $value)
			require_once($path.$value);	
	}
	
	/**************************************************************************/
	
	static function includeClass($data)
	{
		foreach($data as $value)
		{		
			if(class_exists($value['class'])) continue;
			if(!file_exists($value['path'])) return(false);
			require_once($value['path']);
		}
	
		return(true);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>