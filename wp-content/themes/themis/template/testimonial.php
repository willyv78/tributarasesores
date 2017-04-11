
		<div class="clear-fix testimonial-carousel-wrapper <?php echo TLThemeHelper::esc_attr($this->data->meta->css_class); ?>">

			<div class="clear-fix testimonial-carousel" id="testimonial-carousel-<?php echo TLThemeHelper::esc_attr($this->data->meta->id); ?>">
<?php
		$i=0;
		$index=0;

		global $post;
		$bPost=$post;
		
		$Layout=new TLThemeLayout();
		$Validation=new TLThemeValidation();
		
		while($this->data->query->have_posts())
		{
			$this->data->query->the_post();
			if(in_array(get_the_ID(),$this->data->exclude)) continue;
			
			$option=TLThemeOption::getPostMeta($post);
			
			if(in_array($i,$this->data->pageIndex))
			{
				$index=0;
?>
				<div class="clear-fix">

					<ul class="testimonial-list list-0 clear-fix layout-p-<?php echo TLThemeHelper::esc_attr($this->data->meta->layout) ?>">
<?php
			}

			$class=$Layout->getLayoutColumnNameByIndex($index,$this->data->meta->layout);			
?>	
						<li class="<?php echo $class; ?>">
							<div>
								<div class="testimonial-list-cite-open"></div>
								<h4 class="testimonial-list-content paragraph"><?php the_title(); ?></h4>
								<div class="testimonial-list-cite-close"></div>			
<?php
			if($Validation->isNotEmpty($option['testimonial_person']))
			{
?>
								<div class="testimonial-list-person"><?php echo TLThemeHelper::esc_html($option['testimonial_person']); ?></div>
<?php
			}
			if($Validation->isNotEmpty($option['testimonial_company']))
			{
?>
								<div class="testimonial-list-company"><?php echo TLThemeHelper::esc_html($option['testimonial_company']); ?></div>
<?php
			}
?>
							</div>
						</li>
<?php
			$i++;
			if(in_array($i,$this->data->pageIndex))
			{
?>
					</ul>

				</div>
<?php
			}
			
			$index++;
		}
		
		$post=$bPost;
?>
			</div>

			<div class="testimonial-carousel-pagination clear-fix"></div>

		</div>
<?php
		if($this->data->meta->items_per_page!=0)
		{
?>
		<script type="text/javascript">
			jQuery(document).ready(function() 
			{
				var theme=new TLTheme();
				theme.createTestimonialCarousel('<?php echo $this->data->meta->id; ?>');
			});
		</script>
<?php
		}
?>