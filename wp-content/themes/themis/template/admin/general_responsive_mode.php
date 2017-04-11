		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Responsive mode'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enable or disable responsive mode.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('responsive_mode_enable'); ?>" id="<?php TLThemeHelper::getFormName('responsive_mode_enable_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['responsive_mode_enable'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('responsive_mode_enable_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('responsive_mode_enable'); ?>" id="<?php TLThemeHelper::getFormName('responsive_mode_enable_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['responsive_mode_enable'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('responsive_mode_enable_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
		</ul>