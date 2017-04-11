		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Enable footer'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enable or disable footer.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('footer_enable'); ?>" id="<?php TLThemeHelper::getFormName('footer_enable_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['footer_enable'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('footer_enable_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('footer_enable'); ?>" id="<?php TLThemeHelper::getFormName('footer_enable_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['footer_enable'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('footer_enable_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Enable top footer'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enable or disable top part of footer.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('footer_top_enable'); ?>" id="<?php TLThemeHelper::getFormName('footer_top_enable_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['footer_top_enable'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('footer_top_enable_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('footer_top_enable'); ?>" id="<?php TLThemeHelper::getFormName('footer_top_enable_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['footer_top_enable'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('footer_top_enable_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Enable bottom footer'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enable or disable bottom part of footer.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('footer_bottom_enable'); ?>" id="<?php TLThemeHelper::getFormName('footer_bottom_enable_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['footer_bottom_enable'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('footer_bottom_enable_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('footer_bottom_enable'); ?>" id="<?php TLThemeHelper::getFormName('footer_bottom_enable_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['footer_bottom_enable'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('footer_bottom_enable_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Bottom footer content'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Bottom footer content.'); ?></span>
				<div>
					<?php wp_editor($this->data['option']['footer_bottom_content'],TLThemeHelper::getFormName('footer_bottom_content',false)); ?>
				</div>
			</li>
		</ul>