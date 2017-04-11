<?php
		if(count($this->data['query']->posts))
		{
			echo $this->data['html']['start']; 
?>
		<div class="most-viewed">

			<ul class="list-0 clear-fix most-viewed">
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
					<div class="count"><?php TLThemeTranslator::esc_html_e('Views:','blog_views'); ?>&nbsp;<?php echo (int)get_post_meta(get_the_ID(),THEME_CONTEXT.'_post_view_count',true); ?></div>
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