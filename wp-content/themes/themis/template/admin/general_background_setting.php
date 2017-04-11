		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Background color'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Background color (in HEX).'); ?></span>
				<div>
					<input type="text" class="to-color-picker" name="<?php TLThemeHelper::getFormName('background_color'); ?>" id="<?php TLThemeHelper::getFormName('background_color'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['background_color']); ?>" maxlength="6"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Background image'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Select image for background.'); ?><br/></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('background_image'); ?>" id="<?php TLThemeHelper::getFormName('background_image'); ?>" class="to-float-left" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['background_image']); ?>" />
					<input type="button" name="<?php TLThemeHelper::getFormName('background_image_browse'); ?>" id="<?php TLThemeHelper::getFormName('background_image_browse'); ?>" class="to-button-browse to-button" value="<?php TLThemeTranslator::esc_attr_e('Browse'); ?>"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Background postion'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Set image background position. Eg. 0px 0px.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('background_position'); ?>" id="<?php TLThemeHelper::getFormName('background_position'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['background_position']); ?>" maxlength="100"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Background repeat'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Background repeat.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('background_repeat'); ?>" id="<?php TLThemeHelper::getFormName('background_repeat'); ?>">
<?php
						foreach($this->data['dictionary']['backgroundRepeat'] as $index=>$value)
							echo '<option value="'. TLThemeHelper::esc_attr($index).'"'.(TLThemeHelper::selectedIf($this->data['option']['background_repeat'],$index,false)).'>'. TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>

		</ul>

		<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				var optionElement=$('.to').themeOptionElement();
				optionElement.bindBrowseMedia('#<?php TLThemeHelper::getFormName('background_image_browse'); ?>');
			});
		</script>