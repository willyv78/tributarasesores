		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Padding'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Space between FancyBox wrapper and content (in px).'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('fancybox_image_padding'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_padding'); ?>" value="<?php echo  TLThemeHelper::esc_attr($this->data['option']['fancybox_image_padding']); ?>" maxlength="3"/>
				</div>					
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Margin'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Space between viewport and FancyBox wrapper (in px).'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('fancybox_image_margin'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_margin'); ?>" value="<?php echo  TLThemeHelper::esc_attr($this->data['option']['fancybox_image_margin']); ?>" maxlength="3"/>
				</div>					
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Minimum width'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Minimum width fancyBox should be allowed to resize to	(in px).'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('fancybox_image_min_width'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_min_width'); ?>" value="<?php echo  TLThemeHelper::esc_attr($this->data['option']['fancybox_image_min_width']); ?>" maxlength="4"/>
				</div>					
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Minimum height'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Minimum height fancyBox should be allowed to resize to (in px).'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('fancybox_image_min_height'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_min_height'); ?>" value="<?php echo  TLThemeHelper::esc_attr($this->data['option']['fancybox_image_min_height']); ?>" maxlength="4"/>
				</div>					
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Maximum width'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Maximum width fancyBox should be allowed to resize to	(in px).'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('fancybox_image_max_width'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_max_width'); ?>" value="<?php echo  TLThemeHelper::esc_attr($this->data['option']['fancybox_image_max_width']); ?>" maxlength="4"/>
				</div>					
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Maximum height'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Maximum height fancyBox should be allowed to resize to (in px).'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('fancybox_image_max_height'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_max_height'); ?>" value="<?php echo  TLThemeHelper::esc_attr($this->data['option']['fancybox_image_max_height']); ?>" maxlength="4"/>
				</div>					
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Buttons'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('When enabled, helper buttons will appear over the image.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_image_helper_button_enable'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_helper_button_enable_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_image_helper_button_enable'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_image_helper_button_enable_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_image_helper_button_enable'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_helper_button_enable_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_image_helper_button_enable'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_image_helper_button_enable_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Auto resize'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('When enabled, the content will be resized after window resize event.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_image_autoresize'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_autoresize_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_image_autoresize'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_image_autoresize_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_image_autoresize'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_autoresize_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_image_autoresize'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_image_autoresize_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Auto center'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('When enabled, the content will always be centered.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_image_autocenter'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_autocenter_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_image_autocenter'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_image_autocenter_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_image_autocenter'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_autocenter_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_image_autocenter'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_image_autocenter_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Fit to view'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('When enabled, fancyBox is resized to fit inside viewport before opening.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_image_fittoview'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_fittoview_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_image_fittoview'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_image_fittoview_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_image_fittoview'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_fittoview_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_image_fittoview'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_image_fittoview_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>			
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Arrows'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('When enabled, navigation arrows will be displayed.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_image_arrow'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_arrow_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_image_arrow'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_image_arrow_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_image_arrow'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_arrow_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_image_arrow'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_image_arrow_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>				
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Close button'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('When enabled, close button will be displayed.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_image_close_button'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_close_button_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_image_close_button'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_image_close_button_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_image_close_button'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_close_button_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_image_close_button'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_image_close_button_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>	
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Close on content click'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('When enabled, fancyBox will be closed when user clicks the content.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_image_close_click'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_close_click_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_image_close_click'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_image_close_click_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_image_close_click'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_close_click_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_image_close_click'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_image_close_click_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>	
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Next click'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('When enabled, will navigate to next gallery item when user clicks the content.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_image_next_click'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_next_click_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_image_next_click'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_image_next_click_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_image_next_click'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_next_click_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_image_next_click'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_image_next_click_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>	
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Mouse wheel'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('When enabled, you will be able to navigate gallery using the mouse wheel.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_image_mouse_wheel'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_mouse_wheel_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_image_mouse_wheel'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_image_mouse_wheel_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_image_mouse_wheel'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_mouse_wheel_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_image_mouse_wheel'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_image_mouse_wheel_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>	
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Auto play'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('When enabled, slideshow will start after opening the first gallery item.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_image_autoplay'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_autoplay_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_image_autoplay'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_image_autoplay_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_image_autoplay'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_autoplay_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_image_autoplay'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_image_autoplay_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>	
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Loop'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('When enabled, enables cyclic navigation. This means, if you click \'next\' after you reach the last element, first element will be displayed (and vice versa).'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_image_loop'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_loop_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_image_loop'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_image_loop_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_image_loop'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_loop_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_image_loop'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_image_loop_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>	
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Play speed'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Slideshow speed (in ms).'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('fancybox_image_playspeed'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_playspeed'); ?>" value="<?php echo  TLThemeHelper::esc_attr($this->data['option']['fancybox_image_playspeed']); ?>" maxlength="5"/>
				</div>					
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Transition'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Select transition type.'); ?></span>
				<div class="to-clear-fix">
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Open:'); ?></span>
					<select name="<?php TLThemeHelper::getFormName('fancybox_image_animation_effect_open'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_animation_effect_open'); ?>">
<?php
						foreach($this->data['dictionary']['fancyboxTransitionType'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['fancybox_image_animation_effect_open'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
				<div class="to-clear-fix">
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Close:'); ?></span>
					<select name="<?php TLThemeHelper::getFormName('fancybox_image_animation_effect_close'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_animation_effect_close'); ?>">
<?php
						foreach($this->data['dictionary']['fancyboxTransitionType'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['fancybox_image_animation_effect_close'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
				<div class="to-clear-fix">
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Next:'); ?></span>
					<select name="<?php TLThemeHelper::getFormName('fancybox_image_animation_effect_next'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_animation_effect_next'); ?>">
<?php
						foreach($this->data['dictionary']['fancyboxTransitionType'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['fancybox_image_animation_effect_next'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
				<div class="to-clear-fix">
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Previous:'); ?></span>
					<select name="<?php TLThemeHelper::getFormName('fancybox_image_animation_effect_previous'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_animation_effect_previous'); ?>">
<?php
						foreach($this->data['dictionary']['fancyboxTransitionType'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['fancybox_image_animation_effect_previous'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Easing'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Easing method for each transition type.'); ?></span>
				<div class="to-clear-fix">
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Open:'); ?></span>
					<select name="<?php TLThemeHelper::getFormName('fancybox_image_easing_open'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_easing_open'); ?>">
<?php
						foreach($this->data['dictionary']['easingType'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($value).'" '.(TLThemeHelper::selectedIf($this->data['option']['fancybox_image_easing_open'],$value,false)).'>'.TLThemeHelper::esc_html($value).'</option>';
?>
					</select>
				</div>
				<div class="to-clear-fix">
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Close:'); ?></span>
					<select name="<?php TLThemeHelper::getFormName('fancybox_image_easing_close'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_easing_close'); ?>">
<?php
						foreach($this->data['dictionary']['easingType'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($value).'" '.(TLThemeHelper::selectedIf($this->data['option']['fancybox_image_easing_close'],$value,false)).'>'.TLThemeHelper::esc_html($value).'</option>';
?>
					</select>
				</div>
				<div class="to-clear-fix">
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Next:'); ?></span>
					<select name="<?php TLThemeHelper::getFormName('fancybox_image_easing_next'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_easing_next'); ?>">
<?php
						foreach($this->data['dictionary']['easingType'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($value).'" '.(TLThemeHelper::selectedIf($this->data['option']['fancybox_image_easing_next'],$value,false)).'>'.TLThemeHelper::esc_html($value).'</option>';
?>
					</select>
				</div>
				<div class="to-clear-fix">
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Previous:'); ?></span>
					<select name="<?php TLThemeHelper::getFormName('fancybox_image_easing_previous'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_easing_previous'); ?>">
<?php
						foreach($this->data['dictionary']['easingType'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($value).'" '.(TLThemeHelper::selectedIf($this->data['option']['fancybox_image_easing_previous'],$value,false)).'>'.TLThemeHelper::esc_html($value).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Speed'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('The time it takes (in ms) to complete transition.'); ?></span>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Open:'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('fancybox_image_speed_open'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_speed_open'); ?>" value="<?php echo  TLThemeHelper::esc_attr($this->data['option']['fancybox_image_speed_open']); ?>" maxlength="5"/>
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Close:'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('fancybox_image_speed_close'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_speed_close'); ?>" value="<?php echo  TLThemeHelper::esc_attr($this->data['option']['fancybox_image_speed_close']); ?>" maxlength="5"/>
				</div>			
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Next:'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('fancybox_image_speed_next'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_speed_next'); ?>" value="<?php echo  TLThemeHelper::esc_attr($this->data['option']['fancybox_image_speed_next']); ?>" maxlength="5"/>
				</div>			
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Previous:'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('fancybox_image_speed_previous'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_image_speed_previous'); ?>" value="<?php echo  TLThemeHelper::esc_attr($this->data['option']['fancybox_image_speed_previous']); ?>" maxlength="5"/>
				</div>			
			</li>
		</ul>