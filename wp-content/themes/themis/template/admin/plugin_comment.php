		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Enable reCAPTCHA on reply form'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enable or disable reCAPTCHA on reply form.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('comment_recaptcha_enable'); ?>" id="<?php TLThemeHelper::getFormName('comment_recaptcha_enable_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['comment_recaptcha_enable'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('comment_recaptcha_enable_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('comment_recaptcha_enable'); ?>" id="<?php TLThemeHelper::getFormName('comment_recaptcha_enable_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['comment_recaptcha_enable'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('comment_recaptcha_enable_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
		</ul>