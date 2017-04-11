<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeNotice
{
	/**************************************************************************/

	function TLThemeNotice()
	{
		$this->error=array();
	}

	/**************************************************************************/

	function addError($fieldName,$errorMessage)
	{
		$this->error[]=array($fieldName,$errorMessage);
	}

	/**************************************************************************/

	function getError()
	{
		return($this->error);
	}

	/**************************************************************************/

	function isError()
	{
		return(count($this->error));
	}
	
	/**************************************************************************/
	
	function createHTML($templatePath)
	{
		$data=array();
		
		$data['type']=$this->isError() ? 'error' : 'success';
		
		if($this->isError())
		{
			$data['title']=TLThemeTranslator::esc_html__('Error');
			$data['subtitle']=TLThemeTranslator::esc_html__('Changes can not be saved.');				
		}
		else
		{
			$data['title']=TLThemeTranslator::esc_html__('Success');
			$data['subtitle']=TLThemeTranslator::esc_html__('All changes have been saved.');			
		}
		
		$TLThemeTemplate=new TLThemeTemplate($data,$templatePath);
		return($TLThemeTemplate->output());
	}

	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>