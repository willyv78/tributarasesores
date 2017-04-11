<?php
		if(count($this->data['query']->posts))
		{
			echo $this->data['html']['start']; 
?>
		<div class="latest-post">

			<ul class="list-0 clear-fix latest-post">
<?php
			global $post;
			$bPost=$post;

			while($this->data['query']->have_posts())
			{
				$this->data['query']->the_post();
				
				$Post=new TLThemePost();
				$Post->formatPostDate($post->post_date,$day,$month,$year)
?>
				<li class="clear-fix">

					<div class="date">
						<span class="day"><?php echo TLThemeHelper::esc_html($day); ?></span>
						<span class="month"><?php echo TLThemeHelper::esc_html($month); ?></span>
					</div>

					<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
<?php
				$category=get_the_category(get_the_ID());
				$count=count($category);

				if($count)
				{
?>
					<ul class="list-0 latest-post-category-list">

						<li class="paragraph"><?php TLThemeTranslator::esc_html_e('Posted in:','blog_posted_in_category'); ?>&nbsp;</li>
<?php
					$Validation=new TLThemeValidation();

					foreach($category as $index=>$value)
					{
						$separator=$index==$count-1 ? '' : ',&nbsp;';
						$title=$Validation->isEmpty($value->description) ? sprintf(TLThemeTranslator::__('View all posts filed under %s','text_blog_view_all_posts_filed_under_category'),$value->name) : strip_tags(apply_filters('category_description',$value->description,$value));
?>
						<li class="paragraph"><a href="<?php echo get_category_link($value->term_id); ?>" title="<?php echo TLThemeHelper::esc_attr($title); ?>"><?php echo TLThemeHelper::esc_html($value->name); ?></a><?php echo $separator; ?></li>
<?php
					}
				}
?>
					</ul>

				</li>
<?php
			}
			
			$post=$bPost;
?>
			</ul>

		</div>
<?php
			echo $this->data['html']['stop'];
		}
?>