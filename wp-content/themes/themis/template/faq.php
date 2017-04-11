		[<?php echo THEME_CONTEXT; ?>_accordion active="<?php echo TLThemeHelper::esc_attr($this->data->meta->active); ?>" css_class="<?php echo TLThemeHelper::esc_attr($this->data->meta->css_class); ?>"]
<?php
		global $post;
		$bPost=$post;

		while($this->data->query->have_posts())
		{
			$this->data->query->the_post();
			if(in_array(get_the_ID(),$this->data->exclude)) continue;
?>
		[<?php echo THEME_CONTEXT; ?>_accordion_item header="<?php the_title(); ?>"]
		<?php echo apply_filters('the_content',do_shortcode($post->post_content)); ?>
		[/<?php echo THEME_CONTEXT; ?>_accordion_item]
<?php
		}
?>
		[/<?php echo THEME_CONTEXT; ?>_accordion]
<?php
		$post=$bPost;
?>