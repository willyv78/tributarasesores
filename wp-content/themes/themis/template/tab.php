		<div class="theme-tab <?php echo TLThemeHelper::esc_attr($this->data->meta->css_class); ?>" id="<?php echo $this->data->meta->id; ?>">

			<ul>
<?php
			foreach($this->data->tab as $index=>$value)
			{
?>
				<li><a href="#<?php echo $this->data->meta->id.'_'.$index; ?>"><?php echo TLThemeHelper::esc_html($value['header']); ?></a></li>	
<?php
			}
?>
			</ul>
<?php
			foreach($this->data->tab as $index=>$value)
			{
?>
			<div id="<?php echo $this->data->meta->id.'_'.$index; ?>">
				<div class="paragraph"><?php echo apply_filters('the_content',$value['content']); ?></div>
			</div>
<?php
			}
?>
		</div>

		<div class="hidden">
			<script type="text/javascript">
			jQuery(document).ready(function() 
			{
				var theme=new TLTheme();
				theme.createTab('#<?php echo $this->data->meta->id; ?>',{active:'<?php echo TLThemeHelper::esc_attr($this->data->meta->active); ?>'});
			});
			</script>	
		</div>