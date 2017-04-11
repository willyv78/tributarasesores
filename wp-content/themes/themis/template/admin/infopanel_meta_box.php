		<?php echo $this->data['nonce']; ?>

		<div class="to">
			<ul class="to-form-field-list">
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('First line text'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('First line text.'); ?></span>
					<div>
						<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Text'); ?></span>
						<input type="text" name="<?php TLThemeHelper::getFormName('infopanel_first_line_text'); ?>" id="<?php TLThemeHelper::getFormName('infopanel_first_line_text'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['infopanel_first_line_text']); ?>" maxlength="255"/>
					</div>
					<div>
						<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Text color'); ?></span>
						<input class="to-color-picker" type="text" name="<?php TLThemeHelper::getFormName('infopanel_first_line_text_color'); ?>" id="<?php TLThemeHelper::getFormName('infopanel_first_line_text_color'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['infopanel_first_line_text_color']); ?>" maxlength="6"/>
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Second line text'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Second line text.'); ?></span>
					<div>
						<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Text'); ?></span>
						<input type="text" name="<?php TLThemeHelper::getFormName('infopanel_second_line_text'); ?>" id="<?php TLThemeHelper::getFormName('infopanel_second_line_text'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['infopanel_second_line_text']); ?>" maxlength="255"/>
					</div>
					<div>
						<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Text color'); ?></span>
						<input class="to-color-picker" type="text" name="<?php TLThemeHelper::getFormName('infopanel_second_line_text_color'); ?>" id="<?php TLThemeHelper::getFormName('infopanel_second_line_text_color'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['infopanel_second_line_text_color']); ?>" maxlength="6"/>
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Box settins'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Box settins.'); ?></span>
					<div>
						<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Padding top (in px)'); ?></span>
						<input type="text" name="<?php TLThemeHelper::getFormName('infopanel_box_padding_top'); ?>" id="<?php TLThemeHelper::getFormName('infopanel_box_padding_top'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['infopanel_box_padding_top']); ?>" maxlength="3"/>
					</div>
					<div>
						<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Padding right (in px)'); ?></span>
						<input type="text" name="<?php TLThemeHelper::getFormName('infopanel_box_padding_right'); ?>" id="<?php TLThemeHelper::getFormName('infopanel_box_padding_right'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['infopanel_box_padding_right']); ?>" maxlength="3"/>
					</div>
					<div>
						<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Padding bottom (in px)'); ?></span>
						<input type="text" name="<?php TLThemeHelper::getFormName('infopanel_box_padding_bottom'); ?>" id="<?php TLThemeHelper::getFormName('infopanel_box_padding_bottom'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['infopanel_box_padding_bottom']); ?>" maxlength="3"/>
					</div>
					<div>
						<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Padding left (in px)'); ?></span>
						<input type="text" name="<?php TLThemeHelper::getFormName('infopanel_box_padding_left'); ?>" id="<?php TLThemeHelper::getFormName('infopanel_box_padding_left'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['infopanel_box_padding_left']); ?>" maxlength="3"/>
					</div>
					<div>
						<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Background color (in HEX)'); ?></span>
						<input class="to-color-picker" type="text" name="<?php TLThemeHelper::getFormName('infopanel_box_bg_color'); ?>" id="<?php TLThemeHelper::getFormName('infopanel_box_bg_color'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['infopanel_box_bg_color']); ?>" maxlength="6"/>
					</div>			
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Button settings'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Button settings.'); ?></span>
					<div>
						<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Label'); ?></span>
						<input type="text" name="<?php TLThemeHelper::getFormName('infopanel_button_label'); ?>" id="<?php TLThemeHelper::getFormName('infopanel_button_label'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['infopanel_button_label']); ?>" maxlength="255"/>
					</div>
					<div>
						<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Link'); ?></span>
						<input type="text" name="<?php TLThemeHelper::getFormName('infopanel_button_link'); ?>" id="<?php TLThemeHelper::getFormName('infopanel_button_link'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['infopanel_button_link']); ?>" maxlength="255"/>
					</div>
					<div>
						<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Text color (in HEX)'); ?></span>
						<input class="to-color-picker" type="text" name="<?php TLThemeHelper::getFormName('infopanel_button_text_color'); ?>" id="<?php TLThemeHelper::getFormName('infopanel_button_text_color'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['infopanel_button_text_color']); ?>" maxlength="6"/>
					</div>
					<div>
						<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Background color (in HEX)'); ?></span>
						<input class="to-color-picker" type="text" name="<?php TLThemeHelper::getFormName('infopanel_button_bg_color'); ?>" id="<?php TLThemeHelper::getFormName('infopanel_button_bg_color'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['infopanel_button_bg_color']); ?>" maxlength="6"/>
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Shortcode'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Shortcode'); ?></span>
					<div>
						<?php echo '['.THEME_CONTEXT.'_infopanel id="'.$this->data['postId'].'"]'; ?>
					</div>
				</li>
			</ul>
		</div>

		<script type="text/javascript">
			jQuery(document).ready(function($)
			{	
				$('.to').themeOptionElement({init:true});
			});
		</script>