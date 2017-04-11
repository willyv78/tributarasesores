		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Enable translator'); ?></h5>
				<span class="to-legend">
					<?php TLThemeTranslator::esc_html_e('Enable or disable using text from admin panel.'); ?><br/>
					<?php TLThemeTranslator::esc_html_e('As long as this option is enabled, theme po/mo files will not be loaded.'); ?>
				</span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('text_translator_enable'); ?>" id="<?php TLThemeHelper::getFormName('text_translator_enable_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['text_translator_enable'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('text_translator_enable_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('text_translator_enable'); ?>" id="<?php TLThemeHelper::getFormName('text_translator_enable_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['text_translator_enable'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('text_translator_enable_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Translate method'); ?></h5>
				<span class="to-legend">
					<?php TLThemeTranslator::esc_html_e('Select method which will be used to translate theme.'); ?><br/>
					<?php TLThemeTranslator::esc_html_e('This setting is used when built-in translator is disabled.'); ?>
				</span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('text_translator_method'); ?>" id="<?php TLThemeHelper::getFormName('text_translator_method_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['text_translator_method'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('text_translator_method_1'); ?>"><?php TLThemeTranslator::esc_html_e('Translate theme using .po files'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('text_translator_method'); ?>" id="<?php TLThemeHelper::getFormName('text_translator_method_2'); ?>" value="2" <?php TLThemeHelper::checkedIf($this->data['option']['text_translator_method'],2); ?>/>
					<label for="<?php TLThemeHelper::getFormName('text_translator_method_2'); ?>"><?php TLThemeTranslator::esc_html_e('Translate theme using WPML plugin'); ?></label>
				</div>
			</li>
		</ul>