<?php
		global $post;
		$bPost=$post;

		$this->data->query->the_post();
?>
		<div class="clear-fix infopanel infopanel-<?php the_ID(); ?> <?php echo TLThemeHelper::esc_attr($this->data->meta->css_class); ?>">
<?php
		$Validation=new TLThemeValidation();
		if($Validation->isNotEmpty($this->data->option['infopanel_first_line_text']))
		{
?>
			<h2><?php echo TLThemeHelper::esc_html($this->data->option['infopanel_first_line_text']); ?></h2>
<?php
		}
		if($Validation->isNotEmpty($this->data->option['infopanel_second_line_text']))
		{
?>
			<h4 class="clear-fix"><?php echo TLThemeHelper::esc_html($this->data->option['infopanel_second_line_text']); ?></h4>
<?php
		}
		if(($Validation->isNotEmpty($this->data->option['infopanel_button_link'])) && ($Validation->isNotEmpty($this->data->option['infopanel_button_label'])))
		{
?>
			<div>
				<a href="<?php echo TLThemeHelper::esc_attr($this->data->option['infopanel_button_link']); ?>"><?php echo TLThemeHelper::esc_html($this->data->option['infopanel_button_label']); ?></a>
			</div>
<?php
		}
?>
		</div>
<?php
		$post=$bPost;
?>