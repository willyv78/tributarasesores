<?php
		if(count($this->data['query']->posts))
		{
			echo $this->data['html']['start']; 
?>
		<div class="most-commented">

			<ul class="list-0 clear-fix most-commented">
<?php
			global $post;
			$bPost=$post;

			while($this->data['query']->have_posts())
			{
				$this->data['query']->the_post();
				
				$Post=new TLThemePost();
				$Post->formatPostDate($post->post_date,$day,$month,$year);
?>
				<li class="clear-fix">
					<div class="date">
						<span class="day"><?php echo TLThemeHelper::esc_html($day); ?></span>
						<span class="month"><?php echo TLThemeHelper::esc_html($month); ?></span>
					</div>
					<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
					<div class="count"><?php echo $post->comment_count; ?>&nbsp;<?php TLThemeTranslator::esc_html_e('Comments','blog_comments'); ?></div>
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