		<ul class="list-0 clear-fix pricing-list <?php echo TLThemeHelper::esc_attr($this->data->meta->css_class); ?>">
<?php
		global $post;
		$bPost=$post;

		while($this->data->query->have_posts())
		{
			$this->data->query->the_post();
			if(in_array(get_the_ID(),$this->data->exclude)) continue;
			
			$option=TLThemeOption::getPostMeta($post);
?>
			<li class="clear-fix">
				<h4 class="pricing-list-name"><?php the_title(); ?></h4>
				<h4 class="pricing-list-price"><?php echo TLThemeHelper::esc_html($option['pricing_list_price']); ?></h4>
			</li>
<?php
		}
		
		$post=$bPost;
?>
		</ul>