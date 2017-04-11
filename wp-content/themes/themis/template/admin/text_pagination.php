		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('"Next" button label'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('"Next" button label'); ?></span>
				<input type="text" name="<?php TLThemeHelper::getFormName('text_pagination_label_next_button'); ?>" id="<?php TLThemeHelper::getFormName('text_pagination_label_next_button'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_pagination_label_next_button']); ?>" maxlength="255"/>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('"Previous" button label'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('"Previous" button label'); ?></span>
				<input type="text" name="<?php TLThemeHelper::getFormName('text_pagination_label_previous_button'); ?>" id="<?php TLThemeHelper::getFormName('text_pagination_label_previous_button'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_pagination_label_previous_button']); ?>" maxlength="255"/>
			</li>
		</ul>