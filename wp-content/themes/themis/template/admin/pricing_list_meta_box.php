		<?php echo $this->data['nonce']; ?>

		<div class="to">
			<ul class="to-form-field-list">
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Price'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enter price of this service.'); ?></span>
					<div>
						<input type="text" name="<?php TLThemeHelper::getFormName('pricing_list_price'); ?>" id="<?php TLThemeHelper::getFormName('pricing_list_price'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['pricing_list_price']); ?>" maxlength="10" />
					</div>
				</li>
			</ul>
		</div>