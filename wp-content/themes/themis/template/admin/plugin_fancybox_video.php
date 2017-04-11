		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Padding'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Space between FancyBox wrapper and content (in px).'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('fancybox_video_padding'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_video_padding'); ?>" value="<?php echo  TLThemeHelper::esc_attr($this->data['option']['fancybox_video_padding']); ?>" maxlength="3"/>
				</div>					
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Margin'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Space between viewport and FancyBox wrapper (in px).'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('fancybox_video_margin'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_video_margin'); ?>" value="<?php echo  TLThemeHelper::esc_attr($this->data['option']['fancybox_video_margin']); ?>" maxlength="3"/>
				</div>					
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Minimum width'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Minimum width fancyBox should be allowed to resize to	(in px).'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('fancybox_video_min_width'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_video_min_width'); ?>" value="<?php echo  TLThemeHelper::esc_attr($this->data['option']['fancybox_video_min_width']); ?>" maxlength="4"/>
				</div>					
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Minimum height'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Minimum height fancyBox should be allowed to resize to (in px).'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('fancybox_video_min_height'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_video_min_height'); ?>" value="<?php echo  TLThemeHelper::esc_attr($this->data['option']['fancybox_video_min_height']); ?>" maxlength="4"/>
				</div>					
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Maximum width'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Maximum width fancyBox should be allowed to resize to	(in px).'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('fancybox_video_max_width'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_video_max_width'); ?>" value="<?php echo  TLThemeHelper::esc_attr($this->data['option']['fancybox_video_max_width']); ?>" maxlength="4"/>
				</div>					
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Maximum height'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Maximum height fancyBox should be allowed to resize to (in px).'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('fancybox_video_max_height'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_video_max_height'); ?>" value="<?php echo  TLThemeHelper::esc_attr($this->data['option']['fancybox_video_max_height']); ?>" maxlength="4"/>
				</div>					
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Auto resize'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('When enabled, the content will be resized after window resize event.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_video_autoresize'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_video_autoresize_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_video_autoresize'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_video_autoresize_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_video_autoresize'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_video_autoresize_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_video_autoresize'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_video_autoresize_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Auto center'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('When enabled, the content will always be centered.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_video_autocenter'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_video_autocenter_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_video_autocenter'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_video_autocenter_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_video_autocenter'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_video_autocenter_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_video_autocenter'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_video_autocenter_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Fit to view'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('When enabled, fancyBox is resized to fit inside viewport before opening.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_video_fittoview'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_video_fittoview_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_video_fittoview'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_video_fittoview_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_video_fittoview'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_video_fittoview_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_video_fittoview'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_video_fittoview_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>			
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Close button'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('When enabled, close button will be displayed.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_video_close_button'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_video_close_button_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_video_close_button'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_video_close_button_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('fancybox_video_close_button'); ?>" id="<?php TLThemeHelper::getFormName('fancybox_video_close_button_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['fancybox_video_close_button'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('fancybox_video_close_button_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>
			</li>	
		</ul>