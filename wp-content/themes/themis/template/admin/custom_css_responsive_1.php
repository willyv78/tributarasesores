		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('CSS styles'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Default CSS styles.'); ?></span>
				<div>
					<textarea id="<?php TLThemeHelper::getFormName('custom_css_responsive_1'); ?>" name="<?php TLThemeHelper::getFormName('custom_css_responsive_1'); ?>" rows="1" cols="1" class="css-editor"><?php echo TLThemeHelper::esc_html($this->data['option']['custom_css_responsive_1']); ?></textarea>
				</div>						
			</li>
		</ul>