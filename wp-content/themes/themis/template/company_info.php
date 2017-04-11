		<ul class="company-info company-info-full list-0 clear-fix <?php echo TLThemeHelper::esc_attr($this->data['css_class']); ?>">
<?php
		$Validation=new TLThemeValidation();

		$data=array();
		$output=null;

		$data[0]=array($this->data['option']['company_info_company_name']);
		$data[1]=array($this->data['option']['company_info_company_street']);
		$data[2]=array($this->data['option']['company_info_company_postcode'],$this->data['option']['company_info_company_city']);
		$data[3]=array($this->data['option']['company_info_company_state'],$this->data['option']['company_info_company_country']);

		foreach($data as $value)
		{
			if($Validation->isEmpty(join('',$value))) continue;
			if(!is_null($output)) $output.=TLThemeOption::getOption('company_info_section_separator');

			$output.=TLThemeHelper::esc_html(join(' ',$value));
		}

		if($Validation->isNotEmpty($output))
		{
?>
			<li class="icon-address paragraph"><?php echo $output; ?></li>
<?php
		}

		if($Validation->isNotEmpty($this->data['option']['company_info_company_email']))
		{	
			$email=preg_split('/,/',$this->data['option']['company_info_company_email']);
			foreach($email as $value)
			{
?>
			<li class="icon-mail"><a href="mailto:<?php echo TLThemeHelper::esc_attr($value); ?>"><?php echo TLThemeHelper::esc_html($value); ?></a></li>
<?php
			}
	
		}

		if($Validation->isNotEmpty($this->data['option']['company_info_company_phone']))
		{	
			$phone=preg_split('/,/',$this->data['option']['company_info_company_phone']);
			foreach($phone as $value)
			{
?>
			<li class="icon-phone"><?php echo TLThemeHelper::esc_html($value); ?></li>
<?php
			}
		}

		if($Validation->isNotEmpty($this->data['option']['company_info_company_fax']))
		{
			$fax=preg_split('/,/',$this->data['option']['company_info_company_fax']);
			foreach($fax as $value)
			{
?>
			<li class="icon-fax"><?php echo TLThemeHelper::esc_html($value); ?></li>
<?php
			}
		}

		if($this->data['type']=='full-data')
		{
			$output=null;
			$data=array();

			foreach($this->data['dictionary']['day'] as $index=>$value)
				$data[$index]=array('company_info_business_hour_'.$index.'_from','company_info_business_hour_'.$index.'_to','company_info_business_hour_'.$index.'_info');

			foreach($data as $index=>$value)
			{
				$e=array();

				$e[]=$Validation->isNotEmpty($this->data['option'][$value[0]]);
				$e[]=$Validation->isNotEmpty($this->data['option'][$value[1]]);
				$e[]=$Validation->isNotEmpty($this->data['option'][$value[2]]);

				if(!in_array(true,$e)) continue;

				$output.=
				'
					<div class="company-info-business-hour paragraph">

						<div class="company-info-business-hour-open-range">'.TLThemeHelper::esc_html($this->data['option'][$value[0]]).' - '.TLThemeHelper::esc_html($this->data['option'][$value[1]]).'</div>
						<div class="company-info-business-hour-dayname"></div>';
//<div class="company-info-business-hour-dayname"> '.TLThemeTranslator::esc_html__('on','business_hour_on').' '.$this->data['dictionary']['day'][$index][0].'</div>
				if((!$Validation->isEmpty($this->data['option'][$value[0]])))
				{
					$output.='<div class="company-info-business-hour-info paragraph">'.TLThemeHelper::esc_html($this->data['option'][$value[2]]).'</div>';
				}

				$output.=
				'
					</div>
				';
			}

			if($Validation->isNotEmpty($output))
			{
?>
			<li class="icon-hours"><?php echo $output; ?></li>
<?php
			}

		}
?>
		</ul>