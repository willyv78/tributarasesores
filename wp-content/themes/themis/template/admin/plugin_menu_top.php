		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Menu width'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Width of top level elements in menu - in px.'); ?></span>
				<div>
					<input class="to-float-left" type="text" name="<?php TLThemeHelper::getFormName('menu_top_item_dimension_width'); ?>" id="<?php TLThemeHelper::getFormName('menu_top_item_dimension_width'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_top_item_dimension_width']); ?>" maxlength="3"/>
					<label class="to-label-1 to-clear-fix"><?php TLThemeTranslator::esc_html_e('For page width greater/equal than 990px.'); ?></label>
				</div>	
				<div>
					<input class="to-float-left" type="text" name="<?php TLThemeHelper::getFormName('menu_top_item_dimension_width_2'); ?>" id="<?php TLThemeHelper::getFormName('menu_top_item_dimension_width_2'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_top_item_dimension_width_2']); ?>" maxlength="3"/>
					<label class="to-label-1 to-clear-fix"><?php TLThemeTranslator::esc_html_e('For page width between 768px and 989px.'); ?></label>
				</div>	
				<div>
					<input class="to-float-left" type="text" name="<?php TLThemeHelper::getFormName('menu_top_item_dimension_width_3'); ?>" id="<?php TLThemeHelper::getFormName('menu_top_item_dimension_width_3'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_top_item_dimension_width_3']); ?>" maxlength="3"/>
					<label class="to-label-1 to-clear-fix"><?php TLThemeTranslator::esc_html_e('For page width between 480px and 767px.'); ?></label>
				</div>	
				<div>
					<input class="to-float-left" type="text" name="<?php TLThemeHelper::getFormName('menu_top_item_dimension_width_4'); ?>" id="<?php TLThemeHelper::getFormName('menu_top_item_dimension_width_4'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_top_item_dimension_width_4']); ?>" maxlength="3"/>
					<label class="to-label-1 to-clear-fix"><?php TLThemeTranslator::esc_html_e('For page width less/equal than 479px.'); ?></label>
				</div>	
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Submenu width'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Width of submenu - in px.'); ?></span>
				<div>
					<input class="to-float-left" type="text" name="<?php TLThemeHelper::getFormName('menu_top_item_dimension_submenu_width'); ?>" id="<?php TLThemeHelper::getFormName('menu_top_item_dimension_submenu_width'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_top_item_dimension_submenu_width']); ?>" maxlength="3"/>
					<label class="to-label-1 to-clear-fix"><?php TLThemeTranslator::esc_html_e('For page width greater/equal than 990px.'); ?></label>
				</div>	
				<div>
					<input class="to-float-left" type="text" name="<?php TLThemeHelper::getFormName('menu_top_item_dimension_submenu_width_2'); ?>" id="<?php TLThemeHelper::getFormName('menu_top_item_dimension_submenu_width_2'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_top_item_dimension_submenu_width_2']); ?>" maxlength="3"/>
					<label class="to-label-1 to-clear-fix"><?php TLThemeTranslator::esc_html_e('For page width between 768px and 989px.'); ?></label>
				</div>	
				<div>
					<input class="to-float-left" type="text" name="<?php TLThemeHelper::getFormName('menu_top_item_dimension_submenu_width_3'); ?>" id="<?php TLThemeHelper::getFormName('menu_top_item_dimension_submenu_width_3'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_top_item_dimension_submenu_width_3']); ?>" maxlength="3"/>
					<label class="to-label-1 to-clear-fix"><?php TLThemeTranslator::esc_html_e('For page width between 480px and 767px.'); ?></label>
				</div>	
				<div>
					<input class="to-float-left" type="text" name="<?php TLThemeHelper::getFormName('menu_top_item_dimension_submenu_width_4'); ?>" id="<?php TLThemeHelper::getFormName('menu_top_item_dimension_submenu_width_4'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_top_item_dimension_submenu_width_4']); ?>" maxlength="3"/>
					<label class="to-label-1 to-clear-fix"><?php TLThemeTranslator::esc_html_e('For page width less/equal than 479px.'); ?></label>
				</div>	
			</li>			
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Menu elements margins'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Letf and right margin between top level elements in menu - in px.'); ?></span>
				<div>
					<input class="to-float-left" type="text" name="<?php TLThemeHelper::getFormName('menu_top_item_dimension_padding'); ?>" id="<?php TLThemeHelper::getFormName('menu_top_item_dimension_padding'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_top_item_dimension_padding']); ?>" maxlength="3"/>
					<label class="to-label-1 to-clear-fix"><?php TLThemeTranslator::esc_html_e('For page width greater/equal than 990px.'); ?></label>
				</div>	
				<div>
					<input class="to-float-left" type="text" name="<?php TLThemeHelper::getFormName('menu_top_item_dimension_padding_2'); ?>" id="<?php TLThemeHelper::getFormName('menu_top_item_dimension_padding_2'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_top_item_dimension_padding_2']); ?>" maxlength="3"/>
					<label class="to-label-1 to-clear-fix"><?php TLThemeTranslator::esc_html_e('For page width between 768px and 989px.'); ?></label>
				</div>	
				<div>
					<input class="to-float-left" type="text" name="<?php TLThemeHelper::getFormName('menu_top_item_dimension_padding_3'); ?>" id="<?php TLThemeHelper::getFormName('menu_top_item_dimension_padding_3'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_top_item_dimension_padding_3']); ?>" maxlength="3"/>
					<label class="to-label-1 to-clear-fix"><?php TLThemeTranslator::esc_html_e('For page width between 480px and 767px.'); ?></label>
				</div>	
				<div>
					<input class="to-float-left" type="text" name="<?php TLThemeHelper::getFormName('menu_top_item_dimension_padding_4'); ?>" id="<?php TLThemeHelper::getFormName('menu_top_item_dimension_padding_4'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_top_item_dimension_padding_4']); ?>" maxlength="3"/>
					<label class="to-label-1 to-clear-fix"><?php TLThemeTranslator::esc_html_e('For page width less/equal than 479px.'); ?></label>
				</div>	
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Mobile menu'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Turn on mobile menu when width of the page is lower than:'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('menu_top_mobile_visible_step'); ?>" id="<?php TLThemeHelper::getFormName('menu_top_mobile_visible_step_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['menu_top_mobile_visible_step'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('menu_top_mobile_visible_step_0'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('menu_top_mobile_visible_step'); ?>" id="<?php TLThemeHelper::getFormName('menu_top_mobile_visible_step_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['menu_top_mobile_visible_step'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('menu_top_mobile_visible_step_1'); ?>"><?php TLThemeTranslator::esc_html_e('990px'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('menu_top_mobile_visible_step'); ?>" id="<?php TLThemeHelper::getFormName('menu_top_mobile_visible_step_2'); ?>" value="2" <?php TLThemeHelper::checkedIf($this->data['option']['menu_top_mobile_visible_step'],2); ?>/>
					<label for="<?php TLThemeHelper::getFormName('menu_top_mobile_visible_step_2'); ?>"><?php TLThemeTranslator::esc_html_e('768px'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('menu_top_mobile_visible_step'); ?>" id="<?php TLThemeHelper::getFormName('menu_top_mobile_visible_step_3'); ?>" value="3" <?php TLThemeHelper::checkedIf($this->data['option']['menu_top_mobile_visible_step'],3); ?>/>
					<label for="<?php TLThemeHelper::getFormName('menu_top_mobile_visible_step_3'); ?>"><?php TLThemeTranslator::esc_html_e('480px'); ?></label>
				</div>			
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Sticky menu'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Enable or disable sticky menu.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('menu_top_fixed'); ?>" id="<?php TLThemeHelper::getFormName('menu_top_fixed_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['menu_top_fixed'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('menu_top_fixed_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('menu_top_fixed'); ?>" id="<?php TLThemeHelper::getFormName('menu_top_fixed_2'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['menu_top_fixed'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('menu_top_fixed_2'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>			
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Sticky menu hide'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Hide sticky menu during scrolling.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('menu_top_fixed_scroll_hide'); ?>" id="<?php TLThemeHelper::getFormName('menu_top_fixed_scroll_hide_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['menu_top_fixed_scroll_hide'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('menu_top_fixed_scroll_hide_1'); ?>"><?php TLThemeTranslator::esc_html_e('Enable'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('menu_top_fixed_scroll_hide'); ?>" id="<?php TLThemeHelper::getFormName('menu_top_fixed_scroll_hide_2'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['menu_top_fixed_scroll_hide'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('menu_top_fixed_scroll_hide_2'); ?>"><?php TLThemeTranslator::esc_html_e('Disable'); ?></label>
				</div>			
			</li>			
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Delay'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('The delay in milliseconds that the mouse can remain outside a submenu without it closing.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('menu_top_delay'); ?>" id="<?php TLThemeHelper::getFormName('menu_top_delay'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_top_delay']); ?>" maxlength="5"/>
				</div>					
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Speed'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Speed of the animation.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('menu_top_speed'); ?>" id="<?php TLThemeHelper::getFormName('menu_top_speed'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['menu_top_speed']); ?>" maxlength="5"/>
				</div>					
			</li>
		</ul>