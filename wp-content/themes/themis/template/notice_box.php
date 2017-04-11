		<div class="clear-fix notice-box notice-box-<?php echo TLThemeHelper::esc_attr($this->data->meta->type); ?> <?php echo TLThemeHelper::esc_attr($this->data->meta->css_class); ?>">

			<div class="clear-fix">
<?php
		if($this->data->meta->show_close_button==1)
		{
?>
				<div>
					<a href="#">
						<?php echo $this->data->meta->time_to_close==0 ? '<span class="notice-box-close"></span>' : sprintf(TLThemeTranslator::esc_html__('Closing in %s seconds','notification_closing_in_seconds'),'<span class="notice-box-close time-'.(int)$this->data->meta->time_to_close.'"> '.$this->data->meta->time_to_close.' </span>');//<span class="notice-box-close">'.TLThemeTranslator::esc_html__('Close','notification_close').'</span><span class="notice-box-close">'.TLThemeTranslator::esc_html__('Close','notification_close').'</span> ?>
					</a>
				</div>
<?php
		}
?>	
				<h2><?php echo TLThemeHelper::esc_html($this->data->header); ?></h2>
				<h4><?php echo $this->data->content; ?></h4>

			</div>

		</div>