<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeCSS
{
	/**************************************************************************/

	function TLThemeCSS()
	{
		$this->fontWeight=array
		(
			'100'				=>	array(TLThemeTranslator::__('100')),
			'200'				=>	array(TLThemeTranslator::__('200')),
			'300'				=>	array(TLThemeTranslator::__('300')),
			'400'				=>	array(TLThemeTranslator::__('400')),
			'500'				=>	array(TLThemeTranslator::__('500')),
			'600'				=>	array(TLThemeTranslator::__('600')),
			'700'				=>	array(TLThemeTranslator::__('700')),
			'800'				=>	array(TLThemeTranslator::__('800')),
			'900'				=>	array(TLThemeTranslator::__('900')),	
			'bold'				=>	array(TLThemeTranslator::__('bold')),
			'bolder'			=>	array(TLThemeTranslator::__('bolder')),
			'inherit'			=>	array(TLThemeTranslator::__('inherit')),
			'lighter'			=>	array(TLThemeTranslator::__('lighter')),
			'normal'			=>	array(TLThemeTranslator::__('normal'))
		);

		$this->fontStyle=array
		(
			'inherit'			=>	array(TLThemeTranslator::__('inherit')),
			'italic'			=>	array(TLThemeTranslator::__('italic')),
			'normal'			=>	array(TLThemeTranslator::__('normal')),
			'oblique'			=>	array(TLThemeTranslator::__('oblique'))
		);	
	}
	
	/**************************************************************************/
	
	function create($option)
	{
		$option['property']=$this->validateProperty($option['property']);
		
		if(!count($option['property'])) return;
		
		TLThemeHelper::removeUIndex($option,array('media',array()),array('selector',array()),'property');
		
		$output=null;
		
		$output.=$this->createMedia($option['media']);
		$output.=$this->createSelector($option['selector']);
		$output.=$this->createProperty($option['property']);
		$output.=$this->createMedia($option['media'],false);
		
		echo $output;
	}
	
	/**************************************************************************/
	
	function validateProperty($property)
	{
		$data=array();
		$Validation=new	TLThemeValidation();
		
		foreach($property as $name=>$value)
		{
			$unit='px';
			
			if(is_array($value))
			{
				if(isset($value['unit'])) $unit=$value['unit'];
				if(isset($value['value'])) $value=$value['value'];
			}

			switch($name)
			{
				case 'left':
				case 'width':
				case 'height':
				case 'font-size':
				case 'padding-top':
				case 'padding-left':
				case 'padding-right':
				case 'padding-bottom':

					if($Validation->isNumber($value,0,9999)) $data[$name]=$value.$unit;
				
				break;
				
				case 'top':
				case 'margin-top':
				case 'margin-left':
				case 'margin-right':
				case 'margin-bottom':
					
					if($Validation->isNumber($value,-9999,9999)) $data[$name]=$value.$unit;
					
				break;
				
				case 'color':
				case 'border-color':
				case 'outline-color':
				case 'background-color':
					
					if($Validation->isHexColor($value)) $data[$name]='#'.$value;
					
				break;

				case 'font-family':
					
					foreach((array)$value as $family)
					{
						if($Validation->isNotEmpty($family)) 
						{
							TLThemeHelper::removeUIndex($data,$name);
							
							if($Validation->isNotEmpty($data[$name])) $data[$name].=',';
							$data[$name].='\''.$family.'\'';
						}
					}
					
				break;
				
				case 'font-style':
					
					if(isset($this->fontStyle[$value])) $data[$name]=$value;
	
				break;
				
				case 'font-weight':
					
					if(isset($this->fontWeight[$value])) $data[$name]=$value;
	
				break;
				
				case 'display':
				case 'background':
				case 'background-repeat':
				case 'background-position':
					
					if($Validation->isNotEmpty($value)) $data[$name]=$value;
					
				break;
				
				case 'background-image':
					
					if($Validation->isNotEmpty($value)) $data[$name]='url(\''.$value.'\')';
					
				break;
				
			}
		}
		
		return($data);
	}
	
	/**************************************************************************/
	
	function createSelector($selector)
	{
		$output=null;
		
		foreach($selector as $name)
		{
			if(!is_null($output)) $output.=",\n";
			$output.=$name;
		}
		
		return("\n".$output."\n{\n");
	}
	
	/**************************************************************************/
	
	function createProperty($property)
	{
		$output=null;
		
		foreach($property as $name=>$value)
		{
			if(!is_null($output)) $output.="\n";
			$output.="\t".$name.':'.$value.';';
		}
		
		return($output."\n}\n");		
	}
	
	/**************************************************************************/
	
	function createMedia($media,$start=true)
	{
		if(!count($media)) return;
		
		if($start)
		{
			$output=null;
			foreach($media as $index=>$value)
				$output.=' and ('.$index.':'.$value.'px)';
	
			$output="@media only screen ".$output."\n{\n";
		}
		else $output="}\n\n";
		
		return($output);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>