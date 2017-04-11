<?php

/******************************************************************************/

global $shortCodeData;

/******************************************************************************/

$Theme=new TLTheme();
$List=new TLThemeList();
$Video=new TLThemeVideo();
$Image=new TLThemeImage();
$Button=new TLThemeButton();
$Layout=new TLThemeLayout();
$Divider=new TLThemeDivider();
$Notice=new TLThemeNoticeBox();
$Gallery=new TLThemeGalleryPost();
$Feature=new TLThemeFeaturePost();
$NivoSlider=new TLThemeNivoSlider();
$CompanyInfo=new TLThemeCompanyInfo();
$InfoPanel=new TLThemeInfoPanelPost();
$CarouFredSel=new TLThemeCarouFredSel();

/******************************************************************************/

$windowTarget=TLThemeHelper::extractDictionary(array_combine(array_keys($Theme->windowTarget),array_values($Theme->windowTarget)),array('useDefault'));

/******************************************************************************/

$buttonSize=TLThemeHelper::extractDictionary(array_combine(array_keys($Button->buttonSize),array_values($Button->buttonSize)),array('useDefault'));
$buttonIcon=TLThemeHelper::extractDictionary(array_combine(array_keys($Button->buttonIcon),array_values($Button->buttonIcon)),array('useNone'));
$buttonIconPosition=TLThemeHelper::extractDictionary(array_combine(array_keys($Button->buttonIconPosition),array_values($Button->buttonIconPosition)),array('useDefault'));

/******************************************************************************/

$layoutData=TLThemeHelper::extractDictionary(array_combine(array_keys($Layout->layout),array_keys($Layout->layout)),array('useDefault'));

/******************************************************************************/

$diverBorderStyle=TLThemeHelper::extractDictionary(array_combine(array_keys($Divider->borderStyle),array_values($Divider->borderStyle)),array('useDefault'),0);

/******************************************************************************/

$videoType=TLThemeHelper::extractDictionary(array_combine(array_keys($Video->mediaType),array_values($Video->mediaType)),array('useDefault'));

/******************************************************************************/

$pricingListCategory=TLThemeHelper::createTermDictionary(THEME_CONTEXT.'_pricing_list_category',array(),array(),array('useNone'));

/******************************************************************************/

$faqCategory=TLThemeHelper::createTermDictionary(THEME_CONTEXT.'_faq_category',array(),array(),array('useNone'));

/******************************************************************************/

$testimonialCategory=TLThemeHelper::createTermDictionary(THEME_CONTEXT.'_testimonial_category',array(),array(),array('useNone'));

/******************************************************************************/

$featureCategory=TLThemeHelper::createTermDictionary(THEME_CONTEXT.'_feature_category',array(),array(),array('useNone'));
$featureStyle=TLThemeHelper::extractDictionary(array_combine(array_keys($Feature->style),array_values($Feature->style)),array('useDefault'));

/******************************************************************************/

$teamCategory=TLThemeHelper::createTermDictionary(THEME_CONTEXT.'_team_category',array(),array(),array('useNone'));

/******************************************************************************/

$companyInfoType=TLThemeHelper::extractDictionary(array_combine(array_keys($CompanyInfo->type),array_values($CompanyInfo->type)),array('useDefault'));

/******************************************************************************/

$noticeType=TLThemeHelper::extractDictionary(array_combine(array_keys($Notice->type),array_values($Notice->type)),array('useDefault'));

/******************************************************************************/

$GoogleMap=new TLThemeGoogleMap();

$googleZoomLevel=array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'));
for($i=0;$i<=21;$i++) $googleZoomLevel[$i]=$i;

/******************************************************************************/

$infopanelDictionary=$InfoPanel->createDictionary();

/******************************************************************************/

$imageDictionary=TLThemeHelper::extractDictionary(array_combine(array_keys($Image->image),array_values($Image->image)),array('useDefault'),2);

/******************************************************************************/

$nivoSliderEffect=TLThemeHelper::extractDictionary(array_combine(array_keys($NivoSlider->effect),array_values($NivoSlider->effect)),array('useDefault'),0);

/******************************************************************************/

$galleryCategory=TLThemeHelper::createTermDictionary(THEME_CONTEXT.'_gallery_category',array(),array(),array('useNone'));
$galleryCategorySelected=TLThemeHelper::createTermDictionary(THEME_CONTEXT.'_gallery_category',array(),array(),array('useNone'),'id');
$galleryLayout=TLThemeHelper::extractDictionary(array_combine(array_keys($Gallery->galleryLayout),array_values($Gallery->galleryLayout)),array('useDefault'));

/******************************************************************************/

$listType=TLThemeHelper::extractDictionary(array_combine(array_keys($List->type),array_values($List->type)),array('useDefault'));

/******************************************************************************/

$easingType=TLThemeHelper::extractDictionary(array_combine(array_values($Theme->easingType),array_values($Theme->easingType)),array('useDefault'));

/******************************************************************************/

$carouFredSelEffect=TLThemeHelper::extractDictionary(array_combine(array_keys($CarouFredSel->effect),array_values($CarouFredSel->effect)),array('useDefault'));
$carouFredSelDirection=TLThemeHelper::extractDictionary(array_combine(array_keys($CarouFredSel->direction),array_values($CarouFredSel->direction)),array('useDefault'));

/******************************************************************************/

$postCategory=TLThemeHelper::createTermDictionary('category',array(),array(),array('useNone'));

/******************************************************************************/

$shortCodeData=array
(
	'accordion'																	=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Accordion: Accordion')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates accordion.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Active'),
				'legend'														=>	array(TLThemeTranslator::esc_html__('The zero-based index of the panel that is active (open).'),TLThemeTranslator::esc_html__('Value \'false\' means that all items will be closed at start.')),
				'field'															=>	array
				(
					'active'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		),
		'hidden_content'														=>	$ShortCodeManager->createShortCode('accordion_item',TLThemeTranslator::esc_html__('Content of first panel'),array('header'=>'Header #1')).$ShortCodeManager->createShortCode('accordion_item',TLThemeTranslator::esc_html__('Content of second panel'),array('header'=>'Header #2'),array(null,'<br/>'))
	),
	'accordion_item'															=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Accordion: Accordion item')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates single panel of accordion.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Header'),
				'field'															=>	array
				(
					'header'													=>	array
					(	
						'type'													=>	'text'					
					)
				)
			)
		),
		'hidden_content'														=>	TLThemeTranslator::esc_html__('Content of panel')
	),
	'latest_posts'																=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Blog: Latest post')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode latest posts list.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Category'),
				'legend'														=>	TLThemeTranslator::esc_html__('Select categories from which posts have to be retrieved.'),
				'field'															=>	array
				(
					'category'													=>	array
					(
						'type'													=>	'checkbox',
						'data'													=>	$postCategory
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Post count'),
				'legend'														=>	TLThemeTranslator::esc_html__('Number of posts which have to be displayed.'),
				'field'															=>	array
				(
					'numberposts'												=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Limit number of characters'),
				'legend'														=>	TLThemeTranslator::esc_html__('Limit number of characters in post excerpt.'),
				'field'															=>	array
				(
					'post_excerpt_char_limit'									=>	array
					(
						'type'													=>	'text'					
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Limit number of words'),
				'legend'														=>	TLThemeTranslator::esc_html__('Limit number of words in post excerpt.'),
				'field'															=>	array
				(
					'post_excerpt_word_limit'									=>	array
					(
						'type'													=>	'text'					
					)
				)
			),			
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Show "Read more" link'),
				'legend'														=>	TLThemeTranslator::esc_html__('Show "Read more" link in post excerpt.'),
				'field'															=>	array
				(
					'show_read_more'											=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Yes'),0=>TLThemeTranslator::esc_html__('No'))
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
		)
	),	
	'button'																	=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Buttons: Button')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates button.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Label'),
				'legend'														=>	TLThemeTranslator::esc_html__('Label of a button.'),
				'field'															=>	array
				(
					'label'														=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('URL'),
				'legend'														=>	TLThemeTranslator::esc_html__('URL address of a link.'),
				'field'															=>	array
				(
					'href'														=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Target'),
				'legend'														=>	TLThemeTranslator::esc_html__('Target of a link.'),
				'field'															=>	array
				(
					'target'													=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	$windowTarget
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Button size'),
				'legend'														=>	TLThemeTranslator::esc_html__('Select size of a button.'),
				'field'															=>	array
				(
					'size'														=>	array
					(
						'type'													=>	'radio',
						'data'													=>	$buttonSize
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Icon'),
				'legend'														=>	TLThemeTranslator::esc_html__('Select icon.'),
				'field'															=>	array
				(
					'icon'														=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	$buttonIcon
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Icon position'),
				'legend'														=>	TLThemeTranslator::esc_html__('Select position of a icon.'),
				'field'															=>	array
				(
					'icon_position'												=>	array
					(
						'type'													=>	'radio',
						'data'													=>	$buttonIconPosition
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Background color'),
				'legend'														=>	TLThemeTranslator::esc_html__('Background color (in HEX) of a button.'),
				'field'															=>	array
				(
					'bg_color'													=>	array
					(
						'type'													=>	'text',
						'html_attribute'										=>	array('class'=>'color-picker')
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Text color'),
				'legend'														=>	TLThemeTranslator::esc_html__('Text color (in HEX) of a button.'),
				'field'															=>	array
				(	
					'text_color'												=>	array
					(
						'type'													=>	'text',
						'html_attribute'										=>	array('class'=>'color-picker')
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Background color (on hover)'),
				'legend'														=>	TLThemeTranslator::esc_html__('Background color (in HEX) of a button (on hover).'),
				'field'															=>	array
				(
					'bg_color_hover'											=>	array
					(
						'type'													=>	'text',
						'html_attribute'										=>	array('class'=>'color-picker')
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Text color (on hover)'),
				'legend'														=>	TLThemeTranslator::esc_html__('Text color (in HEX) of a button (on hover).'),
				'field'															=>	array
				(
					'text_color_hover'											=>	array
					(
						'type'													=>	'text',
						'html_attribute'										=>	array('class'=>'color-picker')
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		)
	),
	'company_info'																=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Company: Company info')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates list of company details based on theme settings.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('List type'),
				'field'															=>	array
				(
					'type'														=>	array
					(
						'type'													=>	'radio',
						'data'													=>	$companyInfoType
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
		)
	),
	'contact_form'																=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Form: Contact Form')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates contact form based on theme settings.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		)
	),
	'divider'																	=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Divider: Divider')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates divider.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Line height'),
				'legend'														=>	TLThemeTranslator::esc_html__('Line height in px.'),
				'field'															=>	array
				(
					'line_height'												=>	array
					(
						'type'													=>	'text'					
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Line style'),
				'field'															=>	array
				(
					'line_style'												=>	array
					(
						'type'													=>	'radio',
						'data'													=>	$diverBorderStyle
					)
				)
			),		
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Line color'),
				'field'															=>	array
				(
					'line_color'												=>	array
					(
						'type'													=>	'text',
						'html_attribute'										=>	array('class'=>'color-picker')
					)
				)
			),			
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Top margin'),
				'legend'														=>	TLThemeTranslator::esc_html__('Top margin in px.'),
				'field'															=>	array
				(
					'margin_top'												=>	array
					(
						'type'													=>	'text'					
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Bottom margin'),
				'legend'														=>	TLThemeTranslator::esc_html__('Bottom margin in px.'),
				'field'															=>	array
				(
					'margin_bottom'												=>	array
					(
						'type'													=>	'text'					
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(	
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		)
	),
	'faq'																		=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('FAQ: FAQ')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates FAQ.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Category'),
				'legend'														=>	TLThemeTranslator::esc_html__('Select categories from which questions and answers have to be retrieved.'),
				'field'															=>	array
				(
					'category'													=>	array
					(
						'type'													=>	'checkbox',
						'data'													=>	$faqCategory
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Active'),
				'legend'														=>	TLThemeTranslator::esc_html__('The zero-based index of the panel that is active (open).'),
				'field'															=>	array
				(
					'active'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
		)
	),
	'features'																	=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Features: Features')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates features.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Category'),
				'legend'														=>	TLThemeTranslator::esc_html__('Select categories from which features have to be retrieved.'),
				'field'															=>	array
				(
					'category'													=>	array
					(
						'type'													=>	'checkbox',
						'data'													=>	$featureCategory
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Layout'),
				'legend'														=>	TLThemeTranslator::esc_html__('Select type of layout.'),
				'field'															=>	array
				(
					'layout'													=>	array
					(
						'type'													=>	'radio',
						'data'													=>	$layoutData
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Style'),
				'legend'														=>	TLThemeTranslator::esc_html__('Select style.'),
				'field'															=>	array
				(
					'type'														=>	array
					(
						'type'													=>	'radio',
						'data'													=>	$featureStyle
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
		)
	),
	'gallery'																	=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Gallery: Gallery')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates gallery.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Gallery categories'),
				'legend'														=>	TLThemeTranslator::esc_html__('Select gallery categories from which images have to be retrieved.'),
				'field'															=>	array
				(
					'category'													=>	array
					(
						'type'													=>	'checkbox',
						'data'													=>	$galleryCategory
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Number of columns'),
				'field'															=>	array
				(
					'layout'													=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	$galleryLayout
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Filterable gallery'),
				'legend'														=>	TLThemeTranslator::esc_html__('Enable or disable filterable gallery.'),
				'field'															=>	array
				(
					'filter'													=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Show "All items" button'),
				'legend'														=>	array(TLThemeTranslator::esc_html__('Determines whether the filterbar has to include "All items" button.'),TLThemeTranslator::esc_html__('This option is available only for filterable galleries.')),
				'field'															=>	array
				(
					'show_all_items_button'										=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Default selected gallery'),
				'legend'														=>	TLThemeTranslator::esc_html__('Default selected gallery for filterable galleries.'),
				'field'															=>	array
				(
					'selected'													=>	array
					(
						'type'													=>	'radio',
						'data'													=>	$galleryCategorySelected
					)
				)
			),			
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Show info box'),
				'legend'														=>	TLThemeTranslator::esc_html__('Determines whether the bottom bar below image has to be visible.'),
				'field'															=>	array
				(
					'show_info_box'												=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),			
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		)
	),
	'google_map'																=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Google Map: Google Map')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates google map.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Map type'),
				'field'															=>	array
				(
					'map_type_id'												=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	TLThemeHelper::extractDictionary($GoogleMap->mapTypeId,array('useDefault'))
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Point coordinates'),
				'legend'														=>	TLThemeTranslator::esc_html__('Coordinates, in order: latitude, longitude.'),
				'field'															=>	array
				(
					'coordinate_lat'											=>	array
					(
						'legend'												=>	'Latitude',
						'type'													=>	'text'					
					),
					'coordinate_lng'											=>	array
					(
						'legend'												=>	'Longitude',
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Marker coordinates'),
				'legend'														=>	TLThemeTranslator::esc_html__('Coordinates, in order: latitude, longitude.'),
				'field'															=>	array
				(
					'coordinate_marker_lat'										=>	array
					(
						'legend'												=>	'Latitude',
						'type'													=>	'text'					
					),
					'coordinate_marker_lng'										=>	array
					(
						'legend'												=>	'Longitude',
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Width'),
				'legend'														=>	TLThemeTranslator::esc_html__('Width of the map (in % of the parent selector).'),
				'field'															=>	array
				(
					'width'														=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Height'),
				'legend'														=>	TLThemeTranslator::esc_html__('Height of the map (in px).'),
				'field'															=>	array
				(
					'height'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Map type control'),
				'legend'														=>	TLThemeTranslator::esc_html__('Enable or disable map type control.'),
				'field'															=>	array
				(
					'map_type_control_enable'									=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Map type control style'),
				'field'															=>	array
				(
					'map_type_control_style'									=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	TLThemeHelper::extractDictionary($GoogleMap->mapTypeControlStyle,array('useDefault'))
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Map type control position'),
				'field'															=>	array
				(
					'map_type_control_position'									=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	TLThemeHelper::extractDictionary($GoogleMap->position,array('useDefault'))
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Zoom control'),
				'legend'														=>	TLThemeTranslator::esc_html__('Enable or disable zoom control.'),
				'field'															=>	array
				(
					'zoom_control_enable'										=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),			
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Zoom level'),
				'legend'														=>	TLThemeTranslator::esc_html__('Zoom level.'),
				'field'															=>	array
				(
					'zoom_level'												=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	$googleZoomLevel
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Zoom style'),
				'field'															=>	array
				(
					'zoom_style'												=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	TLThemeHelper::extractDictionary($GoogleMap->zoomControlStyle,array('useDefault'))
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Zoom position'),
				'field'															=>	array
				(
					'zoom_position'												=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	TLThemeHelper::extractDictionary($GoogleMap->position,array('useDefault'))
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Pan control'),
				'legend'														=>	TLThemeTranslator::esc_html__('Enable or disable pan control.'),
				'field'															=>	array
				(
					'pan_control_enable'										=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Pan control position'),
				'field'															=>	array
				(
					'pan_control_position'										=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	TLThemeHelper::extractDictionary($GoogleMap->position,array('useDefault'))
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Scale control'),
				'legend'														=>	TLThemeTranslator::esc_html__('Enable or disable scale control.'),
				'field'															=>	array
				(
					'scale_control_enable'										=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use global settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Scale control position'),
				'field'															=>	array
				(
					'scale_control_position'									=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	TLThemeHelper::extractDictionary($GoogleMap->position,array('useDefault'))
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Street view control'),
				'legend'														=>	TLThemeTranslator::esc_html__('Enable or disable street view control.'),
				'field'															=>	array
				(
					'street_view_enable'										=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Street view control position'),
				'field'															=>	array
				(
					'street_view_position'										=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	TLThemeHelper::extractDictionary($GoogleMap->position,array('useDefault'))
					)
				)
			)		
		)	
	),
	'iframe'																	=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('iFrame: iFrame')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates iframe.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('URL'),
				'legend'														=>	TLThemeTranslator::esc_html__('URL of iframe source.'),
				'field'															=>	array
				(
					'url'														=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Width'),
				'legend'														=>	TLThemeTranslator::esc_html__('Width (in px).'),
				'field'															=>	array
				(
					'width'														=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Height'),
				'legend'														=>	TLThemeTranslator::esc_html__('Height (in px).'),
				'field'															=>	array
				(
					'height'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		)
	),
	'infopanel'																	=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Infopanels: Infopanel')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates infopanel.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Infopanel id'),
				'legend'														=>	TLThemeTranslator::esc_html__('Select infopanel from list.'),
				'field'															=>	array
				(
					'id'														=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	$infopanelDictionary
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		)
	),
	'layout'																	=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Layouts: Layout')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates layout.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Layout'),
				'legend'														=>	TLThemeTranslator::esc_html__('Select type of layout.'),
				'field'															=>	array
				(
					'layout'													=>	array
					(
						'type'													=>	'radio',
						'data'													=>	$layoutData
					)
				)
			),			
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		),
		'hidden_content'														=>	TLThemeTranslator::esc_html__('Here you have to add columns.')
	),
	'layout_column'																=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Layouts: Layout column')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates column.'),
		'hidden_content'														=>	TLThemeTranslator::esc_html__('Here you can add content.')
	),
	'list'																		=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('List: List')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates list.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Layout'),
				'legend'														=>	TLThemeTranslator::esc_html__('Select type of layout.'),
				'field'															=>	array
				(
					'layout'													=>	array
					(
						'type'													=>	'radio',
						'data'													=>	$layoutData
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('List bullet'),
				'legend'														=>	TLThemeTranslator::esc_html__('Select bullet of list items.'),
				'field'															=>	array
				(
					'type'														=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	$listType
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		),
		'hidden_content'														=>	$ShortCodeManager->createShortCode('list_item',TLThemeTranslator::esc_html__('Content of list item'),array(),array('<br/>',null)).$ShortCodeManager->createShortCode('list_item',TLThemeTranslator::esc_html__('Content of list item'),array(),array('<br/>','<br/>'))
	),
	'list_item'																	=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('List: List item')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates item of a list.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('URL'),
				'legend'														=>	TLThemeTranslator::esc_html__('URL on which list element has to point.'),
				'field'															=>	array
				(
					'href'														=>	array
					(
						'type'													=>	'text',
					)
				)
			)
		),
		'hidden_content'														=>	TLThemeTranslator::esc_html__('Here you can add content.')
	),	
	'menu_box'																	=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Menu box: Menu box')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates menu box.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Pages'),
				'legend'														=>	TLThemeTranslator::esc_html__('ID\'s of the pages (separated by comma) from which menu items have to be retrieved.'),
				'field'															=>	array
				(
					'id'														=>	array
					(
						'type'													=>	'text',
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Width'),
				'legend'														=>	TLThemeTranslator::esc_html__('Width of menu items (in px).'),
				'field'															=>	array
				(
					'item_dimension_width'										=>	array
					(
						'type'													=>	'text',
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Height'),
				'legend'														=>	TLThemeTranslator::esc_html__('Height of menu items (in px).'),
				'field'															=>	array
				(
					'item_dimension_height'										=>	array
					(
						'type'													=>	'text',
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Padding'),
				'legend'														=>	TLThemeTranslator::esc_html__('Left and right padding between menu items (in px).'),
				'field'															=>	array
				(
					'item_dimension_padding'									=>	array
					(
						'type'													=>	'text',
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Position of icon'),
				'legend'														=>	TLThemeTranslator::esc_html__('Position of icon (from top) - in percentage.'),
				'field'															=>	array
				(
					'item_icon_position'										=>	array
					(
						'type'													=>	'text',
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Position of headers'),
				'legend'														=>	TLThemeTranslator::esc_html__('Position of headers (from top) - in percentage.'),
				'field'															=>	array
				(
					'item_header_position'										=>	array
					(
						'type'													=>	'text',
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Position of navigation arrows'),
				'legend'														=>	TLThemeTranslator::esc_html__('Position of navigation arrows (from top) - in percentage.'),
				'field'															=>	array
				(
					'item_navigation_arrow_position'							=>	array
					(
						'type'													=>	'text',
					)
				)
			),				
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Autoplay'),
				'field'															=>	array
				(
					'autoplay'													=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Circular'),
				'legend'														=>	TLThemeTranslator::esc_html__('Determines whether the carousel should be circular.'),
				'field'															=>	array
				(
					'circular'													=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Infinite'),
				'legend'														=>	TLThemeTranslator::esc_html__('Determines whether the carousel should be infinite.'),
				'field'															=>	array
				(
					'infinite'													=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Direction'),
				'legend'														=>	TLThemeTranslator::esc_html__('The direction to scroll the carousel, determines whether the carousel scrolls and - when the carousel scrolls automatically - in what direction.'),
				'field'															=>	array
				(
					'direction'													=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	$carouFredSelDirection
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Number of visible items'),
				'legend'														=>	TLThemeTranslator::esc_html__('The number of visible items'),
				'field'															=>	array
				(
					'item_visible'												=>	array
					(
						'type'													=>	'text',
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Start item number'),
				'field'															=>	array
				(
					'item_start'												=>	array
					(
						'type'													=>	'text',
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Number of scroll items'),
				'legend'														=>	TLThemeTranslator::esc_html__('The number of items to scroll.'),
				'field'															=>	array
				(
					'scroll_item'												=>	array
					(
						'type'													=>	'text',
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Effect'),
				'legend'														=>	TLThemeTranslator::esc_html__('Indicates which effect to use for the transition.'),
				'field'															=>	array
				(
					'scroll_effect'												=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	$carouFredSelEffect
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Easing'),
				'legend'														=>	TLThemeTranslator::esc_html__('Indicates which easing function to use for the transition.'),
				'field'															=>	array
				(
					'scroll_easing'												=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	$easingType
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Duration'),
				'legend'														=>	TLThemeTranslator::esc_html__('Determines the duration of the transition in milliseconds.'),
				'field'															=>	array
				(
					'scroll_duration'											=>	array
					(
						'type'													=>	'text',
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
		)
	),
	'notice_box'																=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Notices: Notice')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates notice box.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Notice type'),
				'field'															=>	array
				(
					'type'														=>	array
					(
						'type'													=>	'radio',
						'data'													=>	$noticeType
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Header'),
				'field'															=>	array
				(
					'header'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
					'header'													=>	TLThemeTranslator::esc_html__('Content of notice box'),
				'field'															=>	array
				(
					'content'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Time to close'),
				'legend'														=>	array(TLThemeTranslator::esc_html__('Time to close notice box in seconds.'),TLThemeTranslator::esc_html__('This option is available only when "Close button" is enabled.')),
				'field'															=>	array
				(
					'time_to_close'												=>	array
					(
						'type'													=>	'text'					
					)
				)
			),		
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Close button'),
				'legend'														=>	TLThemeTranslator::esc_html__('Enable or disable close button.'),
				'field'															=>	array
				(
					'show_close_button'											=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),				
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
		)
	),
	'pricing_list'																=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Pricing list: Pricing list')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates pricing list.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Category'),
				'legend'														=>	TLThemeTranslator::esc_html__('Select categories from which prices have to be retrieved.'),
				'field'															=>	array
				(
					'category'													=>	array
					(
						'type'													=>	'checkbox',
						'data'													=>	$pricingListCategory
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
		)
	),
	'redirect'																	=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Redirect: Redirect')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates redirect to another page.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Location'),
				'legend'														=>	TLThemeTranslator::esc_html__('The absolute URI to which the user will be redirected.'),
				'field'															=>	array
				(
					'url'														=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Post ID'),
				'legend'														=>	TLThemeTranslator::esc_html__('Enter ID of the post to which the user will be redirected.'),
				'field'															=>	array
				(
					'post_id'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Status'),
				'legend'														=>	TLThemeTranslator::esc_html__('The status code to use.'),
				'field'															=>	array
				(
					'status'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		)
	),
	'nivo_slider'																=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Sliders: Nivo slider')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates Nivo slider.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Gallery categories'),
				'legend'														=>	TLThemeTranslator::esc_html__('Select gallery categories from which images have to be retrieved.'),
				'field'															=>	array
				(
					'category'													=>	array
					(
						'type'													=>	'checkbox',
						'data'													=>	$galleryCategory
					)
				)
			),			
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Image'),
				'legend'														=>	TLThemeTranslator::esc_html__('Select type of image.'),
				'field'															=>	array
				(
					'image_type'												=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	$imageDictionary
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Transition effect'),
				'legend'														=>	TLThemeTranslator::esc_html__('Select transition effect.'),
				'field'															=>	array
				(
					'effect'													=>	array
					(
						'type'													=>	'checkbox',
						'data'													=>	$nivoSliderEffect
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Number of slices'),
				'legend'														=>	TLThemeTranslator::esc_html__('Enter number of slices - only for "slice" transitions.'),
				'field'															=>	array
				(
					'slice_number'												=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Number of columns'),
				'legend'														=>	TLThemeTranslator::esc_html__('Enter number of columns - only for "box" transitions.'),
				'field'															=>	array
				(
					'col_number'												=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Number of rows'),
				'legend'														=>	TLThemeTranslator::esc_html__('Enter number of rows - only for "box" transitions.'),
				'field'															=>	array
				(
					'row_number'												=>	array
					(	
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Transition speed'),
				'legend'														=>	TLThemeTranslator::esc_html__('Enter value of transition speed (in ms).'),
				'field'															=>	array
				(
					'transition_speed'											=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Pause time'),
				'legend'														=>	TLThemeTranslator::esc_html__('Enter value of pause time (in ms).'),
				'field'															=>	array
				(
					'pause_time'												=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Start slide'),
				'legend'														=>	TLThemeTranslator::esc_html__('Enter number of start slide.'),
				'field'															=>	array
				(
					'start_slide'												=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Direction navigation'),
				'legend'														=>	TLThemeTranslator::esc_html__('Enable Prev/Next navigation.'),
				'field'															=>	array
				(
					'direction_navigation'										=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Pause on hover'),
				'legend'														=>	TLThemeTranslator::esc_html__('Stop transition when user hover on image.'),
				'field'															=>	array
				(
					'pause_hover'												=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Manual advance'),
				'legend'														=>	TLThemeTranslator::esc_html__('Force manual transitions.'),
				'field'															=>	array
				(
					'manual_advance'											=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Random start'),
				'legend'														=>	TLThemeTranslator::esc_html__('Start on a random slide.'),
				'field'															=>	array
				(
					'random_start'												=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'
					)
				)
			)
		)
	),
	'social_profiles'															=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Socials: Social profiles list')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates list of icon social profiles based on settings from theme options.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		)
	),
	'tabs'																		=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Tabs: Tabs')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates tabs.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Active'),
				'legend'														=>	TLThemeTranslator::esc_html__('The zero-based index of the panel that is active (open).'),
				'field'															=>	array
				(
					'active'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		),
		'hidden_content'														=>	$ShortCodeManager->createShortCode('tab',TLThemeTranslator::esc_html__('Content of first panel'),array('header'=>'Header #1')).$ShortCodeManager->createShortCode('tab',TLThemeTranslator::esc_html__('Content of second panel'),array('header'=>'Header #2'),array(null,'<br/>'))
	),
	'tab'																		=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Tabs: Tabs panel')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates single tabs panel.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Header'),
				'field'															=>	array
				(
					'header'													=>	array
					(	
						'type'													=>	'text'					
					)
				)
			)
		),
		'hidden_content'														=>	TLThemeTranslator::esc_html__('Content of panel')
	),
	'team'																		=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Team: Team')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates list of team members.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Category'),
				'legend'														=>	TLThemeTranslator::esc_html__('Select categories from which team members have to be retrieved.'),
				'field'															=>	array
				(
					'category'													=>	array
					(
						'type'													=>	'checkbox',
						'data'													=>	$teamCategory
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Header'),
				'field'															=>	array
				(
					'header'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Columns'),
				'legend'														=>	TLThemeTranslator::esc_html__('Select number of columns.'),
				'field'															=>	array
				(
					'layout'													=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(1=>1,2=>2,3=>3,4=>4,5=>5)
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Fancybox'),
				'legend'														=>	TLThemeTranslator::esc_html__('Enable or disable fancybox.'),
				'field'															=>	array
				(
					'fancybox'													=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Target of URLs'),
				'legend'														=>	TLThemeTranslator::esc_html__('Open URLs in new window.'),
				'field'															=>	array
				(
					'url_new_window'											=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Carousel'),
				'legend'														=>	TLThemeTranslator::esc_html__('Enable or disable carousel.'),
				'field'															=>	array
				(
					'carousel'													=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Autoplay'),
				'field'															=>	array
				(
					'autoplay'													=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Circular'),
				'legend'														=>	TLThemeTranslator::esc_html__('Determines whether the carousel should be circular.'),
				'field'															=>	array
				(
					'circular'													=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Infinite'),
				'legend'														=>	TLThemeTranslator::esc_html__('Determines whether the carousel should be infinite.'),
				'field'															=>	array
				(
					'infinite'													=>	array
					(
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Direction'),
				'legend'														=>	TLThemeTranslator::esc_html__('The direction to scroll the carousel, determines whether the carousel scrolls and - when the carousel scrolls automatically - in what direction.'),
				'field'															=>	array
				(
					'direction'													=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	$carouFredSelDirection
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Start item number'),
				'field'															=>	array
				(
					'item_start'												=>	array
					(
						'type'													=>	'text',
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Number of scroll items'),
				'legend'														=>	TLThemeTranslator::esc_html__('The number of items to scroll.'),
				'field'															=>	array
				(
					'scroll_item'												=>	array
					(
						'type'													=>	'text',
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Effect'),
				'legend'														=>	TLThemeTranslator::esc_html__('Indicates which effect to use for the transition.'),
				'field'															=>	array
				(
					'scroll_effect'												=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	$carouFredSelEffect
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Easing'),
				'legend'														=>	TLThemeTranslator::esc_html__('Indicates which easing function to use for the transition.'),
				'field'															=>	array
				(
					'scroll_easing'												=>	array
					(
						'type'													=>	'select-one',
						'data'													=>	$easingType
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Duration'),
				'legend'														=>	TLThemeTranslator::esc_html__('Determines the duration of the transition in milliseconds.'),
				'field'															=>	array
				(
					'scroll_duration'											=>	array
					(
						'type'													=>	'text',
					)
				)
			),				
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
		)
	),
	'testimonials'																=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Testimonials: Testimonials')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates testimonials.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Category'),
				'legend'														=>	TLThemeTranslator::esc_html__('Select categories from which testimonials have to be retrieved.'),
				'field'															=>	array
				(
					'category'													=>	array
					(
						'type'													=>	'checkbox',
						'data'													=>	$testimonialCategory
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Layout'),
				'legend'														=>	TLThemeTranslator::esc_html__('Select type of layout.'),
				'field'															=>	array
				(
					'layout'													=>	array
					(
						'type'													=>	'radio',
						'data'													=>	$layoutData
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Items per page'),
				'legend'														=>	TLThemeTranslator::esc_html__('Number of list elements displayed on the page. If is equal 0, pagination wont\'t be created.'),
				'field'															=>	array
				(
					'items_per_page'											=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
		)
	),
	'dropcap'																	=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Text: Dropcap')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates dropcap.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Background color'),
				'legend'														=>	TLThemeTranslator::esc_html__('Background color (in HEX) of first letter.'),
				'field'															=>	array
				(
					'bg_color'													=>	array
					(
						'type'													=>	'text',
						'html_attribute'										=>	array('class'=>'color-picker')
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Text color'),
				'legend'														=>	TLThemeTranslator::esc_html__('Text color (in HEX) of first letter.'),
				'field'															=>	array
				(
					'text_color'												=>	array
					(
						'type'													=>	'text',
						'html_attribute'										=>	array('class'=>'color-picker')
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		),
		'hidden_content'														=>	TLThemeTranslator::esc_html__('Here you can put content of dropcap')
	),
	'header'																	=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Text: Header')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates header.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Header'),
				'field'															=>	array
				(
					'content'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Important'),
				'legend'														=>	TLThemeTranslator::esc_html__('Important of header.'),
				'field'															=>	array
				(
					'important'													=>	array
					(
						'legend'												=>	null,
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>'H1',2=>'H2',3=>'H3',4=>'H4',5=>'H5',6=>'H6')
					)
				)
			),	
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Underline'),
				'legend'														=>	TLThemeTranslator::esc_html__('Underline of header.'),
				'field'															=>	array
				(
					'underline'													=>	array
					(
						'legend'												=>	null,
						'type'													=>	'radio',
						'data'													=>	array(-1=>TLThemeTranslator::esc_html__('[Use default settings]'),1=>TLThemeTranslator::esc_html__('Enable'),0=>TLThemeTranslator::esc_html__('Disable'))
					)
				)
			),				
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
		)
	),
	'pre'																		=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Text: Preformatted text')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode created preformatted text.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
		),
		'hidden_content'														=>	TLThemeTranslator::esc_html__('Here you can put content')
	),	
	'video'																		=>	array
	(
		'label'																	=>	array
		(
			'select-list'														=>	TLThemeTranslator::esc_html__('Video: Video')
		),
		'description'															=>	TLThemeTranslator::esc_html__('This shortcode creates video player.'),
		'section'																=>	array
		(
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Video type'),
				'legend'														=>	TLThemeTranslator::esc_html__('Video type.'),
				'field'															=>	array
				(
					'type'														=>	array
					(
						'type'													=>	'radio',
						'data'													=>	$videoType
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('URL'),
				'legend'														=>	TLThemeTranslator::esc_html__('Enter URL of video.'),
				'field'															=>	array
				(
					'url'														=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('Player width'),
				'legend'														=>	TLThemeTranslator::esc_html__('Player width (in px).'),
				'field'															=>	array
				(
					'width'														=>	array
					(
						'type'													=>	'text'					
					)
				)
			),
			array
			(
				'header'														=>	TLThemeTranslator::esc_html__('CSS class'),
				'legend'														=>	TLThemeTranslator::esc_html__('List of CSS classes defined in CSS files separated by space.'),
				'field'															=>	array
				(
					'css_class'													=>	array
					(
						'type'													=>	'text'					
					)
				)
			)
		)
	),	
);

?>