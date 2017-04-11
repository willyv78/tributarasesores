		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('"Next" image label'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('"Next" image label.'); ?></span>
				<input type="text" name="<?php TLThemeHelper::getFormName('text_plugin_fancybox_next'); ?>" id="<?php TLThemeHelper::getFormName('text_plugin_fancybox_next'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_plugin_fancybox_next']); ?>" maxlength="255"/>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('"Previous" image label'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('"Previous" image label.'); ?></span>
				<input type="text" name="<?php TLThemeHelper::getFormName('text_plugin_fancybox_previous'); ?>" id="<?php TLThemeHelper::getFormName('text_plugin_fancybox_previous'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_plugin_fancybox_previous']); ?>" maxlength="255"/>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('"Close" fancybox label'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('"Close" fancybox label.'); ?></span>
				<input type="text" name="<?php TLThemeHelper::getFormName('text_plugin_fancybox_close'); ?>" id="<?php TLThemeHelper::getFormName('text_plugin_fancybox_close'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_plugin_fancybox_close']); ?>" maxlength="255"/>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('"Toggle size" label'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('"Toggle size" label'); ?></span>
				<input type="text" name="<?php TLThemeHelper::getFormName('text_plugin_fancybox_toggle'); ?>" id="<?php TLThemeHelper::getFormName('text_plugin_fancybox_toggle'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_plugin_fancybox_toggle']); ?>" maxlength="255"/>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('"Start slideshow" label'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('"Start slideshow" label'); ?></span>
				<input type="text" name="<?php TLThemeHelper::getFormName('text_plugin_fancybox_start_slideshow'); ?>" id="<?php TLThemeHelper::getFormName('text_plugin_fancybox_start_slideshow'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_plugin_fancybox_start_slideshow']); ?>" maxlength="255"/>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Error message'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Error message displaying when content could not be loaded.'); ?></span>
				<input type="text" name="<?php TLThemeHelper::getFormName('text_plugin_fancybox_error'); ?>" id="<?php TLThemeHelper::getFormName('text_plugin_fancybox_error'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_plugin_fancybox_error']); ?>" maxlength="255"/>
			</li>
		</ul>