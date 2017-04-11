<?php
		global $post,$parentPost;

		$Page=new TLThemePage();
		$Post=new TLThemePost();
		$Blog=new TLThemeBlog();
		$WidgetArea=new TLThemeWidgetArea();
		$Validation=new TLThemeValidation();
		
		$widgetAreaData=$WidgetArea->getWidgetAreaByPost($parentPost->post,true,true);

		$query=$Blog->getPost();
		$postCount=count($query->posts);

		if($postCount)
		{
?>
		<div class="clear-fix">
			
			<ul class="list-0 clear-fix blog-post-list">
<?php
			while($query->have_posts())
			{
				$query->the_post();

				$visibleOption=array();

				$visibleOption['post_tag_visible']=TLThemeOption::getGlobalOption($post,'tag_visible');
				$visibleOption['post_author_visible']=TLThemeOption::getGlobalOption($post,'author_visible');
				$visibleOption['post_category_visible']=TLThemeOption::getGlobalOption($post,'category_visible');
				$visibleOption['post_comment_count_visible']=TLThemeOption::getGlobalOption($post,'comment_count_visible');
?>
				<li id="post-<?php the_ID(); ?>" <?php post_class('clear-fix'); ?>>
<?php
				if(has_post_thumbnail())
				{
?>
					<div class="clear-fix margin-bottom-20 post-image single-image <?php echo $Page->getImageClass($widgetAreaData['location']); ?>">
						<a href="<?php the_permalink(); ?>" class="overlay-url preloader">
							<?php echo get_the_post_thumbnail(get_the_ID(),$Page->getImageClass($widgetAreaData['location'])); ?>
						</a>
					</div>
<?php
				}
?>
					<div class="clear-fix">
<?php
				if($post->post_type=='post')
				{
?>
						<div class="post-date">
							<?php $Post->formatPostDate($post->post_date,$day,$month,$year); ?>
							<span class="day"><?php echo $day; ?></span>
							<span class="month-year"><?php echo TLThemeHelper::esc_html($month.' '.$year); ?></span>
						</div>
<?php
				}
?>
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
									<a href="<?php echo get_author_posts_url($post->post_author); ?>"><?php the_author(); ?></a>
								</div>
<?php
					}
						
					if($visibleOption['post_comment_count_visible']==1)
					{						
						if(comments_open())
						{
?>
								<div class="post-info-bar-comment-count">
									<a href="<?php echo get_permalink().'#comments'; ?>"><?php echo get_comments_number().' '.TLThemeTranslator::esc_html__('comments'); ?></a>
								</div>
<?php
						}
					}
?>
							</div>
<?php
				}
?>
						</div>
			
					</div>
<?php
				if($post->post_type=='post')
				{
?>
					<div class="clear-fix post-excerpt paragraph"><?php the_excerpt(); ?></div>
<?php
				}
?>
					<div class="clear-fix">
						<a href="<?php the_permalink(); ?>" class="post-read-more"><?php TLThemeTranslator::_e('Read more','blog_read_more_link'); ?></a>
					</div>
<?php
				if($visibleOption['post_tag_visible']==1)
				{
					$tag=get_the_tags();
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
?>
				</li>
<?php
		}
		
		wp_reset_postdata();
?>
			</ul>

			<div class="blog-pagination">
<?php	
		global $wp_rewrite;  
		
		$total=$query->max_num_pages; 
		$current=max(1,TLThemeHelper::getPageNumber()); 
		
		$pagination=array
		(
			'base'			=>	@add_query_arg('paged','%#%'),
			'format'		=>	'',
			'current'		=>	$current,  
			'total'			=>	$total,  
			'next_text'		=>	TLThemeTranslator::__('Next','pagination_label_next_button'),
			'prev_text'		=>	TLThemeTranslator::__('Previous','pagination_label_previous_button')
		);

		if($wp_rewrite->using_permalinks() )
			$pagination['base']=user_trailingslashit(trailingslashit(remove_query_arg('s',get_pagenum_link(1))).'page/%#%/','paged');

		if(is_search()) $pagination['add_args']=array('s'=>urlencode(get_query_var('s')));

		echo paginate_links($pagination);
?>
			</div>
			
		</div>
<?php
		}
		else echo do_shortcode('['.THEME_CONTEXT.'_notice_box type="error" header="'.TLThemeHelper::escapeShortcodeAttr(TLThemeTranslator::__('Error','search_form_notice_no_post_found_header')).'"]'.TLThemeTranslator::esc_html__('No posts found.','search_form_notice_no_post_found_text').'[/'.THEME_CONTEXT.'_notice_box]');
?>