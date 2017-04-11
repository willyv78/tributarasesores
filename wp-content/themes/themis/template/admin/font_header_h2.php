		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Google Font'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enter name of Google Font and select it from list.'); ?></span>
				<div>
					<input type="text" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['font_h2_family_google']); ?>" id="<?php TLThemeHelper::getFormName('font_h2_family_google'); ?>" name="<?php TLThemeHelper::getFormName('font_h2_family_google'); ?>" maxlength="255"/>
				</div>	
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('System font'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enter name of system font.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('font_h2_family_system'); ?>" id="<?php TLThemeHelper::getFormName('font_h2_family_system'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['font_h2_family_system']); ?>" maxlength="255"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Font color'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Font color (in HEX).'); ?></span>
				<div>
					<input type="text" class="to-color-picker" name="<?php TLThemeHelper::getFormName('font_h2_color'); ?>" id="<?php TLThemeHelper::getFormName('font_h2_color'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['font_h2_color']); ?>" maxlength="6"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Font size'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Font size (in px).'); ?></span>
				<div>
					<div id="<?php TLThemeHelper::getFormName('font_h2_size_slider'); ?>"></div>
					<input type="text" name="<?php TLThemeHelper::getFormName('font_h2_size'); ?>" id="<?php TLThemeHelper::getFormName('font_h2_size'); ?>" class="to-slider-range" readonly/>
					<label class="to-label-1 to-clear-fix"><?php TLThemeTranslator::esc_html_e('For page width greater/equal than 990px.'); ?></label>
				</div>
				<div>
					<div id="<?php TLThemeHelper::getFormName('font_h2_size_2_slider'); ?>"></div>
					<input type="text" name="<?php TLThemeHelper::getFormName('font_h2_size_2'); ?>" id="<?php TLThemeHelper::getFormName('font_h2_size_2'); ?>" class="to-slider-range" readonly/>
					<label class="to-label-1 to-clear-fix"><?php TLThemeTranslator::esc_html_e('For page width between 768px and 989px.'); ?></label>
				</div>
				<div>
					<div id="<?php TLThemeHelper::getFormName('font_h2_size_3_slider'); ?>"></div>
					<input type="text" name="<?php TLThemeHelper::getFormName('font_h2_size_3'); ?>" id="<?php TLThemeHelper::getFormName('font_h2_size_3'); ?>" class="to-slider-range" readonly/>
					<label class="to-label-1 to-clear-fix"><?php TLThemeTranslator::esc_html_e('For page width between 480px and 767px.'); ?></label>
				</div>
				<div>
					<div id="<?php TLThemeHelper::getFormName('font_h2_size_4_slider'); ?>"></div>
					<input type="text" name="<?php TLThemeHelper::getFormName('font_h2_size_4'); ?>" id="<?php TLThemeHelper::getFormName('font_h2_size_4'); ?>" class="to-slider-range" readonly/>
					<label class="to-label-1 to-clear-fix"><?php TLThemeTranslator::esc_html_e('For page width less/equal than 479px.'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Font style'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Font style.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('font_h2_style'); ?>" id="<?php TLThemeHelper::getFormName('font_h2_style'); ?>">
<?php
						foreach($this->data['dictionary']['fontStyle'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['font_h2_style'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Font weight'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Font weight.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('font_h2_weight'); ?>" id="<?php TLThemeHelper::getFormName('font_h2_weight'); ?>">
<?php
						foreach($this->data['dictionary']['fontWeight'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['font_h2_weight'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
		</ul>

		<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				var optionElement=$('.to').themeOptionElement();
				optionElement.createGoogleFontAutocomplete('#<?php TLThemeHelper::getFormName('font_h2_family_google'); ?>');
				optionElement.createSlider('#<?php TLThemeHelper::getFormName('font_h2_size_slider'); ?>',1,100,<?php echo (int)$this->data['option']['font_h2_size']; ?>);
				optionElement.createSlider('#<?php TLThemeHelper::getFormName('font_h2_size_2_slider'); ?>',1,100,<?php echo (int)$this->data['option']['font_h2_size_2']; ?>);
				optionElement.createSlider('#<?php TLThemeHelper::getFormName('font_h2_size_3_slider'); ?>',1,100,<?php echo (int)$this->data['option']['font_h2_size_3']; ?>);
				optionElement.createSlider('#<?php TLThemeHelper::getFormName('font_h2_size_4_slider'); ?>',1,100,<?php echo (int)$this->data['option']['font_h2_size_4']; ?>);
			});
		</script>