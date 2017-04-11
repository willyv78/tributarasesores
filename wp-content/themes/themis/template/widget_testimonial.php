<?php
		if(!is_null($this->data['data']))
		{
			echo $this->data['html']['start']; 
?>
		<div class="clear-fix testimonial-carousel-widget-wrapper">

			<ul class="testimonial-list testimonial-list-widget list-0 clear-fix" id="testimonial-carousel-widget-<?php echo $this->data['data']->meta->id; ?>">
<?php
			global $post;
			$bPost=$post;

			$Validation=new TLThemeValidation();
			
			while($this->data['data']->query->have_posts())
			{
				$this->data['data']->query->the_post();
				if(in_array(get_the_ID(),$this->data['data']->exclude)) continue;

				$option=TLThemeOption::getPostMeta($post);
?>	
				<li class="clear-fix">
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
			}
			
			$post=$bPost;
?>
			</ul>

		</div>

		<div class="hidden">
			<script type="text/javascript">
			jQuery(document).ready(function() 
			{
				var theme=new TLTheme();
				theme.createTestimonialWidgetCarousel('<?php echo $this->data['data']->meta->id; ?>');
			});
			</script>
		</div>
<?php
			echo $this->data['html']['stop']; 
		}
?>