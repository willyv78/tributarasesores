		<ul class="list-0 clear-fix feature-list feature-list-<?php echo TLThemeHelper::esc_attr($this->data->meta->type); ?> layout-p-<?php echo TLThemeHelper::esc_attr($this->data->meta->layout); ?> <?php echo TLThemeHelper::esc_attr($this->data->meta->css_class); ?>">
<?php
		$i=0;
		
		global $post;
		$bPost=$post;
		
		$Layout=new TLThemeLayout();
		$Validation=new TLThemeValidation();

		while($this->data->query->have_posts())
		{
			$this->data->query->the_post();
			if(in_array(get_the_ID(),$this->data->exclude)) continue;
			
			$option=TLThemeOption::getPostMeta($post);
			
			TLThemeHelper::removeUIndex($option,'feature_url','feature_url_window_target','feature_icon');
			
			$class=(array)$Layout->getLayoutColumnNameByIndex($i,$this->data->meta->layout);

			$link=array(null,null);

			if($Validation->isURL($option['feature_url']))
			{
				$link[0]='<a href="'.TLThemeHelper::esc_attr($option['feature_url']).'" '.($option['feature_url_window_target']=='_blank' ? 'class="target-blank"' : '').' title="'.get_the_title().'">';
				$link[1]='</a>';
			}
?>
			<li class="<?php echo join(' ',$class); ?>">
<?php
			if($this->data->meta->type==1)
			{
?>
				<div class="icon-4 icon-4-<?php echo TLThemeHelper::esc_attr($option['feature_icon']); ?>"></div>
				<h4><?php echo $link[0].get_the_title().$link[1]; ?></h4>
				<div><?php the_content(); ?></div>
<?php
			}
			else
			{
?>
				<div class="feature-list-padding">
					<div class="icon-4 icon-4-<?php echo TLThemeHelper::esc_attr($option['feature_icon']); ?>"></div>
					<h4><?php echo $link[0].get_the_title().$link[1]; ?></h4>
					<div><?php the_content(); ?></div>
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