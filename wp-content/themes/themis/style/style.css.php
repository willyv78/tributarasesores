<?php

header('Content-type: text/css');
	
require_once('../../../../wp-load.php');
require_once('../include.php');

$CSS=new TLThemeCSS();
$Validation=new TLThemeValidation();

$media=array
(
	1	=>	array(),
	2	=>	array('min-width'=>768,'max-width'=>989),
	3	=>	array('min-width'=>480,'max-width'=>767),
	4	=>	array('max-width'=>479)
);

if(TLThemeOption::getOption('responsive_mode_enable')!=1)
	unset($media[2],$media[3],$media[4]);

/******************************************************************************/
/*	Background settings	                                                      */
/******************************************************************************/

$CSS->create(array
(
	'selector'	=>	array('body'),
	'property'	=>	array
	(
		'background-color'		=>	TLThemeOption::getOption('background_color'),
		'background-image'		=>	TLThemeOption::getOption('background_image'),
		'background-repeat'		=>	TLThemeOption::getOption('background_repeat'),
		'background-position'	=>	TLThemeOption::getOption('background_position')
	)
));

/******************************************************************************/
/*	Font				                                                      */
/******************************************************************************/

$selector=array
(
	'base'		=>	array
	(
		'a',
		'body',
		'input',
		'textarea',
		'.ui-tabs-panel',
		'.theme-accordion.ui-widget',
		'.theme-accordion.ui-widget .ui-accordion-content>div'
	),
	'h1'		=>	array
	(
		'h1',
		'h1 a',
		'p.dropcap span'
	),
	'h2'		=>	array
	(
		'h2',
		'h2 a',
		'span.menu-box-header',
		'div.single-post div.post-date span.day',
		'ul.blog-post-list li div.post-date span.day',
		'#comments #comments-number span.number'
	),
	'h3'		=>	array
	(
		'h3',
		'h3 a',
		'ul.sf-menu>li>a span.title',
		'div.widget ul.menu-box-widget li a span.menu-box-widget-header'
	),
	'h4'		=>	array
	(
		'h4',
		'h4 a',
		'span.menu-box-subheader',
		'.ui-state-active a',
		'.ui-state-active a:link',
		'.ui-state-active a:visited',
		'.ui-state-default a',
		'.ui-state-default a:link',
		'.ui-state-default a:visited',
		'div.widget-menu ul li a',
		
	),
	'h5'		=>	array
	(
		'h5',
		'h5 a',
		'ul.sf-menu>li>a span.subtitle',
		'div.widget ul.menu-box-widget li a span.menu-box-widget-subheader'
	),
	'h6'		=>	array
	(
		'h6',
		'h6 a'
	)
);

foreach($selector as $index=>$value)
{
	$CSS->create(array
	(
		'selector'	=>	$value,
		'property'	=>	array
		(
			'font-family'	=>	array(TLThemeOption::getOption('font_'.$index.'_family_google'),TLThemeOption::getOption('font_'.$index.'_family_system')),
			'font-size'		=>	TLThemeOption::getOption('font_'.$index.'_size'),
			'font-style'	=>	TLThemeOption::getOption('font_'.$index.'_style'),
			'font-weight'	=>	TLThemeOption::getOption('font_'.$index.'_weight'),
			'color'			=>	TLThemeOption::getOption('font_'.$index.'_color')
		)
	));	
}

if(TLThemeOption::getOption('responsive_mode_enable')==1)
{
	foreach($media as $mediaIndex=>$mediaValue)
	{
		$suffix=$mediaIndex==1 ? '' : '_'.$mediaIndex;

		foreach($selector as $selectorIndex=>$selectorValue)
		{
			$CSS->create(array
			(
				'media'		=>	$mediaValue,
				'selector'	=>	$selectorValue,
				'property'	=>	array
				(
					'font-size'	=>	TLThemeOption::getOption('font_'.$selectorIndex.'_size'.$suffix)
				)
			));		
		}
	}
}

/******************************************************************************/
/*	Header																	  */
/******************************************************************************/

$CSS->create(array
(
	'selector'	=>	array('div.header div.header-logo'),
	'property'	=>	array
	(
		'margin-top'			=>	TLThemeOption::getOption('header_logo_margin_top')
	)
));

$CSS->create(array
(
	'selector'	=>	array('div.header div.header-cite'),
	'property'	=>	array
	(
		'margin-top'			=>	TLThemeOption::getOption('header_cite_margin_top')
	)
));

$CSS->create(array
(
	'selector'	=>	array('div.header div.header-phone'),
	'property'	=>	array
	(
		'margin-top'			=>	TLThemeOption::getOption('header_company_phone_number_margin_top')
	)
));

/******************************************************************************/
/*	Infopanel																  */
/******************************************************************************/

$InfoPanelPost=new TLThemeInfoPanelPost();
$style=$InfoPanelPost->getInfoPanelStyle();

foreach($style as $index=>$value)
{
	$CSS->create(array
	(
		'selector'	=>	array('div.infopanel.infopanel-'.$index),
		'property'	=>	array
		(
			'padding-top'		=>	$value['infopanel_box_padding_top'],
			'padding-right'		=>	$value['infopanel_box_padding_right'],
			'padding-bottom'	=>	$value['infopanel_box_padding_bottom'],
			'padding-left'		=>	$value['infopanel_box_padding_left'],
			'background-color'	=>	$value['infopanel_box_bg_color']
		)
	));
	
	$CSS->create(array
	(
		'selector'	=>	array('div.infopanel.infopanel-'.$index.' h2'),
		'property'	=>	array
		(
			'color'		=>	$value['infopanel_first_line_text_color']
		)
	));
	
	$CSS->create(array
	(
		'selector'	=>	array('div.infopanel.infopanel-'.$index.' h4'),
		'property'	=>	array
		(
			'color'		=>	$value['infopanel_second_line_text_color']
		)
	));
	
	$CSS->create(array
	(
		'selector'	=>	array('div.infopanel.infopanel-'.$index.' a'),
		'property'	=>	array
		(
			'color'				=>	$value['infopanel_button_text_color'],
			'background-color'	=>	$value['infopanel_button_bg_color']
		)
	));
}

/******************************************************************************/
/*	Menu top																  */
/******************************************************************************/

foreach($media as $mediaIndex=>$mediaValue)
{
	$suffix=$mediaIndex==1 ? '' : '_'.$mediaIndex;
	
	// $CSS->create(array
	// (
	// 	'media'		=>	$mediaValue,
	// 	'selector'	=>	array
	// 	(
	// 		'ul.sf-menu>li'
	// 	),
	// 	'property'	=>	array
	// 	(
	// 		'width'		=> TLThemeOption::getOption('menu_top_item_dimension_width'.$suffix)
	// 	)
	// ));	
	
	$CSS->create(array
	(
		'media'		=>	$mediaValue,
		'selector'	=>	array
		(
			'ul.sf-menu>li ul',
			'ul.sf-menu>li ul li'
		),
		'property'	=>	array
		(
			'width'		=> TLThemeOption::getOption('menu_top_item_dimension_submenu_width'.$suffix)
		)
	));	

	$CSS->create(array
	(
		'media'		=>	$mediaValue,
		'selector'	=>	array
		(
			'ul.sf-menu>li:hover>ul li:hover ul',
			'ul.sf-menu>li.sfHover>ul li.sfHover ul'
		),
		'property'	=>	array
		(
			'left'		=> TLThemeOption::getOption('menu_top_item_dimension_submenu_width'.$suffix)
		)
	));

	$CSS->create(array
	(
		'media'		=>	$mediaValue,
		'selector'	=>	array
		(
			'ul.sf-menu>li'
		),
		'property'	=>	array
		(
			'margin-right'		=> TLThemeOption::getOption('menu_top_item_dimension_padding'.$suffix),
			'margin-left'		=> TLThemeOption::getOption('menu_top_item_dimension_padding'.$suffix)
		)
	));
}

if(TLThemeOption::getOption('responsive_mode_enable')==1)
{
	if(TLThemeOption::getOption('menu_top_mobile_visible_step')!=0)
	{
		if(TLThemeOption::getOption('menu_top_mobile_visible_step')==1) $maxWidth=989;
		if(TLThemeOption::getOption('menu_top_mobile_visible_step')==2) $maxWidth=769;
		if(TLThemeOption::getOption('menu_top_mobile_visible_step')==3) $maxWidth=479;

		$CSS->create(array
		(
			'media'		=>	array('min-width'=>0,'max-width'=>$maxWidth),
			'selector'	=>	array
			(
				'ul.sf-menu',
			),
			'property'	=>	array
			(
				'display'		=> 'none'
			)
		));

		$CSS->create(array
		(
			'media'		=>	array('min-width'=>0,'max-width'=>$maxWidth),
			'selector'	=>	array
			(
				'select.dp-menu',
			),
			'property'	=>	array
			(
				'display'		=> 'block'
			)
		));	
	}
}

/******************************************************************************/
/*	Colors																	  */
/******************************************************************************/

	/**************************************************************************/
	/*  Color / Text color													  */
	/**************************************************************************/	

	/**************************************************************************/
	/*  Color / Text color / Group 1										  */
	/**************************************************************************/	

	$CSS->create(array
	(
		'selector'	=>	array
		(
			'span.menu-box-subheader',
			'div.notice-box a',
			'div.notice-box h4',
			'div.header div.header-cite h4.header-cite-second-line',
			'div.header div.header-phone h4.header-phone-second-line',
			'div.latest-tweets ul li div span',
			'.single-image div.gallery-bottom-box h5',
			'div.widget div.latest-post>ul>li div.date span',
			'div.widget div.most-viewed>ul>li div.date span',
			'div.widget div.most-commented>ul>li div.date span',
			'div.widget ul.menu-box-widget li a span.menu-box-widget-subheader',
			'ul.sf-menu>li>a span.subtitle',
			'div.widget-menu ul li a',
			'ul.blog-post-list li a.post-read-more',
			'ul.gallery-item-list li div.gallery-bottom-box h5',
			'ul.pricing-list li .pricing-list-name',
			'ul.pricing-list li .pricing-list-price',
			'.ui-state-default a',
			'.ui-state-default a:link',
			'.ui-state-default a:visited',
			'div.footer-bottom>div.main a',
			'select.dp-menu'
		),
		'property'	=>	array
		(
			'color'		=> TLThemeOption::getOption('text_color_group_1')
		)
	));
	
	/**************************************************************************/
	/*  Color / Text color / Group 2										  */
	/**************************************************************************/	

	$CSS->create(array
	(
		'selector'	=>	array
		(
			'a,a:hover',
			'div.single-post div.post-date',
			'div.blog-pagination a:hover',
			'div.blog-pagination span',
			'div.comment-pagination a:hover',
			'div.comment-pagination span',
			'div.testimonial-carousel-pagination a:hover',
			'div.testimonial-carousel-pagination a.selected',
			'div.carousel-pagination a:hover',
			'div.carousel-pagination a.selected',
			'div.widget div.latest-post>ul>li h6 a',
			'div.widget div.most-viewed>ul>li h6 a',
			'div.widget div.most-commented>ul>li h6 a',
			'.single-image div.gallery-bottom-box-hover h5',
			'form input[type="submit"]:hover',
			'form input[type="button"]:hover',
			'ul.feature-list-1 li h6',
			'ul.feature-list-2 li h6',
			'ul.blog-post-list li div.post-date',
			'ul.blog-post-list li a.post-read-more:hover',
			'ul.gallery-item-list li div.gallery-bottom-box-hover h5',
			'.ui-state-active a',
			'.ui-state-active a:link',
			'.ui-state-active a:hover',
			'.ui-state-active a:visited',
			'.ui-state-default a:hover',
			'.qtip .qtip-content',
			'.ui-tabs-panel a',
			'.ui-tabs-panel a:hover',
			'.ui-accordion-content a',
			'.ui-accordion-content a:hover',
			'#comments #comments-number',
			'div.widget-menu ul li.current-menu-item>a',
			'div.widget-menu ul li.current_page_parent>a',
			'div.widget-menu ul li.current-menu-ancestor>a',
			'div.widget-menu ul li.current-page-ancestor>a',
			'div.widget-menu ul li.widget-menu-element-selected>a',
			'div.widget-menu ul li a:hover'
		),
		'property'	=>	array
		(
			'color'		=> TLThemeOption::getOption('text_color_group_2')
		)
	));
	
	/**************************************************************************/
	/*  Color / Text color / Group 3										  */
	/**************************************************************************/	

	$CSS->create(array
	(
		'selector'	=>	array
		(
			'ul.testimonial-list li .testimonial-list-company',
			'div.footer-bottom>div.main'
		),
		'property'	=>	array
		(
			'color'		=> TLThemeOption::getOption('text_color_group_3')
		)
	));
	
	/**************************************************************************/
	/*  Color / Text color / Group 4										  */
	/**************************************************************************/	

	$CSS->create(array
	(
		'selector'	=>	array
		(
			'.google-map a'
		),
		'property'	=>	array
		(
			'color'		=> TLThemeOption::getOption('text_color_group_4')
		)
	));
	
	/**************************************************************************/
	/*  Color / Text color / Group 5										  */
	/**************************************************************************/	

	$CSS->create(array
	(
		'selector'	=>	array
		(
			'#fancybox-title-inside'
		),
		'property'	=>	array
		(
			'color'		=> TLThemeOption::getOption('text_color_group_5')
		)
	));
		
	/**************************************************************************/
	/*  Color / Background color											  */
	/**************************************************************************/	

	/**************************************************************************/
	/*  Color / Background color / Group 1									  */
	/**************************************************************************/	

	$CSS->create(array
	(
		'selector'	=>	array
		(
			'h1 span.underline',
			'h2 span.underline',
			'h3 span.underline',
			'h4 span.underline',
			'h5 span.underline',
			'h6 span.underline',
			'ul.blog-post-list li div.post-date',
			'ul.gallery-item-list li div.gallery-bottom-box>div.hover',
			'form input[type="submit"]:hover',
			'form input[type="button"]:hover',
			'ul.blog-post-list li a.post-read-more:hover',
			'.single-image div.gallery-bottom-box>div.hover',
			'div.single-post div.post-date',
			'#comments #comments-number'
		),
		'property'	=>	array
		(
			'background-color'		=> TLThemeOption::getOption('background_color_group_1')
		)
	));
	
	/**************************************************************************/
	/*  Color / Background color / Group 2									  */
	/**************************************************************************/	

	$CSS->create(array
	(
		'selector'	=>	array
		(		
			'div.latest-tweets ul li div',
			'div.widget div.latest-post>ul>li div.date',
			'div.widget div.most-viewed>ul>li div.date',
			'div.widget div.most-commented>ul>li div.date',
			'div.single-post div.post-tag ul li span',
			'.single-image div.gallery-bottom-box>div.default',
			'ul.blog-post-list li a.post-read-more',
			'form input[type="submit"]',
			'form input[type="button"]',
			'ul.blog-post-list li div.post-tag ul li span',
			'ul.gallery-item-list li div.gallery-bottom-box>div.default',
			'.theme-tab.ui-tabs .ui-tabs-nav .ui-state-active',
			'.wp-caption',
			'select.dp-menu'
		),
		'property'	=>	array
		(
			'background-color'		=> TLThemeOption::getOption('background_color_group_2')
		)
	));
	
	/**************************************************************************/
	/*  Color / Background color / Group 3									  */
	/**************************************************************************/	

	$CSS->create(array
	(
		'selector'	=>	array
		(
			'div.notice-box>div',
			'ul.feature-list-2 li'
		),
		'property'	=>	array
		(
			'background-color'		=> TLThemeOption::getOption('background_color_group_3')
		)
	));
	
	/**************************************************************************/
	/*  Color / Background color / Group 4									  */
	/**************************************************************************/	

	$CSS->create(array
	(
		'selector'	=>	array
		(
			'.qtip.qtip-error'
		),
		'property'	=>	array
		(
			'background-color'		=> TLThemeOption::getOption('background_color_group_4')
		)
	));
	
	/**************************************************************************/
	/*  Color / Background color / Group 5									  */
	/**************************************************************************/	

	$CSS->create(array
	(
		'selector'	=>	array
		(
			'.qtip.qtip-success'
		),
		'property'	=>	array
		(
			'background-color'		=> TLThemeOption::getOption('background_color_group_5')
		)
	));
	
	/**************************************************************************/
	/*  Color / Background color / Group 6									  */
	/**************************************************************************/	

	$CSS->create(array
	(
		'selector'	=>	array
		(
			'ul.sf-menu li:hover ul li:hover>a',
			'ul.sf-menu li.sfHover ul li.sfHover>a',
			'ul.sf-menu li:hover ul li.current-menu-item>a',
			'ul.sf-menu li.sfHover ul li.current-menu-item>a',
			'ul.sf-menu li:hover ul li.current-menu-ancestor>a',
			'ul.sf-menu li.sfHover ul li.current-menu-ancestor>a',
			'ul.sf-menu li:hover ul li.current-page-ancestor>a',
			'ul.sf-menu li.sfHover ul li.current-page-ancestor>a',
			'ul.sf-menu li:hover ul li.current_page_parent>a',
			'ul.sf-menu li.sfHover ul li.current_page_parent>a'	 
		),
		'property'	=>	array
		(
			'background-color'		=> TLThemeOption::getOption('background_color_group_6')
		)
	));
	
	/**************************************************************************/
	/*  Color / Background color / Group 7									  */
	/**************************************************************************/	

	$CSS->create(array
	(
		'selector'	=>	array
		(
			'ul.sf-menu>li ul li a',
			'.menu-fixed'
		),
		'property'	=>	array
		(
			'background-color'		=> TLThemeOption::getOption('background_color_group_7')
		)
	));
	
	/**************************************************************************/
	/*  Color / Background color / Group 8									  */
	/**************************************************************************/	

	$CSS->create(array
	(
		'selector'	=>	array
		(
			'div.footer-bottom'
		),
		'property'	=>	array
		(
			'background-color'		=> TLThemeOption::getOption('background_color_group_8')
		)
	));
	
	/**************************************************************************/
	/*  Color / Border color / Group 1										  */
	/**************************************************************************/	

	$CSS->create(array
	(
		'selector'	=>	array
		(
			'div.blog-pagination span.current',
			'div.blog-pagination a:hover',
			'div.comment-pagination span.current',
			'div.comment-pagination a:hover',
			'div.testimonial-carousel-pagination a:hover',
			'div.testimonial-carousel-pagination a.selected',
			'div.carousel-pagination a:hover',
			'div.carousel-pagination a.selected',
			'div.widget ul.category-list li>a:hover',
			'div.widget ul.category-list li.current-cat>a',
			'div.menu-box ul.menu-box li:hover',
			'div.widget ul.menu-box-widget li a:hover',
			'div.single-post div.post-tag li a:hover',
			'ul.blog-post-list li div.post-tag li a:hover',
			'ul.gallery-filter-menu li a:hover',
			'ul.gallery-filter-menu li a.selected',
			'ul.sf-menu>li:hover>a',
			'ul.sf-menu>li.sfHover>a',
			'ul.sf-menu>li.current-menu-item>a',
			'ul.sf-menu>li.current_page_parent>a',	
			'ul.sf-menu>li.current-menu-ancestor>a',
			'ul.sf-menu>li.current-page-ancestor>a',
			'div.widget-menu ul li.current-menu-item>a',
			'div.widget-menu ul li.current_page_parent>a',
			'div.widget-menu ul li.current-menu-ancestor>a',
			'div.widget-menu ul li.current-page-ancestor>a',
			'div.widget-menu ul li.widget-menu-element-selected>a',
			'div.widget-menu ul li a:hover'
		),
		'property'	=>	array
		(
			'border-color'		=> TLThemeOption::getOption('border_color_group_1')
		)
	));
	
	/**************************************************************************/
	/*  Color / Border color / Group 2										  */
	/**************************************************************************/	

	$CSS->create(array
	(
		'selector'	=>	array
		(
			'div.page-content',
			'div.menu-box ul.menu-box li',
			'div.header div.header-cite',
			'div.widget ul.category-list li>a',
			'div.single-post div.post-tag li a',
			'ul.blog-post-list li div.post-tag li a',
			'div.single-post div.post-tag li span',
			'ul.blog-post-list li div.post-tag li span',
			'div.blog-pagination a',
			'div.blog-pagination span',
			'div.comment-pagination a',
			'div.comment-pagination span',
			'div.widget ul.menu-box-widget li a',
			'div.testimonial-carousel-pagination a',
			'div.carousel-pagination a',
			'div.single-post div.post-info div.post-info-bar',
			'ul.company-info li',
			'.form-field',
			'ul.testimonial-list li>div',
			'ul.gallery-filter-menu li a',
			'ul.blog-post-list li div.post-info div.post-info-bar',
			'ul.pricing-list li',
			'ul.sf-menu>li>a',
			'.theme-accordion .ui-accordion-header.ui-state-default',
			'.theme-tab.ui-tabs .ui-tabs-panel',
			'.theme-tab.ui-tabs .ui-tabs-nav .ui-state-default',
			'#comments_list>ul>li .comment-avatar',
			'#comments_list>ul>li .comment-infobar',
			'#respond',
			'div.menu-box-wrapper',
			'div.widget-menu ul li a'
		),
		'property'	=>	array
		(
			'border-color'		=> TLThemeOption::getOption('border_color_group_2')
		)
	));

	/**************************************************************************/
	/*  Color / Border color / Group 3										  */
	/**************************************************************************/	

	$CSS->create(array
	(
		'selector'	=>	array
		(
			'ul.sf-menu>li ul li a'
		),
		'property'	=>	array
		(
			'border-color'		=> TLThemeOption::getOption('border_color_group_3')
		)
	));
	
	/**************************************************************************/	
	/*	Qtip																  */
	/**************************************************************************/
	
	$CSS->create(array
	(
		'selector'	=>	array
		(
			'.qtip.qtip-error .qtip-tip',
			'.qtip.qtip-error .qtip-tip canvas'
		),
		'property'	=>	array
		(
			'border-color'		=> TLThemeOption::getOption('background_color_group_4')
		)
	));
	
	$CSS->create(array
	(
		'selector'	=>	array
		(
			'.qtip.qtip-success .qtip-tip',
			'.qtip.qtip-success .qtip-tip canvas'
		),
		'property'	=>	array
		(
			'border-color'		=> TLThemeOption::getOption('background_color_group_5')
		)
	));
	
/******************************************************************************/
/*  Selection color															  */
/******************************************************************************/	

if($Validation->isHexColor(TLThemeOption::getOption('copy_selection_text_color')))
{
	$CSS->create(array
	(
		'selector'	=>	array
		(
			'::selection'
		),
		'property'	=>	array
		(
			'color'				=>	TLThemeOption::getOption('copy_selection_text_color'),
		)
	));

	$CSS->create(array
	(
		'selector'	=>	array
		(
			'::-moz-selection'
		),
		'property'	=>	array
		(
			'color'				=>	TLThemeOption::getOption('copy_selection_text_color'),
		)
	));
}

if($Validation->isHexColor(TLThemeOption::getOption('copy_selection_background_color')))
{
	$CSS->create(array
	(
		'selector'	=>	array
		(
			'::selection'
		),
		'property'	=>	array
		(
			'background'	=>	'none repeat scroll 0 0 #'.TLThemeOption::getOption('copy_selection_background_color')
		)
	));

	$CSS->create(array
	(
		'selector'	=>	array
		(
			'::-moz-selection'
		),
		'property'	=>	array
		(
			'background'	=>	'none repeat scroll 0 0 #'.TLThemeOption::getOption('copy_selection_background_color')
		)
	));
}

/******************************************************************************/
/*	Custom styles		                                                      */
/******************************************************************************/	
	
if((isset($media[1])) && ($Validation->isNotEmpty(TLThemeOption::getOption('custom_css_responsive_1')))) 
	echo TLThemeOption::getOption('custom_css_responsive_1');
	
if((isset($media[2])) && ($Validation->isNotEmpty(TLThemeOption::getOption('custom_css_responsive_2'))))
{
echo
'
@media only screen  and (min-width:768px) and (max-width:989px)
{
'.TLThemeOption::getOption('custom_css_responsive_2').'
}
';
}

if((isset($media[3])) && ($Validation->isNotEmpty(TLThemeOption::getOption('custom_css_responsive_3'))))
{
echo
'
@media only screen  and (min-width:480px) and (max-width:767px)
{
'.TLThemeOption::getOption('custom_css_responsive_3').'
}
';
}

if((isset($media[4])) && ($Validation->isNotEmpty(TLThemeOption::getOption('custom_css_responsive_4'))))
{
echo
'
@media only screen  and (max-width:479px)
{
'.TLThemeOption::getOption('custom_css_responsive_4').'
}
';
}
	
?>