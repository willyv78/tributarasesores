<?php
		echo $this->data['html']['start']; 
?>
		<div class="clear-fix menu-box-widget-wrapper">

			<ul class="list-0 menu-box-widget">
<?php
		global $post;
		$bPost=$post;
		
		$Validation=new TLThemeValidation();

		while($this->data['post']->query->have_posts())
		{
			$this->data['post']->query->the_post();
			if(in_array(get_the_ID(),$this->data['post']->exclude)) continue;
			
			$postData=$this->data['post']->post[get_the_id()];
?>
				<li>
					<a href="<?php echo TLThemeHelper::esc_attr($postData->permalink); ?>" target="<?php echo TLThemeHelper::esc_attr($postData->window_target); ?>" class="clear-fix">
						<span class="menu-box-widget-icon">
							<img class="menu-box-widget-icon" src="<?php echo TLThemeHelper::esc_attr($postData->icon); ?>" alt=""/>
							<img class="menu-box-widget-icon-hover" src="<?php echo TLThemeHelper::esc_attr($postData->icon_hover); ?>" alt=""/>
						</span>		
<?php
			if(($Validation->isNotEmpty($postData->option['page_menu_header'])) || ($Validation->isNotEmpty($postData->option['page_menu_subheader'])))
			{
?>
						<span class="menu-box-widget-headers">
<?php
				if($Validation->isNotEmpty($postData->option['page_menu_header']))
				{
?>
							<span class="menu-box-widget-header"><?php echo TLThemeHelper::esc_html($postData->option['page_menu_header']); ?></span>
<?php
				}

				if($Validation->isNotEmpty($postData->option['page_menu_subheader']))
				{
?>
							<span class="menu-box-widget-subheader"><?php echo TLThemeHelper::esc_html($postData->option['page_menu_subheader']); ?></span>
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

			<a href="#" class="navigation-up"></a>
			<a href="#" class="navigation-down"></a>

		</div>
<?php
		echo $this->data['html']['stop'];
?>