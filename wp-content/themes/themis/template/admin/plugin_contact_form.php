		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Enable contact form'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enable or disable contact form.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('contact_form_enable'); ?>" id="<?php TLThemeHelper::getFormName('contact_form_enable_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['contact_form_enable'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('contact_form_enable_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('contact_form_enable'); ?>" id="<?php TLThemeHelper::getFormName('contact_form_enable_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['contact_form_enable'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('contact_form_enable_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Enable reCAPTCHA on contact form'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enable or disable reCAPTCHA on contact form.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('contact_form_recaptcha_enable'); ?>" id="<?php TLThemeHelper::getFormName('contact_form_recaptcha_enable_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['contact_form_recaptcha_enable'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('contact_form_recaptcha_enable_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('contact_form_recaptcha_enable'); ?>" id="<?php TLThemeHelper::getFormName('contact_form_recaptcha_enable_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['contact_form_recaptcha_enable'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('contact_form_recaptcha_enable_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Recipient name'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Recipient name of the mail message.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('contact_form_recipient_name'); ?>" id="<?php TLThemeHelper::getFormName('contact_form_recipient_name'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['contact_form_recipient_name']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Recipient e-mail address'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Recipient e-mail address of the mail message.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('contact_form_recipient_address'); ?>" id="<?php TLThemeHelper::getFormName('contact_form_recipient_address'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['contact_form_recipient_address']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Enable SMTP'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enable or disable SMTP.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('contact_form_smtp_enable'); ?>" id="<?php TLThemeHelper::getFormName('contact_form_smtp_enable_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['contact_form_smtp_enable'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('contact_form_smtp_enable_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('contact_form_smtp_enable'); ?>" id="<?php TLThemeHelper::getFormName('contact_form_smtp_enable_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['contact_form_smtp_enable'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('contact_form_smtp_enable_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Username'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Username.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('contact_form_smtp_username'); ?>" id="<?php TLThemeHelper::getFormName('contact_form_smtp_username'); ?>" value="<?php TLThemeHelper::displayIf($this->data['option']['contact_form_smtp_enable'],1,TLThemeHelper::esc_attr($this->data['option']['contact_form_smtp_username'])); ?>" <?php TLThemeHelper::disabledIf($this->data['option']['contact_form_smtp_enable'],0); ?> maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Password'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Password.'); ?></span>
				<div>
					<input type="password" name="<?php TLThemeHelper::getFormName('contact_form_smtp_password'); ?>" id="<?php TLThemeHelper::getFormName('contact_form_smtp_password'); ?>" value="" <?php echo TLThemeHelper::disabledIf($this->data['option']['contact_form_smtp_enable'],0); ?> maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Host'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Host.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('contact_form_smtp_host'); ?>" id="<?php TLThemeHelper::getFormName('contact_form_smtp_host'); ?>" value="<?php TLThemeHelper::displayIf($this->data['option']['contact_form_smtp_enable'],1,TLThemeHelper::esc_attr($this->data['option']['contact_form_smtp_host'])); ?>" <?php TLThemeHelper::disabledIf($this->data['option']['contact_form_smtp_enable'],0); ?> maxlength="255"/>
				</div>
			</li>	
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Port'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Port.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('contact_form_smtp_port'); ?>" id="<?php TLThemeHelper::getFormName('contact_form_smtp_port'); ?>" value="<?php TLThemeHelper::displayIf($this->data['option']['contact_form_smtp_enable'],1,TLThemeHelper::esc_attr($this->data['option']['contact_form_smtp_port'])); ?>" <?php TLThemeHelper::disabledIf($this->data['option']['contact_form_smtp_enable'],0); ?> maxlength="4"/>
				</div>
			</li>	
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Secure connection type'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Secure connection type.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('contact_form_smtp_secure_type'); ?>" id="<?php TLThemeHelper::getFormName('contact_form_smtp_secure_type'); ?>" <?php echo ($this->data['option']['contact_form_smtp_enable']==1 ? '' : 'disabled'); ?>>
<?php
						foreach($this->data['dictionary']['SMTPSecureType'] as $index=>$value)
							echo '<option value="'. TLThemeHelper::esc_attr($index).'"'.(TLThemeHelper::selectedIf($this->data['option']['contact_form_smtp_secure_type'],$index,false)).'>'. TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Debug contact form'); ?></h5>
				<span class="to-legend">
					<?php TLThemeTranslator::esc_html_e('Enable this option if you have problems with working of contact form.'); ?><br/>
					<?php TLThemeTranslator::esc_html_e('Then, you can check the result of processing request via Fire- or Chromebug console.'); ?>
				</span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('contact_form_debug'); ?>" id="<?php TLThemeHelper::getFormName('contact_form_debug_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['contact_form_debug'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('contact_form_debug_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('contact_form_debug'); ?>" id="<?php TLThemeHelper::getFormName('contact_form_debug_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['contact_form_debug'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('contact_form_debug_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Reset contact form'); ?></h5>
				<span class="to-legend">
					<?php TLThemeTranslator::esc_html_e('Enable this option if you would like to reset all fields in contact form after sending message.'); ?><br/>
				</span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('contact_form_reset'); ?>" id="<?php TLThemeHelper::getFormName('contact_form_reset_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['contact_form_reset'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('contact_form_reset_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('contact_form_reset'); ?>" id="<?php TLThemeHelper::getFormName('contact_form_reset_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['contact_form_reset'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('contact_form_reset_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Subject'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Message subject.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('contact_form_subject'); ?>" id="<?php TLThemeHelper::getFormName('contact_form_subject'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['contact_form_subject']); ?>" maxlength="255"/>
				</div>
			</li>							
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Message'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Message.'); ?></span>
				<div>
					<?php wp_editor($this->data['option']['contact_form_message'],THEME_OPTION_PREFIX.'_contact_form_message'); ?>
				</div>
			</li>
		</ul>

		<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				$('input[name="<?php echo THEME_OPTION_PREFIX.'_contact_form_smtp_enable'; ?>"]').bind('change',function() 
				{
					var object=$(this);
					var element=['contact_form_smtp_username','contact_form_smtp_password','contact_form_smtp_host','contact_form_smtp_port','contact_form_smtp_secure_type'];

					$(element).each(function(index,value) 
					{
						var element=$('#<?php echo THEME_OPTION_PREFIX; ?>_'+value);
						if(object.val()==1) optionElement.removeAttr('disabled');
						else 
						{
							if(optionElement.is('select')) optionElement.val(optionElement.children().first().val());
							else optionElement.val('');

							optionElement.attr('disabled','disabled');
						}
					});
				});
			});
		</script>