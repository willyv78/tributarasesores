		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Notifications'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Texts used in notifications.'); ?></span>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('"Closing in ... seconds"'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_notification_closing_in_seconds'); ?>" id="<?php TLThemeHelper::getFormName('text_notification_closing_in_seconds'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_notification_closing_in_seconds']); ?>"/>
				</div>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('"Close"'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_notification_close'); ?>" id="<?php TLThemeHelper::getFormName('text_notification_close'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_notification_close']); ?>"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Header'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Texts used in page header.'); ?></span>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('"Phone"'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_header_phone'); ?>" id="<?php TLThemeHelper::getFormName('text_header_phone'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_header_phone']); ?>"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Team'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Texts used in team.'); ?></span>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('"Learn more" link label'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_team_learn_more_link'); ?>" id="<?php TLThemeHelper::getFormName('text_team_learn_more_link'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_team_learn_more_link']); ?>"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Gallery'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Texts used in gallery.'); ?></span>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('"All items" button label'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_gallery_all_items'); ?>" id="<?php TLThemeHelper::getFormName('text_gallery_all_items'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_gallery_all_items']); ?>"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Business hours'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Texts used in business hours.'); ?></span>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('"On [day name]" text'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_business_hour_on'); ?>" id="<?php TLThemeHelper::getFormName('text_business_hour_on'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_business_hour_on']); ?>"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Mobile menu'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Texts used in mobile menu.'); ?></span>
				<div>
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('"[SELECT]" label'); ?></span>
					<input type="text" name="<?php TLThemeHelper::getFormName('text_menu_mobile_select'); ?>" id="<?php TLThemeHelper::getFormName('text_menu_mobile_select'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_menu_mobile_select']); ?>"/>
				</div>
			</li>
		</ul>