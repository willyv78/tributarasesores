		<form name="<?php echo 'contact_form_'.$this->data['id']; ?>" id="<?php echo 'contact_form_'.$this->data['id']; ?>" action="" method="post" class="clear-fix contact-form <?php echo TLThemeHelper::esc_attr($this->data['css_class']); ?>">
			<div class="clear-fix">
				<ul class="list-0 form-line clear-fix">
					<li class="block form-line-33x33x33 margin-left-0">
						<div><label for="contact_form_name_<?php echo $this->data['id']; ?>"><?php TLThemeTranslator::esc_html_e('Your name','contact_form_label_name'); ?></label></div>
						<div class="form-field"><input type="text" name="contact_form_name_<?php echo $this->data['id']; ?>" id="contact_form_name_<?php echo $this->data['id']; ?>" value=""/></div>
					</li>
					<li class="block form-line-33x33x33">
						<div><label for="contact_form_mail_<?php echo $this->data['id']; ?>"><?php TLThemeTranslator::esc_html_e('Your e-mail address','contact_form_label_email'); ?></label></div>
						<div class="form-field"><input type="text" name="contact_form_mail_<?php echo $this->data['id']; ?>" id="contact_form_mail_<?php echo $this->data['id']; ?>" value=""/></div>
					</li>
					<li class="block form-line-33x33x33 float-right">
						<div><label for="contact_form_subject_<?php echo $this->data['id']; ?>"><?php TLThemeTranslator::esc_html_e('Subject of the message','contact_form_label_subject'); ?></label></div>
						<div class="form-field"><input type="text" name="contact_form_subject_<?php echo $this->data['id']; ?>" id="contact_form_subject_<?php echo $this->data['id']; ?>" value=""/></div>
					</li>
					<li class="clear-fix form-line-100 block">
						<div><label for="contact_form_message_<?php echo $this->data['id']; ?>"><?php TLThemeTranslator::esc_html_e('Your message','contact_form_label_message'); ?></label></div>
						<div class="form-field"><textarea name="contact_form_message_<?php echo $this->data['id']; ?>" id="contact_form_message_<?php echo $this->data['id']; ?>" rows="1" cols="1"></textarea></div>	
					</li>
					<li class="recaptcha-destination margin-left-0 margin-bottom-0"></li>
					<li class="clear-fix float-right margin-left-0 block">
						<input type="hidden" value="theme_public_contact_form_send" name="action"/>
						<input type="submit" id="contact_form_submit_<?php echo $this->data['id']; ?>" name="contact_form_submit_<?php echo $this->data['id']; ?>" class="button" value="<?php TLThemeTranslator::esc_attr_e('Send message','contact_form_label_button'); ?>"/>
					</li>
				</ul>
			</div>
		</form>

		<div class="hidden">
		<script type="text/javascript">
		jQuery(document).ready(function() 
		{
			jQuery('#<?php echo 'contact_form_'.$this->data['id']; ?> label').inFieldLabels();
			var form=new TLThemeContactForm('<?php echo $this->data['id']; ?>',<?php echo (int)$this->data['recaptchaEnable']; ?>);
			form.init();
		});
		</script>
		</div>