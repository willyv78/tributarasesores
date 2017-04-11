		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Images hover effect'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Images hover effect.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('image_hover_effect'); ?>" id="<?php TLThemeHelper::getFormName('image_hover_effect'); ?>">
<?php
						foreach($this->data['dictionary']['imageHoverEffect'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['image_hover_effect'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
		</ul>