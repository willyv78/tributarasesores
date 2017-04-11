		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Limit number of letters in image excerpt'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Limit number of letters in image excerpt.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('gallery_excerpt_limit'); ?>" id="<?php TLThemeHelper::getFormName('gallery_excerpt_limit'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['gallery_excerpt_limit']); ?>" maxlength="3"/>
				</div>					
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Characters after cut excerpt'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Characters after cut excerpt.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('gallery_excerpt_limit_character'); ?>" id="<?php TLThemeHelper::getFormName('gallery_excerpt_limit_character'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['gallery_excerpt_limit_character']); ?>" maxlength="10"/>
				</div>					
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Show filter menu by default'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Show filter menu by default.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('gallery_filter_menu_show_default'); ?>" id="<?php TLThemeHelper::getFormName('gallery_filter_menu_show_default_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['gallery_filter_menu_show_default'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('gallery_filter_menu_show_default_1'); ?>"><?php TLThemeTranslator::esc_html_e('Yes'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('gallery_filter_menu_show_default'); ?>" id="<?php TLThemeHelper::getFormName('gallery_filter_menu_show_default_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['gallery_filter_menu_show_default'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('gallery_filter_menu_show_default_0'); ?>"><?php TLThemeTranslator::esc_html_e('No'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Show info box by default'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Show info box by defaultt.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('gallery_info_box_show_default'); ?>" id="<?php TLThemeHelper::getFormName('gallery_info_box_show_default_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['gallery_info_box_show_default'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('gallery_info_box_show_default_1'); ?>"><?php TLThemeTranslator::esc_html_e('Yes'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('gallery_info_box_show_default'); ?>" id="<?php TLThemeHelper::getFormName('gallery_info_box_show_default_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['gallery_info_box_show_default'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('gallery_info_box_show_default_0'); ?>"><?php TLThemeTranslator::esc_html_e('No'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Deafult gallery layout'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Deafult gallery layout.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('gallery_layout_default'); ?>" id="<?php TLThemeHelper::getFormName('gallery_layout_default'); ?>">
<?php
						foreach($this->data['dictionary']['galleryLayout'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['gallery_layout_default'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>	
		</ul>