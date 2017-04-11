		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Labels'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Labels of form fields.'); ?></span>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Label of name field'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_contact_form_label_name'); ?>" id="<?php TLThemeHelper::getFormName('text_contact_form_label_name'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_contact_form_label_name']); ?>" maxlength="255"/>
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Label of e-mail address field'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_contact_form_label_email'); ?>" id="<?php TLThemeHelper::getFormName('text_contact_form_label_email'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_contact_form_label_email']); ?>" maxlength="255"/>
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Label of subject field'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_contact_form_label_subject'); ?>" id="<?php TLThemeHelper::getFormName('text_contact_form_label_subject'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_contact_form_label_subject']); ?>" maxlength="255"/>
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Label of message field'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_contact_form_label_message'); ?>" id="<?php TLThemeHelper::getFormName('text_contact_form_label_message'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_contact_form_label_message']); ?>" maxlength="255"/>
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Label of submit button'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_contact_form_label_button'); ?>" id="<?php TLThemeHelper::getFormName('text_contact_form_label_button'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_contact_form_label_button']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Notices'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Notices.'); ?></span>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Notice displayed when name is invalid (empty)'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_contact_form_notice_name'); ?>" id="<?php TLThemeHelper::getFormName('text_contact_form_notice_name'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_contact_form_notice_name']); ?>" maxlength="255"/>
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Notice displayed when e-mail address is invalid'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_contact_form_notice_email'); ?>" id="<?php TLThemeHelper::getFormName('text_contact_form_notice_email'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_contact_form_notice_email']); ?>" maxlength="255"/>
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Notice displayed when subject is invalid (empty)'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_contact_form_notice_subject'); ?>" id="<?php TLThemeHelper::getFormName('text_contact_form_notice_subject'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_contact_form_notice_subject']); ?>" maxlength="255"/>
				</div>		
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Notice displayed when message is invalid (empty)'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_contact_form_notice_message'); ?>" id="<?php TLThemeHelper::getFormName('text_contact_form_notice_message'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_contact_form_notice_message']); ?>" maxlength="255"/>
				</div>	
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Notice displayed when reCAPTCHA code is invalid'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_contact_form_notice_recaptcha'); ?>" id="<?php TLThemeHelper::getFormName('text_contact_form_notice_recaptcha'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_contact_form_notice_recaptcha']); ?>" maxlength="255"/>
				</div>	
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Notice displayed when message could not be sent'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_contact_form_notice_error'); ?>" id="<?php TLThemeHelper::getFormName('text_contact_form_notice_error'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_contact_form_notice_error']); ?>" maxlength="255"/>
				</div>	
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Notice displayed when message was be sent'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_contact_form_notice_success'); ?>" id="<?php TLThemeHelper::getFormName('text_contact_form_notice_success'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_contact_form_notice_success']); ?>" maxlength="255"/>
				</div>			
			</li>
		</ul>