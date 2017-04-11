		<?php echo $this->data['nonce']; ?>

		<div class="to">
			<ul class="to-form-field-list">
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Person'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Person name (surname).'); ?></span>
					<div>
						<input type="text" name="<?php TLThemeHelper::getFormName('testimonial_person'); ?>" id="<?php TLThemeHelper::getFormName('testimonial_person'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['testimonial_person']); ?>" maxlength="255" />
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Company'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Company name.'); ?></span>
					<div>
						<input type="text" name="<?php TLThemeHelper::getFormName('testimonial_company'); ?>" id="<?php TLThemeHelper::getFormName('testimonial_company'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['testimonial_company']); ?>" maxlength="255" />
					</div>
				</li>
			</ul>
		</div>