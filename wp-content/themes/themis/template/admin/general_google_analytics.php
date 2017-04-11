		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Google Analytics'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Don\'t enter <script> tags. These tags will be added automatically.'); ?></span>
				<div>
					<textarea id="<?php TLThemeHelper::getFormName('google_analytics_code'); ?>" name="<?php TLThemeHelper::getFormName('google_analytics_code'); ?>" rows="1" cols="1"><?php echo TLThemeHelper::esc_html($this->data['option']['google_analytics_code']); ?></textarea>
				</div>						
			</li>
		</ul>