		<div class="clear-fix gallery preloader <?php echo TLThemeHelper::esc_attr($this->data->meta->css_class); ?>">
<?php
		$Validation=new TLThemeValidation();
		if($this->data->meta->filter==1)
		{
?>
			<ul class="list-0 clear-fix gallery-filter-menu">
<?php
			if($this->data->meta->show_all_items_button==1)
			{
?>
				<li><a href="#" class="filter-0 <?php echo ($this->data->meta->selected==0 ? 'selected' : null); ?>"><?php TLThemeTranslator::esc_html_e('All items','gallery_all_items'); ?></a></li>
<?php
			}
			
			foreach($this->data->category as $index=>$value)
			{
?>
				<li><a href="#" class="filter-<?php echo TLThemeHelper::esc_attr($index); ?> <?php echo ($this->data->meta->selected==$index ? 'selected' : null); ?>"><?php echo TLThemeHelper::esc_html($value[0]); ?></a></li>
<?php
			}
?>
			</ul>
<?php
		}
?>
			<ul class="list-0 clear-fix gallery-item-list layout-p-<?php echo TLThemeHelper::esc_attr($this->data->meta->layout); ?> gallery-filter-<?php echo TLThemeHelper::esc_attr($this->data->meta->filter); ?>" id="gallery-<?php echo TLThemeHelper::esc_attr($this->data->meta->id); ?>">
<?php
		$i=0;
		
		$Layout=new TLThemeLayout();
		
		global $post;
		$bPost=$post;

		while($this->data->query->have_posts())
		{
			$this->data->query->the_post();
			if(in_array(get_the_ID(),$this->data->exclude)) continue;
			
			$layoutType1=($Validation->isNotEmpty(get_the_title()) || $Validation->isNotEmpty(get_the_excerpt())) && ($this->data->meta->layout_shortcode==1);
			
			$class=array();

			$class[]=$Layout->getLayoutColumnNameByIndex($i,$this->data->meta->layout);
			$class[]=($this->data->meta->filter==1 ? $this->data->post[get_the_ID()]->categoryFilter : null);
			$class[]=$class[0]=='column-left' ? 'clear-fix clear-left' : null;
			$class[]=$layoutType1==1 ? 'layout-p-66x33' : null;
?>
				<li class="<?php echo TLThemeHelper::esc_attr(trim(join(' ',$class))); ?>">

					<div <?php echo ($layoutType1==1 ? ($this->data->meta->is_rtl ? 'class="column-right"' : 'class="column-left"') : null); ?>>					    
						<div>
							<a href="<?php echo TLThemeHelper::esc_attr($this->data->post[get_the_ID()]->url); ?>" class="preloader <?php echo TLThemeHelper::esc_attr($this->data->post[get_the_ID()]->class); ?>" <?php echo $Validation->isEmpty($this->data->post[get_the_ID()]->rel) ? null : 'rel="'. TLThemeHelper::esc_attr($this->data->post[get_the_ID()]->rel).'"'; ?>>
								<img src="<?php echo TLThemeHelper::esc_attr($this->data->post[get_the_ID()]->thumbnail); ?>" alt="<?php the_title(); ?>" />
							</a>
						</div>
						<div class="hidden theme-image-description"><?php the_excerpt(); ?></div>
<?php
			$display=$Validation->isNotEmpty(get_the_title()) || $Validation->isNotEmpty($this->data->post[get_the_ID()]->post_excerpt_limit);
			if(($this->data->post[get_the_ID()]->show_info_box) && ($display))
			{
?>
						<div class="gallery-bottom-box">
							<div class="default"></div>
							<div class="hover"></div>
							<h3><?php the_title(); ?></h3>
							<h5 class="paragraph"><?php echo TLThemeHelper::esc_html($this->data->post[get_the_ID()]->post_excerpt_limit); ?></h5>
						</div>
<?php
			}
?>		
					</div>
<?php	
			if($layoutType1==1)
			{
?> 
					<div class="<?php echo (is_rtl() ? 'column-left' : 'column-right')?>">
						<h2><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>				
					</div>
<?php
			}
?>				
				</li>
<?php
			$i++;
		}
		
		$post=$bPost;
?>
			</ul>

		</div>

		<div class="hidden">
		<script type="text/javascript">
		jQuery(document).ready(function($)
		{
			var theme=new TLTheme();
			theme.createGallery('<?php echo $this->data->meta->id; ?>',{'selected':<?php echo (int)$this->data->meta->selected; ?>});
		});
		</script>
		</div>