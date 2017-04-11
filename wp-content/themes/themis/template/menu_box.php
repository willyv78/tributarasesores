		<div class="menu-box-wrapper clear-fix" id="<?php echo TLThemeHelper::esc_attr($this->data->meta->id); ?>">

			<div class="menu-box clear-fix">

				<ul class="menu-box" style="height:<?php echo (int)$this->data->option->item_dimension_height; ?>px">
<?php
		global $post;
		$bPost=$post;
		
		$Validation=new TLThemeValidation();

		while($this->data->query->have_posts())
		{
			$this->data->query->the_post();
			if(in_array(get_the_ID(),$this->data->exclude)) continue;
			
			$postData=$this->data->post[get_the_id()];
			
			$alt=$postData->option['page_menu_header'];
			if($Validation->isNotEmpty($alt)) $alt.=' | ';
			$alt.=$postData->option['page_menu_subheader'];
?>
					<li class="menu-box-item-<?php echo esc_attr($post->post_name); ?>">
						<a href="<?php echo TLThemeHelper::esc_attr($postData->permalink); ?>" target="<?php echo TLThemeHelper::esc_attr($postData->window_target); ?>" title="">
							<img class="menu-box-image" src="<?php echo TLThemeHelper::esc_attr($postData->image); ?>" alt="<?php echo TLThemeHelper::esc_html($alt); ?>"/>
							<span class="menu-box-overlay">
								<span></span>
							</span>
							<span class="menu-box-icon">
								<img class="menu-box-icon" src="<?php echo TLThemeHelper::esc_attr($postData->icon); ?>" alt="<?php echo TLThemeHelper::esc_html($alt); ?>"/>
								<img class="menu-box-icon-hover" src="<?php echo TLThemeHelper::esc_attr($postData->icon_hover); ?>" alt="<?php echo TLThemeHelper::esc_html($alt); ?>"/>
							</span>
<?php
			if(($Validation->isNotEmpty($postData->option['page_menu_header'])) || ($Validation->isNotEmpty($postData->option['page_menu_subheader'])))
			{
?>
							<span class="menu-box-headers">
<?php
				if($Validation->isNotEmpty($postData->option['page_menu_header']))
				{
?>
								<span class="menu-box-header"><?php echo TLThemeHelper::esc_html($postData->option['page_menu_header']); ?></span>
<?php
				}
				if($Validation->isNotEmpty($postData->option['page_menu_subheader']))
				{
?>
								<span class="menu-box-subheader"><?php echo TLThemeHelper::esc_html($postData->option['page_menu_subheader']); ?></span>
<?php
				}
?>
							</span>
<?php
			}
?>
						</a>

					</li>
<?php
		}
		
		$post=$bPost;
?>
				</ul>

			</div>

			<div>
				<a href="#" class="navigation-prev"></a>
				<a href="#" class="navigation-next"></a>
			</div>

		</div>

		<div class="hidden">
		<script type="text/javascript">
			jQuery(document).ready(function() 
			{
				var theme=new TLTheme();
				theme.createMenuBox('<?php echo $this->data->meta->id; ?>',<?php echo json_encode($this->data->option); ?>);
			});
		</script>
		</div>