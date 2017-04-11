<?php

/******************************************************************************/
/******************************************************************************/

class TLThemeCompanyInfo
{
	/**************************************************************************/
	
	function TLThemeCompanyInfo()
	{
		$this->type=array
		(
			'full-data'				=>	array(TLThemeTranslator::__('Full information')),
			'shortened-data'		=>	array(TLThemeTranslator::__('Shortened information')),	
		);
	}
	
	/**************************************************************************/
	
	function createCompanyInfo($attr)
	{
		$default=array
		(
			'type'				=>	'full-data',
			'source'			=>	'global',
			'company_name'		=>	'',
			'company_street'	=>	'',
			'company_postcode'	=>	'',
			'company_city'		=>	'',
			'company_state'		=>	'',
			'company_country'	=>	'',
			'company_phone'		=>	'',
			'company_fax'		=>	'',
			'company_email'		=>	'',		
			'css_class'			=>	''
		);
		
		$attribute=shortcode_atts($default,$attr);
		if(!in_array($attribute['type'],array_keys($this->type))) $attribute['type']=$default['type'];

		$Theme=new TLTheme();
		
		$data=array();
		
		$data['type']=$attribute['type'];
		$data['css_class']=$attribute['css_class'];
		
		$data['option']=TLThemeOption::getOptionObject();
		$data['dictionary']['day']=$Theme->day;

		if($attribute['source']=='local')
		{
			$data['option']['company_info_company_name']=$attribute['company_name'];
			$data['option']['company_info_company_street']=$attribute['company_street'];
			$data['option']['company_info_company_postcode']=$attribute['company_postcode'];
			$data['option']['company_info_company_city']=$attribute['company_city'];
			$data['option']['company_info_company_state']=$attribute['company_state'];
			$data['option']['company_info_company_country']=$attribute['company_country'];
			$data['option']['company_info_company_phone']=$attribute['company_phone'];
			$data['option']['company_info_company_fax']=$attribute['company_fax'];
			$data['option']['company_info_company_email']=$attribute['company_email'];
		}

		$Template=new TLThemeTemplate($data,THEME_TEMPLATE_DIR.'company_info.php');
		return($Template->outputWP(true));	
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>