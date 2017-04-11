		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Labels'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Labels of form fields.'); ?></span>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Label of name field'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_comment_form_label_name'); ?>" id="<?php TLThemeHelper::getFormName('text_comment_form_label_name'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_comment_form_label_name']); ?>" maxlength="255"/>
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Label of e-mail address field'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_comment_form_label_email'); ?>" id="<?php TLThemeHelper::getFormName('text_comment_form_label_email'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_comment_form_label_email']); ?>" maxlength="255"/>
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Label of website field'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_comment_form_label_website'); ?>" id="<?php TLThemeHelper::getFormName('text_comment_form_label_website'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_comment_form_label_website']); ?>" maxlength="255"/>
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Label of comment field'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_comment_form_label_comment'); ?>" id="<?php TLThemeHelper::getFormName('text_comment_form_label_comment'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_comment_form_label_comment']); ?>" maxlength="255"/>
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Label of submit button'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_comment_form_label_submit'); ?>" id="<?php TLThemeHelper::getFormName('text_comment_form_label_submit'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_comment_form_label_submit']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Notices'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Notices.'); ?></span>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Notice displayed when name is invalid (empty)'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_comment_form_notice_name'); ?>" id="<?php TLThemeHelper::getFormName('text_comment_form_notice_name'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_comment_form_notice_name']); ?>" maxlength="255"/>
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Notice displayed when e-mail address is invalid'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_comment_form_notice_email'); ?>" id="<?php TLThemeHelper::getFormName('text_comment_form_notice_email'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_comment_form_notice_email']); ?>" maxlength="255"/>
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Notice displayed when website URL is invalid'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_comment_form_notice_website'); ?>" id="<?php TLThemeHelper::getFormName('text_comment_form_notice_website'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_comment_form_notice_website']); ?>" maxlength="255"/>
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Notice displayed when comment is invalid (empty)'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_comment_form_notice_comment'); ?>" id="<?php TLThemeHelper::getFormName('text_comment_form_notice_comment'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_comment_form_notice_comment']); ?>" maxlength="255"/>
				</div>	
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Notice displayed when reCAPTCHA code is invalid'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_comment_form_notice_recaptcha'); ?>" id="<?php TLThemeHelper::getFormName('text_comment_form_notice_recaptcha'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_comment_form_notice_recaptcha']); ?>" maxlength="255"/>
				</div>	
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Notice displayed when comment could not be added'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_comment_form_notice_error'); ?>" id="<?php TLThemeHelper::getFormName('text_comment_form_notice_error'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_comment_form_notice_error']); ?>" maxlength="255"/>
				</div>	
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Notice displayed when comment has been added'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_comment_form_notice_success'); ?>" id="<?php TLThemeHelper::getFormName('text_comment_form_notice_success'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_comment_form_notice_success']); ?>" maxlength="255"/>
				</div>			
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Miscellaneous'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Miscellaneous texts.'); ?></span>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('"Leave a reply" header'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_comment_form_leave_reply'); ?>" id="<?php TLThemeHelper::getFormName('text_comment_form_leave_reply'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_comment_form_leave_reply']); ?>" maxlength="255"/>
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('"Cancel reply" link'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_comment_form_cancel_reply'); ?>" id="<?php TLThemeHelper::getFormName('text_comment_form_cancel_reply'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_comment_form_cancel_reply']); ?>" maxlength="255"/>
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('"Posted by" author'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_comment_form_posted_by'); ?>" id="<?php TLThemeHelper::getFormName('text_comment_form_posted_by'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_comment_form_posted_by']); ?>" maxlength="255"/>
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('"In reply to" author'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_comment_form_in_reply_to'); ?>" id="<?php TLThemeHelper::getFormName('text_comment_form_in_reply_to'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_comment_form_in_reply_to']); ?>" maxlength="255"/>
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('"Reply" link'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_comment_form_reply'); ?>" id="<?php TLThemeHelper::getFormName('text_comment_form_reply'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_comment_form_reply']); ?>" maxlength="255"/>
				</div>
			</li>	
		</ul>