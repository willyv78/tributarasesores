		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Labels'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Labels of form fields.'); ?></span>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Label of phrase field'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_search_form_label_phrase'); ?>" id="<?php TLThemeHelper::getFormName('text_search_form_label_phrase'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_search_form_label_phrase']); ?>" maxlength="255"/>
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Label of search button'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_search_form_label_search'); ?>" id="<?php TLThemeHelper::getFormName('text_search_form_label_search'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_search_form_label_search']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Error'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Error displayed when no posts found.'); ?></span>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Header'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_search_form_notice_no_post_found_header'); ?>" id="<?php TLThemeHelper::getFormName('text_search_form_notice_no_post_found_header'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_search_form_notice_no_post_found_header']); ?>" maxlength="255"/>
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Text'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_search_form_notice_no_post_found_text'); ?>" id="<?php TLThemeHelper::getFormName('text_search_form_notice_no_post_found_text'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_search_form_notice_no_post_found_text']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Header'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Header of search results pages.'); ?></span>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Header'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_search_form_header'); ?>" id="<?php TLThemeHelper::getFormName('text_search_form_header'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_search_form_header']); ?>" maxlength="255"/>
				</div>
			</li>	
		</ul>