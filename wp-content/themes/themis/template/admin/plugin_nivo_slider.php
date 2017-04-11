		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Enable Nivo Slider'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enable or disable Nivo Slider.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('nivo_slider_enable'); ?>" id="<?php TLThemeHelper::getFormName('nivo_slider_enable_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['nivo_slider_enable'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('nivo_slider_enable_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('nivo_slider_enable'); ?>" id="<?php TLThemeHelper::getFormName('nivo_slider_enable_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['nivo_slider_enable'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('nivo_slider_enable_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Transition effect'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Select transition effect.'); ?></span>
				<div class="scroll-area">
					<div class="to-checkbox-button">
<?php
		$i=0;
		foreach($this->data['dictionary']['nivoSliderEffect'] as $index=>$value)
		{
			$i++;
?>
						<input type="checkbox" name="<?php TLThemeHelper::getFormName('nivo_slider_effect[]'); ?>" id="<?php TLThemeHelper::getFormName('nivo_slider_effect_'.$i); ?>" value="<?php echo TLThemeHelper::esc_attr($index); ?>" <?php TLThemeHelper::checkedIf($this->data['option']['nivo_slider_effect'],$index); ?>/>
						<label for="<?php TLThemeHelper::getFormName('nivo_slider_effect_'.$i); ?>"><?php echo TLThemeHelper::esc_html($value[0]); ?></label>
<?php
		}
?>
					</div>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Number of slices'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enter number of slices - only for "slice" transitions.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('nivo_slider_slice_number'); ?>" id="<?php TLThemeHelper::getFormName('nivo_slider_slice_number'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['nivo_slider_slice_number']); ?>" maxlength="4"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Number of columns'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enter number of columns - only for "box" transitions.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('nivo_slider_col_number'); ?>" id="<?php TLThemeHelper::getFormName('nivo_slider_col_number'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['nivo_slider_col_number']); ?>" maxlength="4"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Number of rows'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enter number of rows - only for "box" transitions.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('nivo_slider_row_number'); ?>" id="<?php TLThemeHelper::getFormName('nivo_slider_row_number'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['nivo_slider_row_number']); ?>" maxlength="4"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Transition speed'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enter value of transition speed (in ms).'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('nivo_slider_transition_speed'); ?>" id="<?php TLThemeHelper::getFormName('nivo_slider_transition_speed'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['nivo_slider_transition_speed']); ?>" maxlength="5"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Pause time'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enter value of pause time (in ms).'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('nivo_slider_pause_time'); ?>" id="<?php TLThemeHelper::getFormName('nivo_slider_pause_time'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['nivo_slider_pause_time']); ?>" maxlength="5"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Start slide'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enter number of start slide.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('nivo_slider_start_slide'); ?>" id="<?php TLThemeHelper::getFormName('nivo_slider_start_slide'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['nivo_slider_start_slide']); ?>" maxlength="3"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Direction navigation'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enable Prev/Next navigation.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('nivo_slider_direction_navigation_enable'); ?>" id="<?php TLThemeHelper::getFormName('nivo_slider_direction_navigation_enable_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['nivo_slider_direction_navigation_enable'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('nivo_slider_direction_navigation_enable_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('nivo_slider_direction_navigation_enable'); ?>" id="<?php TLThemeHelper::getFormName('nivo_slider_direction_navigation_enable_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['nivo_slider_direction_navigation_enable'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('nivo_slider_direction_navigation_enable_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Pause on hover'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Stop transition when user hover on image.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('nivo_slider_pause_hover'); ?>" id="<?php TLThemeHelper::getFormName('nivo_slider_pause_hover_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['nivo_slider_pause_hover'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('nivo_slider_pause_hover_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('nivo_slider_pause_hover'); ?>" id="<?php TLThemeHelper::getFormName('nivo_slider_pause_hover_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['nivo_slider_pause_hover'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('nivo_slider_pause_hover_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Manual advance'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Force manual transitions.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('nivo_slider_manual_advance'); ?>" id="<?php TLThemeHelper::getFormName('nivo_slider_manual_advance_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['nivo_slider_manual_advance'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('nivo_slider_manual_advance_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('nivo_slider_manual_advance'); ?>" id="<?php TLThemeHelper::getFormName('nivo_slider_manual_advance_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['nivo_slider_manual_advance'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('nivo_slider_manual_advance_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Random start'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Start on a random slide.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('nivo_slider_random_start'); ?>" id="<?php TLThemeHelper::getFormName('nivo_slider_random_start_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['nivo_slider_random_start'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('nivo_slider_random_start_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('nivo_slider_random_start'); ?>" id="<?php TLThemeHelper::getFormName('nivo_slider_random_start_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['nivo_slider_random_start'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('nivo_slider_random_start_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
		</ul>