<?php
		global $post,$parentPost;

		the_post();
		
		$Page=new TLThemePage();
		$Post=new TLThemePost();
		$Validation=new TLThemeValidation();

		$Comment=new TLThemeComment();
		
		$WidgetArea=new TLThemeWidgetArea();

		$widgetAreaData=$WidgetArea->getWidgetAreaByPost($parentPost->post,true,true);

		$Post->setPostView(get_the_ID());

		$visibleOption=array();

		$visibleOption['post_tag_visible']=TLThemeOption::getGlobalOption($post,'tag_visible');
		$visibleOption['post_author_visible']=TLThemeOption::getGlobalOption($post,'author_visible');
		$visibleOption['post_category_visible']=TLThemeOption::getGlobalOption($post,'category_visible');
		$visibleOption['post_comment_count_visible']=TLThemeOption::getGlobalOption($post,'comment_count_visible');
?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
<?php
		if(has_post_thumbnail())
		{
			$image=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full');
?>
			<div class="clear-fix margin-bottom-20 post-image single-image <?php echo $Page->getImageClass($widgetAreaData['location']); ?>">
				<a href="<?php echo $image[0]; ?>" class="preloader theme-fancybox-image overlay-image">
					<?php echo get_the_post_thumbnail(get_the_ID(),$Page->getImageClass($widgetAreaData['location'])); ?>
				</a>
			</div>
<?php
		}
?>
			<div class="clear-fix">

				<div class="post-date">
					<?php $Post->formatPostDate($post->post_date,$day,$month,$year); ?>
					<span class="day"><?php echo $day; ?></span>
					<span class="month-year"><?php echo TLThemeHelper::esc_html($month.' '.$year); ?></span>
				</div>

				<div class="post-info">				

					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php
		if($visibleOption['post_category_visible']==1 || $visibleOption['post_author_visible']==1 || $visibleOption['post_comment_count_visible']==1)
		{
?>
					<div class="clear-fix post-info-bar">
<?php
			if($visibleOption['post_category_visible']==1)
			{
				$category=get_the_category(get_the_ID());
				$count=count($category);

				if($count)
				{
?>
						<div class="float-left"><?php TLThemeTranslator::esc_html_e('Posted in:','blog_posted_in_category'); ?>&nbsp;</div>
						<ul class="list-0 post-info-bar-category-list">
<?php
					foreach($category as $index=>$value)
					{
						$separator=$index==$count-1 ? '' : ',&nbsp;';
						$title=$Validation->isEmpty($value->description) ? sprintf(TLThemeTranslator::__('View all posts filed under %s','blog_view_all_posts_filed_under_category'),$value->name) : strip_tags(apply_filters('category_description',$value->description,$value));
?>
							<li><a href="<?php echo get_category_link($value->term_id); ?>" title="<?php TLThemeHelper::esc_attr($title); ?>"><?php echo TLThemeHelper::esc_html($value->name); ?></a><?php echo $separator; ?></li>
<?php
					}
?>
						</ul>
<?php		
				}
			}

			if($visibleOption['post_author_visible']==1)
			{
?>
						<div class="post-info-bar-author">
							<?php echo TLThemeTranslator::esc_html__('Posted by','blog_posted_by_author'); ?>
							<a href="<?php the_author_link(); ?>"><?php the_author(); ?></a>
						</div>
<?php
			}
					
			if(comments_open(get_the_ID()) && $visibleOption['post_comment_count_visible']==1)
			{
?>
						<div class="post-info-bar-comment-count">
							<?php echo get_comments_number().' '.TLThemeTranslator::esc_html__('comments'); ?>
						</div>
<?php
			}
?>
					</div>
<?php
		}
?>
				</div>

			</div>

			<div class="clear-fix post-excerpt paragraph">
				<?php the_content(); ?>
			</div>
<?php
		if($visibleOption['post_tag_visible']==1)
		{
			$tag=get_the_tags(get_the_ID());
			if($tag) 
			{
?>
			<div class="clear-fix post-tag">

				<ul class="list-0">

					<li><span><?php TLThemeTranslator::_e('Tags:','blog_tags'); ?></span></li>
<?php
				foreach($tag as $value)
				{
?>
					<li><a href="<?php echo get_tag_link($value->term_id); ?>"><?php echo $value->name; ?></a></li>
<?php

				}
?>
				</ul>

			</div>
<?php
			}
		}

		wp_link_pages();
?>
			<div id="comments">
				<?php comments_template(); ?>
			</div>
<?php 
		$Comment=new TLThemeComment();

		$commenter=wp_get_current_commenter();
		$req=get_option('require_name_email');
		$aria_req=($req ? ' aria-required=\'true\'' : '');

		$field=array();

		$field['author']=
		'
			<p class="clear-fix comment-form-author">
				<label for="author">'.TLThemeTranslator::__('Name','comment_form_label_name').($req ? ' <span class="required">*</span>' : '').'</label>
				<span class="block form-field">
					<input id="author" name="author" type="text" value="'.TLThemeHelper::esc_attr($commenter['comment_author']).'" size="30"'.$aria_req.'/>
				</span>
			</p>
		';

		$field['email']=
		'
			<p class="clear-fix comment-form-email">
				<label for="email">'.TLThemeTranslator::__('Email','comment_form_label_email').($req ? ' <span class="required">*</span>' : '').'</label>
				<span class="block form-field">
					<input id="email" name="email" type="text" value="'.TLThemeHelper::esc_attr($commenter['comment_author_email']).'" size="30"'.$aria_req.'/>
				</span>
			</p>
		';

		$field['url']=
		'
			<p class="clear-fix comment-form-url">
				<label for="url">'.TLThemeTranslator::__('Website','comment_form_label_website').'</label>
				<span class="block form-field">
					<input id="url" name="url" type="text" value="'.TLThemeHelper::esc_attr($commenter['comment_author_url']).'" size="30"/>
				</span>
			</p>
		';
		
		$commentField=
		'
			<p class="clear-fix comment-form-comment">
				<label for="comment">'.TLThemeTranslator::__('Comment','comment_form_label_comment').' <span class="required">*</span></label>
				<span class="block form-field">
					<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
					<input type="hidden" name="action" value="theme_public_comment_add" />
				</span>
			</p>	
		';

		$argument=array
		(
			'comment_notes_before'	=>	null,
			'comment_notes_after'	=>	'<div class="recaptcha-destination"></div>',
			'id_form'				=>	'comment-form',
			'title_reply'			=>	'<span>'.TLThemeTranslator::__('Leave a reply','comment_form_leave_reply').'<span class="underline"></span></span>',
			'cancel_reply_link'		=>	TLThemeTranslator::__('Cancel reply','comment_form_cancel_reply'),
			'comment_field'			=>	$commentField,
			'fields'				=>	apply_filters('comment_form_default_fields',$field),
			'label_submit'			=>	TLThemeTranslator::__('Post comment','comment_form_label_submit')
		);

		comment_form($argument); 
?>
			<div class="hidden">
			<script type="text/javascript">
			jQuery(document).ready(function() 
			{
				jQuery('#comment-form label').inFieldLabels();
				var comment=new TLThemeComment(<?php echo $Comment->recaptchaEnable; ?>);
				comment.init();
			});
			</script>
			</div>

		</div>