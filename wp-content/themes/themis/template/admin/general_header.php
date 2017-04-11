		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Logo'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enter: URL of site, URL of image.'); ?><br/></span>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('URL of site'); ?></span>
					<label for="<?php TLThemeHelper::getFormName('header_logo_link_url'); ?>" class="to-infield"><?php TLThemeTranslator::esc_html_e('URL of site'); ?></label>
					<input type="text" name="<?php TLThemeHelper::getFormName('header_logo_link_url'); ?>" id="<?php TLThemeHelper::getFormName('header_logo_link_url'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['header_logo_link_url']); ?>" />
				</div>
				<div class="to-clear-fix">
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('URL of image'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('header_logo_image_url'); ?>" id="<?php TLThemeHelper::getFormName('header_logo_image_url'); ?>" class="to-float-left" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['header_logo_image_url']); ?>" />
					<input type="button" name="<?php TLThemeHelper::getFormName('header_logo_image_url_browse'); ?>" id="<?php TLThemeHelper::getFormName('header_logo_image_url_browse'); ?>" class="to-button-browse to-button" value="<?php TLThemeTranslator::esc_attr_e('Browse'); ?>"/>
				</div>
				<div class="to-clear-fix">
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Alernate text'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('header_logo_alternate_text'); ?>" id="<?php TLThemeHelper::getFormName('header_logo_alternate_text'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['header_logo_alternate_text']); ?>" />
				</div>				
				<div class="to-clear-fix">
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Top margin (in px)'); ?></span>
					<label for="<?php TLThemeHelper::getFormName('header_logo_margin_top'); ?>" class="to-infield"><?php TLThemeTranslator::esc_html_e('Top margin (in px)'); ?></label>
					<input type="text" name="<?php TLThemeHelper::getFormName('header_logo_margin_top'); ?>" id="<?php TLThemeHelper::getFormName('header_logo_margin_top'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['header_logo_margin_top']); ?>" maxlength="3"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Cite'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Cite.'); ?></span>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('First line'); ?></span>
					<label for="<?php TLThemeHelper::getFormName('header_cite_first_line'); ?>" class="to-infield"><?php TLThemeTranslator::esc_html_e('First paragraph'); ?></label>
					<input type="text" name="<?php TLThemeHelper::getFormName('header_cite_first_line'); ?>" id="<?php TLThemeHelper::getFormName('header_cite_first_line'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['header_cite_first_line']); ?>" />
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Second line'); ?></span>
					<label for="<?php TLThemeHelper::getFormName('header_cite_second_line'); ?>" class="to-infield"><?php TLThemeTranslator::esc_html_e('Second paragraph'); ?></label>
					<input type="text" name="<?php TLThemeHelper::getFormName('header_cite_second_line'); ?>" id="<?php TLThemeHelper::getFormName('header_cite_second_line'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['header_cite_second_line']); ?>" />
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Top margin (in px)'); ?></span>
					<label for="<?php TLThemeHelper::getFormName('header_cite_margin_top'); ?>" class="to-infield"><?php TLThemeTranslator::esc_html_e('Top margin (in px)'); ?></label>
					<input type="text" name="<?php TLThemeHelper::getFormName('header_cite_margin_top'); ?>" id="<?php TLThemeHelper::getFormName('header_cite_margin_top'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['header_cite_margin_top']); ?>" maxlength="3"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Phone number'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Show phone number.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('header_company_phone_number_visible'); ?>" id="<?php TLThemeHelper::getFormName('header_company_phone_number_visible_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['header_company_phone_number_visible'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('header_company_phone_number_visible_1'); ?>"><?php TLThemeTranslator::esc_html_e('Yes'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('header_company_phone_number_visible'); ?>" id="<?php TLThemeHelper::getFormName('header_company_phone_number_visible_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['header_company_phone_number_visible'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('header_company_phone_number_visible_0'); ?>"><?php TLThemeTranslator::esc_html_e('No'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Phone number top margin'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Phone number top margin (in px).'); ?></span>			
				<div>
					<label for="<?php TLThemeHelper::getFormName('header_company_phone_number_margin_top'); ?>" class="to-infield"><?php TLThemeTranslator::esc_html_e('Top margin (in px)'); ?></label>
					<input type="text" name="<?php TLThemeHelper::getFormName('header_company_phone_number_margin_top'); ?>" id="<?php TLThemeHelper::getFormName('header_company_phone_number_margin_top'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['header_company_phone_number_margin_top']); ?>" maxlength="3"/>
				</div>
			</li>
		</ul>

		<script type="text/javascript">
			jQuery(document).ready(function($) 
			{
				var optionElement=$('.to').themeOptionElement();
				optionElement.bindBrowseMedia('#<?php TLThemeHelper::getFormName('header_logo_image_url_browse'); ?>');
			});
		</script>