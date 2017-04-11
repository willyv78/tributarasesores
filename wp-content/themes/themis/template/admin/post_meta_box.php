		<?php echo $this->data['nonce']; ?>

		<div class="to">
			<ul class="to-form-field-list">
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Sidebar'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Select sidebar and sidebar location.'); ?></span>
					<div class="to-clear-fix">
						<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Sidebar:'); ?></span>
						<select name="<?php TLThemeHelper::getFormName('post_content_widget_area'); ?>" id="<?php TLThemeHelper::getFormName('post_content_widget_area'); ?>">
<?php
							foreach($this->data['dictionary']['widgetArea'] as $index=>$value)
								echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['post_content_widget_area'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
						</select>
					</div>
					<div class="to-clear-fix">
						<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Location:'); ?></span>
						<select name="<?php TLThemeHelper::getFormName('post_content_widget_area_location'); ?>" id="<?php TLThemeHelper::getFormName('post_content_widget_area_location'); ?>">
<?php
							foreach($this->data['dictionary']['widgetAreaLocation'] as $index=>$value)
								echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['post_content_widget_area_location'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
						</select>
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Widget area in footer'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Select widget area in footer.'); ?></span>
					<div class="to-clear-fix">
						<select name="<?php TLThemeHelper::getFormName('post_footer_widget_area'); ?>" id="<?php TLThemeHelper::getFormName('post_footer_widget_area'); ?>">
<?php
							foreach($this->data['dictionary']['widgetArea'] as $index=>$value)
								echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['post_footer_widget_area'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
						</select>
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Top menu'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Select top menu.'); ?></span>
					<div class="to-clear-fix">
						<select name="<?php TLThemeHelper::getFormName('post_menu_top'); ?>" id="<?php TLThemeHelper::getFormName('post_menu_top'); ?>">
<?php
						foreach($this->data['dictionary']['menu'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['post_menu_top'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
						</select>
					</div>
				</li>	
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Show post header'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Show post header.'); ?></span>
					<div class="to-radio-button">
						<input type="radio" name="<?php TLThemeHelper::getFormName('post_header_visible'); ?>" id="<?php TLThemeHelper::getFormName('post_header_visible_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['post_header_visible'],1); ?>/>
						<label for="<?php TLThemeHelper::getFormName('post_header_visible_1'); ?>"><?php TLThemeTranslator::esc_html_e('Yes'); ?></label>
						<input type="radio" name="<?php TLThemeHelper::getFormName('post_header_visible'); ?>" id="<?php TLThemeHelper::getFormName('post_header_visible_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['post_header_visible'],0); ?>/>
						<label for="<?php TLThemeHelper::getFormName('post_header_visible_0'); ?>"><?php TLThemeTranslator::esc_html_e('No'); ?></label>
						<input type="radio" name="<?php TLThemeHelper::getFormName('post_header_visible'); ?>" id="<?php TLThemeHelper::getFormName('post_header_visible_2'); ?>" value="-1" <?php TLThemeHelper::checkedIf($this->data['option']['post_header_visible'],-1); ?>/>
						<label for="<?php TLThemeHelper::getFormName('post_header_visible_2'); ?>"><?php TLThemeTranslator::esc_html_e('Use global settings'); ?></label>
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Show categories'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Show categories.'); ?><br/></span>
					<div class="to-radio-button">
						<input type="radio" name="<?php TLThemeHelper::getFormName('post_category_visible'); ?>" id="<?php TLThemeHelper::getFormName('post_category_visible_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['post_category_visible'],1); ?>/>
						<label for="<?php TLThemeHelper::getFormName('post_category_visible_1'); ?>"><?php TLThemeTranslator::esc_html_e('Yes'); ?></label>
						<input type="radio" name="<?php TLThemeHelper::getFormName('post_category_visible'); ?>" id="<?php TLThemeHelper::getFormName('post_category_visible_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['post_category_visible'],0); ?>/>
						<label for="<?php TLThemeHelper::getFormName('post_category_visible_0'); ?>"><?php TLThemeTranslator::esc_html_e('No'); ?></label>
						<input type="radio" name="<?php TLThemeHelper::getFormName('post_category_visible'); ?>" id="<?php TLThemeHelper::getFormName('post_category_visible_2'); ?>" value="-1" <?php TLThemeHelper::checkedIf($this->data['option']['post_category_visible'],-1); ?>/>
						<label for="<?php TLThemeHelper::getFormName('post_category_visible_2'); ?>"><?php TLThemeTranslator::esc_html_e('Use global settings'); ?></label>
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Show author'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Show author.'); ?><br/></span>
					<div class="to-radio-button">
						<input type="radio" name="<?php TLThemeHelper::getFormName('post_author_visible'); ?>" id="<?php TLThemeHelper::getFormName('post_author_visible_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['post_author_visible'],1); ?>/>
						<label for="<?php TLThemeHelper::getFormName('post_author_visible_1'); ?>"><?php TLThemeTranslator::esc_html_e('Yes'); ?></label>
						<input type="radio" name="<?php TLThemeHelper::getFormName('post_author_visible'); ?>" id="<?php TLThemeHelper::getFormName('post_author_visible_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['post_author_visible'],0); ?>/>
						<label for="<?php TLThemeHelper::getFormName('post_author_visible_0'); ?>"><?php TLThemeTranslator::esc_html_e('No'); ?></label>
						<input type="radio" name="<?php TLThemeHelper::getFormName('post_author_visible'); ?>" id="<?php TLThemeHelper::getFormName('post_author_visible_2'); ?>" value="-1" <?php TLThemeHelper::checkedIf($this->data['option']['post_author_visible'],-1); ?>/>
						<label for="<?php TLThemeHelper::getFormName('post_author_visible_2'); ?>"><?php TLThemeTranslator::esc_html_e('Use global settings'); ?></label>
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Show tags'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Show tags.'); ?><br/></span>
					<div class="to-radio-button">
						<input type="radio" name="<?php TLThemeHelper::getFormName('post_tag_visible'); ?>" id="<?php TLThemeHelper::getFormName('post_tag_visible_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['post_tag_visible'],1); ?>/>
						<label for="<?php TLThemeHelper::getFormName('post_tag_visible_1'); ?>"><?php TLThemeTranslator::esc_html_e('Yes'); ?></label>
						<input type="radio" name="<?php TLThemeHelper::getFormName('post_tag_visible'); ?>" id="<?php TLThemeHelper::getFormName('post_tag_visible_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['post_tag_visible'],0); ?>/>
						<label for="<?php TLThemeHelper::getFormName('post_tag_visible_0'); ?>"><?php TLThemeTranslator::esc_html_e('No'); ?></label>
						<input type="radio" name="<?php TLThemeHelper::getFormName('post_tag_visible'); ?>" id="<?php TLThemeHelper::getFormName('post_tag_visible_2'); ?>" value="-1" <?php TLThemeHelper::checkedIf($this->data['option']['post_tag_visible'],-1); ?>/>
						<label for="<?php TLThemeHelper::getFormName('post_tag_visible_2'); ?>"><?php TLThemeTranslator::esc_html_e('Use global settings'); ?></label>
					</div>
				</li>
				<li>
					<h5><?php TLThemeTranslator::esc_html_e('Show comments count'); ?></h5>
					<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Show comments count.'); ?><br/></span>
					<div class="to-radio-button">
						<input type="radio" name="<?php TLThemeHelper::getFormName('post_comment_count_visible'); ?>" id="<?php TLThemeHelper::getFormName('post_comment_count_visible_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['post_comment_count_visible'],1); ?>/>
						<label for="<?php TLThemeHelper::getFormName('post_comment_count_visible_1'); ?>"><?php TLThemeTranslator::esc_html_e('Yes'); ?></label>
						<input type="radio" name="<?php TLThemeHelper::getFormName('post_comment_count_visible'); ?>" id="<?php TLThemeHelper::getFormName('post_comment_count_visible_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['post_comment_count_visible'],0); ?>/>
						<label for="<?php TLThemeHelper::getFormName('post_comment_count_visible_0'); ?>"><?php TLThemeTranslator::esc_html_e('No'); ?></label>
						<input type="radio" name="<?php TLThemeHelper::getFormName('post_comment_count_visible'); ?>" id="<?php TLThemeHelper::getFormName('post_comment_count_visible_2'); ?>" value="-1" <?php TLThemeHelper::checkedIf($this->data['option']['post_comment_count_visible'],-1); ?>/>
						<label for="<?php TLThemeHelper::getFormName('post_comment_count_visible_2'); ?>"><?php TLThemeTranslator::esc_html_e('Use global settings'); ?></label>
					</div>
				</li>

			</ul>
		</div>

		<script type="text/javascript">
			jQuery(document).ready(function($)
			{	
				$('.to').themeOptionElement({init:true});
			});
		</script>