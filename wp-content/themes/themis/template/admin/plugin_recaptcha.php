		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Enable reCAPTCHA'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enable or disable reCAPTCHA.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('recaptcha_enable'); ?>" id="<?php TLThemeHelper::getFormName('recaptcha_enable_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['recaptcha_enable'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('recaptcha_enable_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('recaptcha_enable'); ?>" id="<?php TLThemeHelper::getFormName('recaptcha_enable_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['recaptcha_enable'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('recaptcha_enable_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Skin'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Skin.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('recaptcha_skin'); ?>" id="<?php TLThemeHelper::getFormName('recaptcha_skin'); ?>">
<?php
						foreach($this->data['dictionary']['recaptchaSkin'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['recaptcha_skin'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Public key'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Public key.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('recaptcha_public_key'); ?>" id="<?php TLThemeHelper::getFormName('recaptcha_public_key'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['recaptcha_public_key']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Private key'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Private key.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('recaptcha_private_key'); ?>" id="<?php TLThemeHelper::getFormName('recaptcha_private_key'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['recaptcha_private_key']); ?>" maxlength="255"/>
				</div>
			</li>
		</ul>