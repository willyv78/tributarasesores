		<div id="<?php echo TLThemeHelper::esc_attr($this->data->meta->id); ?>" class="google-map <?php echo TLThemeHelper::esc_attr($this->data->meta->css_class); ?>"></div>
			<div class="hidden">
			<script type="text/javascript">
			jQuery(document).ready(function() 
			{
				var theme=new TLTheme();
				theme.createGoogleMap('<?php echo TLThemeHelper::esc_attr($this->data->meta->id); ?>',<?php echo json_encode($this->data->option); ?>);
			});
			</script>
		</div>
