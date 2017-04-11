		<div name="team_div" class="clear-fix team <?php echo ($this->data->meta->carousel==1 ? 'team-carousel-enable preloader' : 'team-carousel-disable') ?> team-header-<?php echo ($this->data->meta->header_enable==1 ? 'enable' : 'disable'); ?> <?php echo TLThemeHelper::esc_attr($this->data->meta->css_class); ?>" id="<?php echo TLThemeHelper::esc_attr($this->data->meta->id); ?>">
<?php
		$i=0;
		
		global $post;
		$bPost=$post;
		
		$Layout=new TLThemeLayout();
		$Validation=new TLThemeValidation();
		
		if($Validation->isNotEmpty($this->data->meta->header))
			echo do_shortcode('['.THEME_CONTEXT.'_header important="3" css_class="top-0"]'.TLThemeHelper::esc_html($this->data->meta->header).'[/'.THEME_CONTEXT.'_header]');
?>
			<ul name="team_ul" class="list-0 clear-fix team-list layout-p-<?php echo TLThemeHelper::esc_attr($this->data->meta->layout); ?>">
<?php
		while($this->data->query->have_posts())
		{
			$this->data->query->the_post();
			if(in_array(get_the_ID(),$this->data->exclude)) continue;
			
			$class=array();
			$class[]=$Layout->getLayoutColumnNameByIndex($i,$this->data->meta->layout);
?>
				<li name="team_li" class="<?php echo trim(join(' ',$class)); ?>">

					<div name="team_clear_fix" class="clear-fix single-image">
						<div>
<?php
			if($this->data->post[get_the_ID()]->use_link==1)
			{
?>
							<a name="team_a" href="<?php echo TLThemeHelper::esc_attr($this->data->post[get_the_ID()]->url); ?>" class="preloader <?php echo ($this->data->meta->url_new_window==1 ? 'target-blank' : null); ?> <?php echo TLThemeHelper::esc_attr($this->data->post[get_the_ID()]->link_class); ?>" <?php echo $this->data->post[get_the_ID()]->link_rel; ?>>
								<img name="team_img" src="<?php echo TLThemeHelper::esc_attr($this->data->post[get_the_ID()]->thumbnail); ?>" alt="<?php the_title(); ?>" />
							</a>				
<?php				
			}
			else
			{
?>
							<div class="preloader <?php echo TLThemeHelper::esc_attr($this->data->post[get_the_ID()]->link_class); ?>" <?php echo $this->data->post[get_the_ID()]->link_rel; ?>>
								<img name="team_img" src="<?php echo TLThemeHelper::esc_attr($this->data->post[get_the_ID()]->thumbnail); ?>" alt="<?php the_title(); ?>" />
							</div>				
<?php
			}
?>
							<div class="hidden"><?php the_excerpt(); ?></div>
						</div>
						<div class="gallery-bottom-box">
							<div class="default"></div>
							<div class="hover"></div>
							<h3><?php the_title(); ?></h3>
							<h5><?php echo TLThemeHelper::esc_html($this->data->post[get_the_ID()]->option['team_position']); ?></h5>
						</div>
					</div>
<?php
			if($Validation->isNotEmpty(get_the_excerpt()))
			{
?>
					<div name="team_paragraph" class="paragraph team-item-list-excerpt"><?php the_excerpt(); ?></div>
<?php
			}
			if($Validation->isNotEmpty($this->data->post[get_the_ID()]->option['team_link']))
			{
?>
					<div class="paragraph team-item-list-link">
						<a href="<?php echo TLThemeHelper::esc_attr($this->data->post[get_the_ID()]->option['team_link']); ?>" class="more"><?php TLThemeTranslator::esc_html_e('Learn more','team_learn_more_link'); ?></a>
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
<?php
		if($this->data->meta->carousel==1)
		{
?>
			<div>
				<a href="#" class="navigation-prev"><span>Anterior</span></a>
				<a href="#" class="navigation-next"><span>Siguiente</span></a>
			</div>
<?php
		}
?>
		</div>
<?php
		if($this->data->meta->carousel==1)
		{
?>
		<div class="hidden">
			<script type="text/javascript">
			jQuery(document).ready(function() 
			{
				var theme=new TLTheme();
				theme.createTeam('<?php echo $this->data->meta->id; ?>',<?php echo json_encode($this->data->option); ?>);
			});
			</script>
		</div>
<?php
		}
?>