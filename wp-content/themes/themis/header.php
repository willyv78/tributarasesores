<?php ob_start(); ?>

		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php
		global $post,$parentPost;

		$Post=new TLThemePost();
		$Menu=new TLThemeMenu();
		$Validation=new TLThemeValidation();
		
		if(($parentPost=$Post->getPost())===false) 
		{
			$parentPost=new stdClass();
			$parentPost->post=$post;
		}
?>
		<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

			<head>

				<title><?php echo get_bloginfo('name'); ?><?php wp_title('|'); ?></title> 
				<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
				<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
				<meta name="format-detection" content="telephone=no"/>
<?php
		if(TLThemeOption::getOption('responsive_mode_enable')==1)
		{
?>
				<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<?php
		}
?>
				<link rel="pingback" href="<?php bloginfo("pingback_url"); ?>" />
				<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<?php				
		if($Validation->isNotEmpty(TLThemeOption::getOption('favicon_url')))
		{
?>
				<link rel="shortcut icon" href="<?php echo TLThemeHelper::esc_attr(TLThemeOption::getOption('favicon_url')); ?>" />
<?php
		}
					
		wp_head(); 
?>
			</head>

			<body <?php body_class(); ?>>

				<div class="main box-center clear-fix">

					<div class="header clear-fix">
<?php
			if($Validation->isNotEmpty(TLThemeOption::getOption('header_logo_image_url')))
			{
				$output='<img src="'.TLThemeHelper::esc_attr(TLThemeOption::getOption('header_logo_image_url')).'" alt="'.TLThemeHelper::esc_attr(TLThemeOption::getOption('header_logo_alternate_text')).'" />';
				if($Validation->isNotEmpty(TLThemeOption::getOption('header_logo_link_url')))
					$output='<a href="'.TLThemeHelper::esc_attr(TLThemeOption::getOption('header_logo_link_url')).'" title="'.TLThemeHelper::esc_attr(TLThemeOption::getOption('header_logo_alternate_text')).'">'.$output.'</a>';
?>
						<div class="header-logo"><?php echo $output; ?></div>
<?php
			}

			if(($Validation->isNotEmpty(TLThemeOption::getOption('header_cite_first_line'))) || ($Validation->isNotEmpty(TLThemeOption::getOption('header_cite_second_line'))))
			{
?>		
						<div class="header-cite">
							<h4 class="header-cite-first-line"><?php TLThemeTranslator::esc_html_e('Realize your constitutional right','header_cite_first_line',null); ?></h4>
							<h4 class="header-cite-second-line"><?php TLThemeTranslator::esc_html_e('with qualified help','header_cite_second_line',null); ?></h4>
						</div>			
<?php
			}
			if((TLThemeOption::getOption('header_company_phone_number_visible')==1) && ($Validation->isNotEmpty(TLThemeOption::getOption('company_info_company_phone'))))
			{
?>
						<div class="header-phone">
							<h4 class="header-phone-first-line">PBX: +571 744 4834</h4>
							<h4 class="header-phone-second-line">FAX: +571 744 4831</h4>
						</div>
<?php
			}
?>
					</div>
<?php 
			echo $Menu->create(); 
?>