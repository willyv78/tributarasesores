		<div class="clear-fix nivo-slider-wrapper <?php echo TLThemeHelper::esc_attr($this->data->meta->css_class); ?>" style="max-width:<?php echo (int)$this->data->meta->width; ?>px;max-height:<?php echo (int)$this->data->meta->height; ?>px;">
			
			<div class="nivo-slider" id="<?php echo TLThemeHelper::esc_attr($this->data->meta->id); ?>">
<?php
		global $post;
		$bPost=$post;

		while($this->data->query->have_posts())
		{
			$this->data->query->the_post();
			if(in_array(get_the_ID(),$this->data->exclude)) continue;
?>
				<img src="<?php echo TLThemeHelper::esc_attr($this->data->post[get_the_ID()]->thumbnail)?>" alt=""/>
<?php
		}
		
		$post=$bPost;
?>
			</div>
			
		</div>

		<div class="hidden">
			<script type="text/javascript">
			jQuery(document).ready(function($)
			{
				var theme=new TLTheme();
				theme.createNivoSlider('<?php echo $this->data->meta->id; ?>',<?php echo json_encode($this->data->option); ?>);
			});
			</script>
		</div>