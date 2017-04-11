		<?php echo $this->data['nonce']; ?>

		<div class="to">
			<ul class="to-form-field-list">
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Position'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Position.'); ?></span>
					<div>
						<input type="text" name="<?php TLThemeHelper::getFormName('team_position'); ?>" id="<?php TLThemeHelper::getFormName('team_position'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['team_position']); ?>" maxlength="255"/>
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('URL of page'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Link to page which need to be open after clicking on image.'); ?></span>
					<div>
						<input type="text" name="<?php TLThemeHelper::getFormName('team_link'); ?>" id="<?php TLThemeHelper::getFormName('team_link'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['team_link']); ?>" maxlength="255"/>
					</div>
				</li>
			</ul>
		</div>