		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Company name'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Company name.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('company_info_company_name'); ?>" id="<?php TLThemeHelper::getFormName('company_info_company_name'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['company_info_company_name']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Street'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Street.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('company_info_company_street'); ?>" id="<?php TLThemeHelper::getFormName('company_info_company_street'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['company_info_company_street']); ?>" maxlength="255"/>
				</div>
			</li>						
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Postcode'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Postcode.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('company_info_company_postcode'); ?>" id="<?php TLThemeHelper::getFormName('company_info_company_postcode'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['company_info_company_postcode']); ?>" maxlength="255"/>
				</div>
			</li>	
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('City'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('City.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('company_info_company_city'); ?>" id="<?php TLThemeHelper::getFormName('company_info_company_city'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['company_info_company_city']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('State'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('State.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('company_info_company_state'); ?>" id="<?php TLThemeHelper::getFormName('company_info_company_state'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['company_info_company_state']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Country'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Country.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('company_info_company_country'); ?>" id="<?php TLThemeHelper::getFormName('company_info_company_country'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['company_info_company_country']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Phone number'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Phone number.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('company_info_company_phone'); ?>" id="<?php TLThemeHelper::getFormName('company_info_company_phone'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['company_info_company_phone']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Fax number'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Fax number.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('company_info_company_fax'); ?>" id="<?php TLThemeHelper::getFormName('company_info_company_fax'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['company_info_company_fax']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('E-mail address'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('E-mail address.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('company_info_company_email'); ?>" id="<?php TLThemeHelper::getFormName('company_info_company_email'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['company_info_company_email']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Business hours'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enter working hours.'); ?></span>	
<?php
					foreach($this->data['dictionary']['day'] as $index=>$value)
					{
?>
				<div>
					<span class="to-legend-field"><?php echo TLThemeHelper::esc_html('Enter data in order: from, to, additional info.'); ?></span>
					<input class="width-p-50" type="text" name="<?php TLThemeHelper::getFormName('company_info_business_hour_'.$index.'_from'); ?>" id="<?php TLThemeHelper::getFormName('company_info_business_hour_'.$index.'_from'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['company_info_business_hour_'.$index.'_from']); ?>" maxlength="10"/>
					<input class="width-p-50" type="text" name="<?php TLThemeHelper::getFormName('company_info_business_hour_'.$index.'_to'); ?>" id="<?php TLThemeHelper::getFormName('company_info_business_hour_'.$index.'_to'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['company_info_business_hour_'.$index.'_to']); ?>" maxlength="10"/>
					<input type="text" name="<?php TLThemeHelper::getFormName('company_info_business_hour_'.$index.'_info'); ?>" id="<?php TLThemeHelper::getFormName('company_info_business_hour_'.$index.'_info'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['company_info_business_hour_'.$index.'_info']); ?>" maxlength="255"/>
				</div>
<?php
					}
?>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Section separator'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Section separator.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('company_info_section_separator'); ?>" id="<?php TLThemeHelper::getFormName('company_info_section_separator'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['company_info_section_separator']); ?>" maxlength="255"/>
				</div>
			</li>
		</ul>