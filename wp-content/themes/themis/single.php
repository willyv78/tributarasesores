<?php 
		get_header(); 

		global $parentPost;

		$WidgetArea=new TLThemeWidgetArea();

		$widgetAreaData=$WidgetArea->getWidgetAreaByPost($parentPost->post,true,true);
		$class=$WidgetArea->getWidgetAreaCSSClass($widgetAreaData);
?>
		<div class="page">
<?php
		if(TLThemeOption::getGlobalOption($parentPost->post,'header_visible')==1)
		{
?>
			<div class="page-header">
				<h1><?php echo $parentPost->post->post_title; ?></h1>
			</div>
<?php
		}
?>
			<div class="page-content clear-fix <?php echo $class; ?>">
<?php
		if($widgetAreaData['location']==1)
		{
?>
				<div class="column-left"><?php $WidgetArea->create($widgetAreaData); ?></div>
				<div class="column-right"><?php get_template_part('single','content'); ?></div>
<?php
		}
		elseif($widgetAreaData['location']==2)
		{
?>
				<div class="column-left"><?php get_template_part('single','content'); ?></div>
				<div class="column-right"><?php $WidgetArea->create($widgetAreaData); ?></div>		
<?php
		}
		else get_template_part('single','content')
?>
			</div>

		</div>
<?php 
		get_footer(); 
?>