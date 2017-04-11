		<ul class="list-0 clear-fix <?php echo TLThemeHelper::esc_attr($this->data->meta->css_class); ?>">

			<li class="clear-fix single-image single-image-<?php echo TLThemeHelper::esc_attr($this->data->meta->image_type); ?>">

				<div>
					<a href="<?php echo TLThemeHelper::esc_attr($this->data->meta->url); ?>" class="preloader <?php echo TLThemeHelper::esc_attr($this->data->meta->class); ?>">
						<img src="<?php echo TLThemeHelper::esc_attr($this->data->meta->thumbnail); ?>" alt="<?php echo TLThemeHelper::esc_attr($this->data->post->post_title); ?>" />
					</a>
				</div>
				<div class="hidden theme-image-description"><?php echo $this->data->post->post_excerpt; ?></div>
<?php
		$Validation=new TLThemeValidation();
		
		$display=$Validation->isNotEmpty($this->data->post->post_title) || $Validation->isNotEmpty($this->data->post->post_excerpt_limit);
		
		if(($this->data->meta->show_info_box) && ($display))
		{
?>
			<div class="gallery-bottom-box">
				<div class="default"></div>
				<div class="hover"></div>
				<h3><?php echo TLThemeHelper::esc_html($this->data->post->post_title); ?></h3>
				<h5><?php echo TLThemeHelper::esc_html($this->data->meta->post_excerpt_limit); ?></h5>
			</div>
<?php
		}
?>
			</li>

		</ul>