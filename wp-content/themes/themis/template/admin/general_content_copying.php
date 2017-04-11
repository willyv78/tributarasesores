		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Right click'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enable or disable right click.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('right_click_enable'); ?>" id="<?php TLThemeHelper::getFormName('right_click_enable_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['right_click_enable'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('right_click_enable_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('right_click_enable'); ?>" id="<?php TLThemeHelper::getFormName('right_click_enable_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['right_click_enable'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('right_click_enable_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Text selection'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enable or disable text selection.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('copy_selection_enable'); ?>" id="<?php TLThemeHelper::getFormName('copy_selection_enable_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['copy_selection_enable'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('copy_selection_enable_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('copy_selection_enable'); ?>" id="<?php TLThemeHelper::getFormName('copy_selection_enable_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['copy_selection_enable'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('copy_selection_enable_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Colors of text selection highlighting'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Colors in HEX.'); ?></span>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Font color'); ?></span>
					<input  class="to-color-picker" type="text" name="<?php TLThemeHelper::getFormName('copy_selection_text_color'); ?>" id="<?php TLThemeHelper::getFormName('copy_selection_text_color'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['copy_selection_text_color']); ?>" maxlength="6"/>
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Background color'); ?></span>
					<input  class="to-color-picker" type="text" name="<?php TLThemeHelper::getFormName('copy_selection_background_color'); ?>" id="<?php TLThemeHelper::getFormName('copy_selection_background_color'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['copy_selection_background_color']); ?>" maxlength="6"/>
				</div>				
			</li>
		</ul>