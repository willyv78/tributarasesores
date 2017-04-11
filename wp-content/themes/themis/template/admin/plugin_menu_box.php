		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Dimensions of menu items'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Dimensions of menu item, in order: width, height, padding (left and right) - in px.'); ?></span>
				<div>
					<label for="<?php TLThemeHelper::getFormName('menu_box_item_dimension_width'); ?>" class="to-infield"><?php TLThemeTranslator::esc_html_e('Width'); ?></label>
					<input type="text" name="<?php TLThemeHelper::getFormName('menu_box_item_dimension_width'); ?>" id="<?php TLThemeHelper::getFormName('menu_box_item_dimension_width'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_box_item_dimension_width']); ?>" maxlength="3"/>
				</div>	
				<div>
					<label for="<?php TLThemeHelper::getFormName('menu_box_item_dimension_height'); ?>" class="to-infield"><?php TLThemeTranslator::esc_html_e('Height'); ?></label>
					<input type="text" name="<?php TLThemeHelper::getFormName('menu_box_item_dimension_height'); ?>" id="<?php TLThemeHelper::getFormName('menu_box_item_dimension_height'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_box_item_dimension_height']); ?>" maxlength="3"/>
				</div>
				<div>
					<label for="<?php TLThemeHelper::getFormName('menu_box_item_dimension_padding'); ?>" class="to-infield"><?php TLThemeTranslator::esc_html_e('Padding'); ?></label>
					<input type="text" name="<?php TLThemeHelper::getFormName('menu_box_item_dimension_padding'); ?>" id="<?php TLThemeHelper::getFormName('menu_box_item_dimension_padding'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_box_item_dimension_padding']); ?>" maxlength="3"/>
				</div>	
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Position of icon'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Position of icon (from top) - in percentage.'); ?></span>
				<div>
					<div id="<?php TLThemeHelper::getFormName('menu_box_item_icon_position'); ?>"></div>
					<input type="text" name="<?php TLThemeHelper::getFormName('menu_box_item_icon_position'); ?>" id="<?php TLThemeHelper::getFormName('menu_box_item_icon_position'); ?>" class="to-slider-range" readonly/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Position of headers'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Position of headers (from top) - in percentage.'); ?></span>
				<div>
					<div id="<?php TLThemeHelper::getFormName('menu_box_item_header_position'); ?>"></div>
					<input type="text" name="<?php TLThemeHelper::getFormName('menu_box_item_header_position'); ?>" id="<?php TLThemeHelper::getFormName('menu_box_item_header_position'); ?>" class="to-slider-range" readonly/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Position of navigation arrows'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Position of navigation arrows (from top) - in percentage.'); ?></span>
				<div>
					<div id="<?php TLThemeHelper::getFormName('menu_box_item_navigation_arrow_position'); ?>"></div>
					<input type="text" name="<?php TLThemeHelper::getFormName('menu_box_item_navigation_arrow_position'); ?>" id="<?php TLThemeHelper::getFormName('menu_box_item_navigation_arrow_position'); ?>" class="to-slider-range" readonly/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Autoplay'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Autoplay.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('menu_box_autoplay'); ?>" id="<?php TLThemeHelper::getFormName('menu_box_autoplay_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['menu_box_autoplay'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('menu_box_autoplay_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('menu_box_autoplay'); ?>" id="<?php TLThemeHelper::getFormName('menu_box_autoplay_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['menu_box_autoplay'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('menu_box_autoplay_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Circular'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Determines whether the carousel should be circular.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('menu_box_circular'); ?>" id="<?php TLThemeHelper::getFormName('menu_box_circular_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['menu_box_circular'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('menu_box_circular_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('menu_box_circular'); ?>" id="<?php TLThemeHelper::getFormName('menu_box_circular_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['menu_box_circular'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('menu_box_circular_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Infinite'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Determines whether the carousel should be infinite.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('menu_box_infinite'); ?>" id="<?php TLThemeHelper::getFormName('menu_box_infinite_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['menu_box_infinite'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('menu_box_infinite_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('menu_box_infinite'); ?>" id="<?php TLThemeHelper::getFormName('menu_box_infinite_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['menu_box_infinite'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('menu_box_infinite_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>	
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Direction'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('The direction to scroll the carousel, determines whether the carousel scrolls and - when the carousel scrolls automatically - in what direction.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('menu_box_direction'); ?>" id="<?php TLThemeHelper::getFormName('menu_box_direction'); ?>">
<?php
						foreach($this->data['dictionary']['carouFredSelDirection'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['menu_box_direction'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Number of visible items'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('The number of visible items.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('menu_box_item_visible'); ?>" id="<?php TLThemeHelper::getFormName('menu_box_item_visible'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_box_item_visible']); ?>" maxlength="3"/>
				</div>					
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Start item number'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Start item number.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('menu_box_item_start'); ?>" id="<?php TLThemeHelper::getFormName('menu_box_item_start'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_box_item_start']); ?>" maxlength="3"/>
				</div>					
			</li>	
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Number of sroll items'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('The number of items to scroll.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('menu_box_scroll_item'); ?>" id="<?php TLThemeHelper::getFormName('menu_box_scroll_item'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_box_scroll_item']); ?>" maxlength="3"/>
				</div>					
			</li>	
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Effect'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Indicates which effect to use for the transition.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('menu_box_scroll_effect'); ?>" id="<?php TLThemeHelper::getFormName('menu_box_scroll_effect'); ?>">
<?php
						foreach($this->data['dictionary']['carouFredSelEffect'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['menu_box_scroll_effect'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Easing'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Indicates which easing function to use for the transition.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('menu_box_scroll_easing'); ?>" id="<?php TLThemeHelper::getFormName('menu_box_scroll_easing'); ?>">
<?php
						foreach($this->data['dictionary']['easingType'] as $value)
							echo '<option value="'.TLThemeHelper::esc_attr($value).'" '.(TLThemeHelper::selectedIf($this->data['option']['menu_box_scroll_easing'],$value,false)).'>'.TLThemeHelper::esc_html($value).'</option>';
?>
					</select>
				</div>
			</li>	
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Duration'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Determines the duration of the transition in milliseconds.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('menu_box_scroll_duration'); ?>" id="<?php TLThemeHelper::getFormName('menu_box_scroll_duration'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_box_scroll_duration']); ?>" maxlength="5"/>
				</div>					
			</li>
		</ul>

		<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				var optionElement=$('.to').themeOptionElement();
				optionElement.createSlider('#<?php TLThemeHelper::getFormName('menu_box_item_icon_position'); ?>',0,100,<?php echo (int)$this->data['option']['menu_box_item_icon_position']; ?>);
				optionElement.createSlider('#<?php TLThemeHelper::getFormName('menu_box_item_header_position'); ?>',0,100,<?php echo (int)$this->data['option']['menu_box_item_header_position']; ?>);
				optionElement.createSlider('#<?php TLThemeHelper::getFormName('menu_box_item_navigation_arrow_position'); ?>',0,100,<?php echo (int)$this->data['option']['menu_box_item_navigation_arrow_position']; ?>);
			});
		</script>