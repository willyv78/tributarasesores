		<ul class="to-form-field-list">
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('"Read more" link'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('"Read more" link.'); ?></span>
				<input type="text" name="<?php TLThemeHelper::getFormName('text_blog_read_more_link'); ?>" id="<?php TLThemeHelper::getFormName('text_blog_read_more_link'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_blog_read_more_link']); ?>" maxlength="255"/>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('"Tags"'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('"Tags".'); ?></span>
				<input type="text" name="<?php TLThemeHelper::getFormName('text_blog_tags'); ?>" id="<?php TLThemeHelper::getFormName('text_blog_tags'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_blog_tags']); ?>" maxlength="255"/>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('"Views"'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('"Views".'); ?></span>
				<input type="text" name="<?php TLThemeHelper::getFormName('text_blog_views'); ?>" id="<?php TLThemeHelper::getFormName('text_blog_views'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_blog_views']); ?>" maxlength="255"/>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('"Posted in" category'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('"Posted in" category.'); ?></span>
				<input type="text" name="<?php TLThemeHelper::getFormName('text_blog_posted_in_category'); ?>" id="<?php TLThemeHelper::getFormName('text_blog_posted_in_category'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_blog_posted_in_category']); ?>" maxlength="255"/>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('"Posted by" author'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('"Posted by" author'); ?></span>
				<input type="text" name="<?php TLThemeHelper::getFormName('text_blog_posted_by_author'); ?>" id="<?php TLThemeHelper::getFormName('text_blog_posted_by_author'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_blog_posted_by_author']); ?>" maxlength="255"/>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Comment'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Comment'); ?></span>
				<input type="text" name="<?php TLThemeHelper::getFormName('text_blog_comment'); ?>" id="<?php TLThemeHelper::getFormName('text_blog_comment'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_blog_comment']); ?>" maxlength="255"/>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('Comments'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('Comments'); ?></span>
				<input type="text" name="<?php TLThemeHelper::getFormName('text_blog_comments'); ?>" id="<?php TLThemeHelper::getFormName('text_blog_comments'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_blog_comments']); ?>" maxlength="255"/>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('"View all posts filed under" category'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('"View all posts filed under" category'); ?></span>
				<input type="text" name="<?php TLThemeHelper::getFormName('text_blog_view_all_posts_filed_under_category'); ?>" id="<?php TLThemeHelper::getFormName('text_blog_view_all_posts_filed_under_category'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_blog_view_all_posts_filed_under_category']); ?>" maxlength="255"/>
			</li>
			<li>
				<h5><?php TLThemeTranslator::esc_html_e('"All posts from" author'); ?></h5>
				<span class="to-legend"><?php TLThemeTranslator::esc_html_e('"All posts from" author'); ?></span>
				<input type="text" name="<?php TLThemeHelper::getFormName('text_blog_posts_from_the_author'); ?>" id="<?php TLThemeHelper::getFormName('text_blog_posts_from_the_author'); ?>" value="<?php echo TLThemeHelper::esc_attr($this->data['option']['text_blog_posts_from_the_author']); ?>" maxlength="255"/>
			</li>			
		</ul>