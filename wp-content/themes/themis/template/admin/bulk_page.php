		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Sidebar'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Select sidebar and sidebar location.'); ?></span>
				<div class="to-clear-fix">
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Sidebar:'); ?></span>
					<select name="<?php TLThemeHelper::getFormName('bulk_page_content_widget_area'); ?>" id="<?php TLThemeHelper::getFormName('bulk_page_content_widget_area'); ?>">
<?php
						foreach($this->data['dictionary']['widgetArea-2'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['bulk_page_content_widget_area'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
				<div class="to-clear-fix">
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Location:'); ?></span>
					<select name="<?php TLThemeHelper::getFormName('bulk_page_content_widget_area_location'); ?>" id="<?php TLThemeHelper::getFormName('bulk_page_content_widget_area_location'); ?>">
<?php
						foreach($this->data['dictionary']['widgetAreaLocation-2'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['bulk_page_content_widget_area_location'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Widget area in footer'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Select widget area in footer.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('bulk_page_footer_widget_area'); ?>" id="<?php TLThemeHelper::getFormName('bulk_page_footer_widget_area'); ?>">
<?php
						foreach($this->data['dictionary']['widgetArea-2'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['bulk_page_footer_widget_area'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Top menu'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Select top menu.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('bulk_page_menu_top'); ?>" id="<?php TLThemeHelper::getFormName('bulk_page_menu_top'); ?>">
<?php
						foreach($this->data['dictionary']['menu-2'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['bulk_page_menu_top'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>			
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Show page header'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Show page header.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('bulk_page_header_visible'); ?>" id="<?php TLThemeHelper::getFormName('bulk_page_header_visible_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['bulk_page_header_visible'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('bulk_page_header_visible_1'); ?>"><?php TLThemeTranslator::esc_html_e('Yes'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('bulk_page_header_visible'); ?>" id="<?php TLThemeHelper::getFormName('bulk_page_header_visible_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['bulk_page_header_visible'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('bulk_page_header_visible_0'); ?>"><?php TLThemeTranslator::esc_html_e('No'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('bulk_page_header_visible'); ?>" id="<?php TLThemeHelper::getFormName('bulk_page_header_visible_2'); ?>" value="-1" <?php TLThemeHelper::checkedIf($this->data['option']['bulk_page_header_visible'],-1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('bulk_page_header_visible_2'); ?>"><?php TLThemeTranslator::esc_html_e('Use global settings'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('bulk_page_header_visible'); ?>" id="<?php TLThemeHelper::getFormName('bulk_page_header_visible_3'); ?>" value="-10" <?php TLThemeHelper::checkedIf($this->data['option']['bulk_page_header_visible'],-10); ?>/>
					<label for="<?php TLThemeHelper::getFormName('bulk_page_header_visible_3'); ?>"><?php TLThemeTranslator::esc_html_e('Left unchanged'); ?></label>
				</div>
			</li>

		</ul>

		<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				var optionElement=$('.to').themeOptionElement();
				optionElement.bindBrowseMedia('#<?php TLThemeHelper::getFormName('bulk_page_menu_box_image_custom_browse'); ?>');
			});
		</script>