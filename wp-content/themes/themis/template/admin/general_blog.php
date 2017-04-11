		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Blog category page'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Get settings for category page from selected page.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('blog_category_setting_post_id'); ?>" id="<?php TLThemeHelper::getFormName('blog_category_setting_post_id'); ?>">
<?php
						foreach($this->data['dictionary']['page'] as $value)
							echo '<option value="'.TLThemeHelper::esc_attr($value->ID).'" '.(TLThemeHelper::selectedIf($this->data['option']['blog_category_setting_post_id'],$value->ID,false)).'>'.TLThemeHelper::esc_html($value->post_title).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Blog archive page'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Get settings for archive page from selected page.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('blog_archive_setting_post_id'); ?>" id="<?php TLThemeHelper::getFormName('blog_archive_setting_post_id'); ?>">
<?php
						foreach($this->data['dictionary']['page'] as $value)
							echo '<option value="'.TLThemeHelper::esc_attr($value->ID).'" '.(TLThemeHelper::selectedIf($this->data['option']['blog_archive_setting_post_id'],$value->ID,false)).'>'.TLThemeHelper::esc_html($value->post_title).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Blog search page'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Get settings for search page from selected page.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('blog_search_setting_post_id'); ?>" id="<?php TLThemeHelper::getFormName('blog_search_setting_post_id'); ?>">
<?php
						foreach($this->data['dictionary']['page'] as $value)
							echo '<option value="'.TLThemeHelper::esc_attr($value->ID).'" '.(TLThemeHelper::selectedIf($this->data['option']['blog_search_setting_post_id'],$value->ID,false)).'>'.TLThemeHelper::esc_html($value->post_title).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Blog author page'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Get settings for author page from selected page.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('blog_author_setting_post_id'); ?>" id="<?php TLThemeHelper::getFormName('blog_author_setting_post_id'); ?>">
<?php
						foreach($this->data['dictionary']['page'] as $value)
							echo '<option value="'.TLThemeHelper::esc_attr($value->ID).'" '.(TLThemeHelper::selectedIf($this->data['option']['blog_author_setting_post_id'],$value->ID,false)).'>'.TLThemeHelper::esc_html($value->post_title).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Sidebar'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Select sidebar and sidebar location.'); ?></span>
				<div class="to-clear-fix">
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Sidebar:'); ?></span>
					<select name="<?php TLThemeHelper::getFormName('blog_post_content_widget_area'); ?>" id="<?php TLThemeHelper::getFormName('blog_post_content_widget_area'); ?>">
<?php
						foreach($this->data['dictionary']['widgetArea-1'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['blog_post_content_widget_area'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
				<div class="to-clear-fix">
					<span class="to-legend-field"><?php TLThemeTranslator::esc_html_e('Location:'); ?></span>
					<select name="<?php TLThemeHelper::getFormName('blog_post_content_widget_area_location'); ?>" id="<?php TLThemeHelper::getFormName('blog_post_content_widget_area_location'); ?>">
<?php
						foreach($this->data['dictionary']['widgetAreaLocation-1'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['blog_post_content_widget_area_location'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Widget area in footer'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Select widget area in footer.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('blog_post_footer_widget_area'); ?>" id="<?php TLThemeHelper::getFormName('blog_post_footer_widget_area'); ?>">
<?php
						foreach($this->data['dictionary']['widgetArea-1'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['blog_post_footer_widget_area'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>	
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Top menu'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Select top menu.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('blog_post_menu_top'); ?>" id="<?php TLThemeHelper::getFormName('blog_post_menu_top'); ?>">
<?php
						foreach($this->data['dictionary']['menu-1'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['blog_post_menu_top'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>				
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Post sorting'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Set post sorting in blog pages.'); ?></span>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('blog_post_sort_field'); ?>" id="<?php TLThemeHelper::getFormName('blog_post_sort_field'); ?>">
<?php
						foreach($this->data['dictionary']['sortPostBlogField'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['blog_post_sort_field'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
				<div class="to-clear-fix">
					<select name="<?php TLThemeHelper::getFormName('blog_post_sort_direction'); ?>" id="<?php TLThemeHelper::getFormName('blog_post_sort_direction'); ?>">
<?php
						foreach($this->data['dictionary']['sortDirection'] as $index=>$value)
							echo '<option value="'.TLThemeHelper::esc_attr($index).'" '.(TLThemeHelper::selectedIf($this->data['option']['blog_post_sort_direction'],$index,false)).'>'.TLThemeHelper::esc_html($value[0]).'</option>';
?>
					</select>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Automatic excerpt length'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Number of words in automatic excerpt.'); ?></span>
				<div>
					<input type="text" name="<?php TLThemeHelper::getFormName('blog_post_automatic_excerpt_length'); ?>" id="<?php TLThemeHelper::getFormName('blog_post_automatic_excerpt_length'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['blog_post_automatic_excerpt_length']); ?>" maxlength="3"/>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Show post header'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Show post header.'); ?></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('blog_post_header_visible'); ?>" id="<?php TLThemeHelper::getFormName('blog_post_header_visible_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['blog_post_header_visible'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('blog_post_header_visible_1'); ?>"><?php TLThemeTranslator::esc_html_e('Yes'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('blog_post_header_visible'); ?>" id="<?php TLThemeHelper::getFormName('blog_post_header_visible_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['blog_post_header_visible'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('blog_post_header_visible_0'); ?>"><?php TLThemeTranslator::esc_html_e('No'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Show post categories in post'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Show post categories in post.'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('blog_post_category_visible'); ?>" id="<?php TLThemeHelper::getFormName('blog_post_category_visible_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['blog_post_category_visible'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('blog_post_category_visible_1'); ?>"><?php TLThemeTranslator::esc_html_e('Yes'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('blog_post_category_visible'); ?>" id="<?php TLThemeHelper::getFormName('blog_post_category_visible_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['blog_post_category_visible'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('blog_post_category_visible_0'); ?>"><?php TLThemeTranslator::esc_html_e('No'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Show post author in post'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Show post author in post.'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('blog_post_author_visible'); ?>" id="<?php TLThemeHelper::getFormName('blog_post_author_visible_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['blog_post_author_visible'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('blog_post_author_visible_1'); ?>"><?php TLThemeTranslator::esc_html_e('Yes'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('blog_post_author_visible'); ?>" id="<?php TLThemeHelper::getFormName('blog_post_author_visible_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['blog_post_author_visible'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('blog_post_author_visible_0'); ?>"><?php TLThemeTranslator::esc_html_e('No'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Show post tags in post'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Show post tags in post.'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('blog_post_tag_visible'); ?>" id="<?php TLThemeHelper::getFormName('blog_post_tag_visible_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['blog_post_tag_visible'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('blog_post_tag_visible_1'); ?>"><?php TLThemeTranslator::esc_html_e('Yes'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('blog_post_tag_visible'); ?>" id="<?php TLThemeHelper::getFormName('blog_post_tag_visible_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['blog_post_tag_visible'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('blog_post_tag_visible_0'); ?>"><?php TLThemeTranslator::esc_html_e('No'); ?></label>
				</div>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Show post comment count in post'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Show post comment count in post.'); ?><br/></span>
				<div class="to-radio-button">
					<input type="radio" name="<?php TLThemeHelper::getFormName('blog_post_comment_count_visible'); ?>" id="<?php TLThemeHelper::getFormName('blog_post_comment_count_visible_1'); ?>" value="1" <?php TLThemeHelper::checkedIf($this->data['option']['blog_post_comment_count_visible'],1); ?>/>
					<label for="<?php TLThemeHelper::getFormName('blog_post_comment_count_visible_1'); ?>"><?php TLThemeTranslator::esc_html_e('Yes'); ?></label>
					<input type="radio" name="<?php TLThemeHelper::getFormName('blog_post_comment_count_visible'); ?>" id="<?php TLThemeHelper::getFormName('blog_post_comment_count_visible_0'); ?>" value="0" <?php TLThemeHelper::checkedIf($this->data['option']['blog_post_comment_count_visible'],0); ?>/>
					<label for="<?php TLThemeHelper::getFormName('blog_post_comment_count_visible_0'); ?>"><?php TLThemeTranslator::esc_html_e('No'); ?></label>
				</div>
			</li>
		</ul>