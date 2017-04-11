		<ul class="list-0 clear-fix latest-post <?php echo TLThemeHelper::esc_attr($this->data->meta->css_class); ?>">
<?php
		global $post;
		$bPost=$post;

		$Validation=new TLThemeValidation();
		while($this->data->query->have_posts())
		{
			$this->data->query->the_post();
?>
			<li class="clear-fix">
<?php
			if(has_post_thumbnail())
			{
?>
				<div class="clear-fix post-image single-image image-100-100">
					<a href="<?php the_permalink(); ?>" class="overlay-url preloader">
						<?php echo get_the_post_thumbnail(get_the_ID(),'image-100-100'); ?>
					</a>
				</div>
<?php
			}

			$link=null;

			if($Validation->isNotEmpty($this->data->post[get_the_ID()]->post_excerpt))
			{
				if($this->data->meta->show_read_more==1)
					$link='&nbsp;<a href="'.get_permalink().'" class="read-more">'.TLThemeTranslator::esc_html__('Read more','blog_read_more_link').'</a>';
			}
?>
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<p><?php echo $this->data->post[get_the_ID()]->post_excerpt.$link; ?></p>

			</li>
<?php
		}
		
		$post=$bPost;
?>
		</ul>