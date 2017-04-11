		<?php echo $this->data['nonce']; ?>

		<div class="to">
			<ul class="to-form-field-list">
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Sidebar'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Select sidebar and sidebar location.'); ?></span>
					<div class="to-clear-fix">
						<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Sidebar:'); ?></span>
						<select name="<?php TLThemeHelper::getFormName('page_content_widget_area'); ?>" id="<?php TLThemeHelper::getFormName('page_content_widget_area'); ?>">
<?php
							foreach($this->data['dictionary']['widgetArea'] as $index=>$value)
								echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['page_content_widget_area'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
						</select>
					</div>
					<div class="to-clear-fix">
						<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Location:'); ?></span>
						<select name="<?php TLThemeHelper::getFormName('page_content_widget_area_location'); ?>" id="<?php TLThemeHelper::getFormName('page_content_widget_area_location'); ?>">
<?php
							foreach($this->data['dictionary']['widgetAreaLocation'] as $index=>$value)
								echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['page_content_widget_area_location'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
						</select>
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Widget area in footer'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Select widget area in footer.'); ?></span>
					<div class="to-clear-fix">
						<select name="<?php TLThemeHelper::getFormName('page_footer_widget_area'); ?>" id="<?php TLThemeHelper::getFormName('page_footer_widget_area'); ?>">
<?php
							foreach($this->data['dictionary']['widgetArea'] as $index=>$value)
								echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['page_footer_widget_area'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
						</select>
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Top menu'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Select top menu.'); ?></span>
					<div class="to-clear-fix">
						<select name="<?php TLThemeHelper::getFormName('page_menu_top'); ?>" id="<?php TLThemeHelper::getFormName('page_menu_top'); ?>">
<?php
						foreach($this->data['dictionary']['menu'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['page_menu_top'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
						</select>
					</div>
				</li>				
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Menu header'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Menu header.'); ?></span>
					<div>
						<input type="text" name="<?php TLThemeHelper::getFormName('page_menu_header'); ?>" id="<?php TLThemeHelper::getFormName('page_menu_header'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['page_menu_header']); ?>" maxlength="255"/>
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Menu subheader'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Menu subheader.'); ?></span>
					<div>
						<input type="text" name="<?php TLThemeHelper::getFormName('page_menu_subheader'); ?>" id="<?php TLThemeHelper::getFormName('page_menu_subheader'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['page_menu_subheader']); ?>" maxlength="255"/>
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Show page header'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Show page header.'); ?></span>
					<div class="to-radio-button">
						<input type="radio" name="<?php TLThemeHelper::getFormName('page_header_visible'); ?>" id="<?php TLThemeHelper::getFormName('page_header_visible_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['page_header_visible'],1); ?>/>
						<label for="<?php TLThemeHelper::getFormName('page_header_visible_1'); ?>"><?php TLThemeTranslator::esc_html_e('Yes'); ?></label>
						<input type="radio" name="<?php TLThemeHelper::getFormName('page_header_visible'); ?>" id="<?php TLThemeHelper::getFormName('page_header_visible_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['page_header_visible'],0); ?>/>
						<label for="<?php TLThemeHelper::getFormName('page_header_visible_0'); ?>"><?php TLThemeTranslator::esc_html_e('No'); ?></label>
						<input type="radio" name="<?php TLThemeHelper::getFormName('page_header_visible'); ?>" id="<?php TLThemeHelper::getFormName('page_header_visible_2'); ?>" value="-1" <?php TLThemeHelper::checkedIf($this->data['option']['page_header_visible'],-1); ?>/>
						<label for="<?php TLThemeHelper::getFormName('page_header_visible_2'); ?>"><?php TLThemeTranslator::esc_html_e('Use global settings'); ?></label>
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Show page in box menu'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Show page in box menu.'); ?></span>
					<div class="to-radio-button">
						<input type="radio" name="<?php TLThemeHelper::getFormName('page_menu_box_visible'); ?>" id="<?php TLThemeHelper::getFormName('page_menu_box_visible_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['page_menu_box_visible'],1); ?>/>
						<label for="<?php TLThemeHelper::getFormName('page_menu_box_visible_1'); ?>"><?php TLThemeTranslator::esc_html_e('Yes'); ?></label>
						<input type="radio" name="<?php TLThemeHelper::getFormName('page_menu_box_visible'); ?>" id="<?php TLThemeHelper::getFormName('page_menu_box_visible_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['page_menu_box_visible'],0); ?>/>
						<label for="<?php TLThemeHelper::getFormName('page_menu_box_visible_0'); ?>"><?php TLThemeTranslator::esc_html_e('No'); ?></label>
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Box menu image'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Box menu image.'); ?></span>
					<div class="to-clear-fix">
						<select name="<?php TLThemeHelper::getFormName('page_menu_box_image_defined'); ?>" id="<?php TLThemeHelper::getFormName('page_menu_box_image_defined'); ?>">
<?php
							foreach($this->data['dictionary']['menuBoxImage'] as $index=>$value)
								echo '<option value="'.TLThemeHelper::esc_attr($index).'"'.(TLThemeHelper::selectedIf($this->data['option']['page_menu_box_image_defined'],$index,false)).'>'. TLThemeHelper::esc_html($value[0]).'</option>';
?>
						</select>
					</div>
					<div>
						<input type="text" name="<?php TLThemeHelper::getFormName('page_menu_box_image_custom'); ?>" id="<?php TLThemeHelper::getFormName('page_menu_box_image_custom'); ?>" class="to-float-left" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['page_menu_box_image_custom']); ?>" />
						<input type="button" name="<?php TLThemeHelper::getFormName('page_menu_box_image_custom_browse'); ?>" id="<?php TLThemeHelper::getFormName('page_menu_box_image_custom_browse'); ?>" class="to-button-browse to-button" value="<?php TLThemeTranslator::esc_attr_e('Browse'); ?>"/>
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Menu icon'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Menu icon.'); ?></span>
					<div class="to-clear-fix">
						<select name="<?php TLThemeHelper::getFormName('page_menu_icon'); ?>" id="<?php TLThemeHelper::getFormName('page_menu_icon'); ?>">
<?php
							foreach($this->data['dictionary']['menuIcon'] as $index=>$value)
								echo '<option value="'.TLThemeHelper::esc_attr($index).'"'.(TLThemeHelper::selectedIf($this->data['option']['page_menu_icon'],$index,false)).'>'. TLThemeHelper::esc_html($value[0]).'</option>';
?>
						</select>
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('URL'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enter URL.'); ?></span>
					<div>
						<input type="text" name="<?php TLThemeHelper::getFormName('page_url'); ?>" id="<?php TLThemeHelper::getFormName('page_url'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['page_url']); ?>" maxlength="255"/>
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Target of a URL'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Target of a URL.'); ?></span>
					<div class="to-clear-fix">
						<select name="<?php TLThemeHelper::getFormName('page_url_window_target'); ?>" id="<?php TLThemeHelper::getFormName('page_url_window_target'); ?>">
<?php
							foreach($this->data['dictionary']['windowTarget'] as $index=>$value)
								echo '<option value="'.TLThemeHelper::esc_attr($index).'"'.(TLThemeHelper::selectedIf($this->data['option']['page_url_window_target'],$index,false)).'>'. TLThemeHelper::esc_html($value[0]).'</option>';
?>
						</select>
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Restrict displaying posts only from selected categories'); ?></h5>
					<span class="to-legend">
						<?php TLThemeTranslator::esc_html_e('Select blog categories from which posts have to be displayed.'); ?><br/>
						<?php TLThemeTranslator::esc_html_e('This option is available only from blog pages.'); ?>
					</span>
					<div class="to-checkbox-button">
<?php
		$i=0;
		foreach($this->data['dictionary']['postCategory'] as $index=>$value)
		{
			$i++;
?>
						<input type="checkbox" name="<?php TLThemeHelper::getFormName('page_post_category[]'); ?>" id="<?php TLThemeHelper::getFormName('page_post_category_'.$i); ?>" value="<?php echo TLThemeHelper::esc_attr($index); ?>" <?php TLThemeHelper::checkedIf($this->data['option']['page_post_category'],$index); ?>/>
						<label for="<?php TLThemeHelper::getFormName('page_post_category_'.$i); ?>"><?php echo TLThemeHelper::esc_html($value); ?></label>
<?php
		}
?>
					</div>
				</li>
				
			</ul>
		</div>

		<script type="text/javascript">
			jQuery(document).ready(function($)
			{	
				var optionElement=$('.to').themeOptionElement({init:true});
				optionElement.bindBrowseMedia('#<?php TLThemeHelper::getFormName('page_menu_box_image_custom_browse'); ?>');
			});
		</script>