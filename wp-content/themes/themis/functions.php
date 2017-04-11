<?php

/******************************************************************************/
/******************************************************************************/

require_once('include.php');

add_filter('widget_text','do_shortcode');

if(is_admin())
{
	require_once('admin/functions.php');
}
else require_once('public/functions.php');

$WidgetArea=new TLThemeWidgetArea();
$WidgetArea->register();

/******************************************************************************/

if(!isset($content_width)) $content_width=990;

/******************************************************************************/

add_theme_support('post-thumbnails'); 
add_theme_support('automatic-feed-links');

add_theme_support('menus');

$Theme=new TLTheme();
$Post=new TLThemePost();
$Image=new TLThemeImage();

$Image->register();

add_filter('image_size_names_choose',array($Image,'addImageSupport'));

add_filter('excerpt_more',array($Theme,'filterExcerptMore'));
add_filter('excerpt_length',array($Theme,'automaticExcerptLength'),999);

add_filter('wp_title',array($Post,'wpTitleFilter'));

/******************************************************************************/

$ShortCodeManager=new TLThemeShortCodeManager();
$ShortCodeManager->register();

$Page=new TLThemePage();
add_action('save_post',array($Page,'adminSaveMetaBox'));
add_action('add_meta_boxes',array($Page,'adminInitMetaBox'));

$FaqPost=new TLThemeFaqPost();
add_action('init',array($FaqPost,'adminInit')); 
add_action('save_post',array($FaqPost,'adminSaveMetaBox'));
add_action('add_meta_boxes',array($FaqPost,'adminInitMetaBox'));
add_filter('manage_edit-'.THEME_CONTEXT.'_faq_columns',array($FaqPost,'adminManageEditColumn')); 
add_action('manage_'.THEME_CONTEXT.'_faq_posts_custom_column',array($FaqPost,'adminManageColumn'));
add_filter('manage_edit-'.THEME_CONTEXT.'_faq_sortable_columns',array($FaqPost,'adminManageEditSortableColumn'));

$TeamPost=new TLThemeTeamPost();
add_action('init',array($TeamPost,'adminInit')); 
add_action('save_post',array($TeamPost,'adminSaveMetaBox'));
add_action('add_meta_boxes',array($TeamPost,'adminInitMetaBox'));
add_filter('manage_edit-'.THEME_CONTEXT.'_team_columns',array($TeamPost,'adminManageEditColumn')); 
add_action('manage_'.THEME_CONTEXT.'_team_posts_custom_column',array($TeamPost,'adminManageColumn'));
add_filter('manage_edit-'.THEME_CONTEXT.'_team_sortable_columns',array($TeamPost,'adminManageEditSortableColumn'));

$GalleryPost=new TLThemeGalleryPost();
add_action('init',array($GalleryPost,'adminInit')); 
add_action('save_post',array($GalleryPost,'adminSaveMetaBox'));
add_action('add_meta_boxes',array($GalleryPost,'adminInitMetaBox'));
add_filter('manage_edit-'.THEME_CONTEXT.'_gallery_columns',array($GalleryPost,'adminManageEditColumn')); 
add_action('manage_'.THEME_CONTEXT.'_gallery_posts_custom_column',array($GalleryPost,'adminManageColumn'));
add_filter('manage_edit-'.THEME_CONTEXT.'_gallery_sortable_columns',array($GalleryPost,'adminManageEditSortableColumn'));

$FeaturePost=new TLThemeFeaturePost();
add_action('init',array($FeaturePost,'adminInit')); 
add_action('save_post',array($FeaturePost,'adminSaveMetaBox'));
add_action('add_meta_boxes',array($FeaturePost,'adminInitMetaBox'));
add_filter('manage_edit-'.THEME_CONTEXT.'_feature_columns',array($FeaturePost,'adminManageEditColumn')); 
add_action('manage_'.THEME_CONTEXT.'_feature_posts_custom_column',array($FeaturePost,'adminManageColumn'));
add_filter('manage_edit-'.THEME_CONTEXT.'_feature_sortable_columns',array($FeaturePost,'adminManageEditSortableColumn'));

$InfoPanelPost=new TLThemeInfoPanelPost();
add_action('init',array($InfoPanelPost,'adminInit')); 
add_action('save_post',array($InfoPanelPost,'adminSaveMetaBox'));
add_action('add_meta_boxes',array($InfoPanelPost,'adminInitMetaBox'));
add_filter('manage_edit-'.THEME_CONTEXT.'_infopanel_columns',array($InfoPanelPost,'adminManageEditColumn')); 
add_action('manage_'.THEME_CONTEXT.'_infopanel_posts_custom_column',array($InfoPanelPost,'adminManageColumn'));
add_filter('manage_edit-'.THEME_CONTEXT.'_infopanel_sortable_columns',array($InfoPanelPost,'adminManageEditSortableColumn'));

$PricingListPost=new TLThemePricingListPost();
add_action('init',array($PricingListPost,'adminInit')); 
add_action('save_post',array($PricingListPost,'adminSaveMetaBox'));
add_action('add_meta_boxes',array($PricingListPost,'adminInitMetaBox'));
add_filter('manage_edit-'.THEME_CONTEXT.'_pricing_list_columns',array($PricingListPost,'adminManageEditColumn')); 
add_action('manage_'.THEME_CONTEXT.'_pricing_list_posts_custom_column',array($PricingListPost,'adminManageColumn'));
add_filter('manage_edit-'.THEME_CONTEXT.'_pricing_list_sortable_columns',array($PricingListPost,'adminManageEditSortableColumn'));

$TestimonialPost=new TLThemeTestimonialPost();
add_action('init',array($TestimonialPost,'adminInit')); 
add_action('save_post',array($TestimonialPost,'adminSaveMetaBox'));
add_action('add_meta_boxes',array($TestimonialPost,'adminInitMetaBox'));
add_filter('manage_edit-'.THEME_CONTEXT.'_testimonial_columns',array($TestimonialPost,'adminManageEditColumn')); 
add_action('manage_'.THEME_CONTEXT.'_testimonial_posts_custom_column',array($TestimonialPost,'adminManageColumn'));
add_filter('manage_edit-'.THEME_CONTEXT.'_testimonial_sortable_columns',array($TestimonialPost,'adminManageEditSortableColumn'));

$WidgetArea=new TLThemeWidgetArea();
add_action('init',array($WidgetArea,'adminInit')); 

$Post=new TLThemePost();
add_action('save_post',array($Post,'adminSaveMetaBox'));
add_action('add_meta_boxes',array($Post,'adminInitMetaBox'));

/******************************************************************************/

$WidgetTwitterCarousel=new TLThemeWidgetTwitterCarousel();
$WidgetTwitterCarousel->register();

$WidgetCompanyInfo=new TLThemeWidgetCompanyInfo();
$WidgetCompanyInfo->register();

$WidgetCompanyInfoDepartment=new TLThemeWidgetCompanyInfoDepartment();
$WidgetCompanyInfoDepartment->register();

$WidgetLatestPost=new TLThemeWidgetLatestPost();
$WidgetLatestPost->register();

$WidgetMostCommented=new TLThemeWidgetMostCommented();
$WidgetMostCommented->register();

$WidgetMostViewed=new TLThemeWidgetMostViewed();
$WidgetMostViewed->register();

$WidgetArchivePost=new TLThemeWidgetArchivePost();
$WidgetArchivePost->register();

$WidgetBlogCategory=new TLThemeWidgetBlogCategory();
$WidgetBlogCategory->register();

$WidgetMenuBox=new TLThemeWidgetMenuBox();
$WidgetMenuBox->register();

$WidgetTestimonial=new TLThemeWidgetTestimonial();
$WidgetTestimonial->register();

$WidgetBlogSearch=new TLThemeWidgetBlogSearch();
$WidgetBlogSearch->register();

$WidgetMenu=new TLThemeWidgetMenu();
$WidgetMenu->register();

/******************************************************************************/

$TestimonialPost=new TLThemeTestimonialPost();
add_shortcode(THEME_CONTEXT.'_testimonials',array($TestimonialPost,'createTestimonial'));

$GoogleMap=new TLThemeGoogleMap();
add_shortcode(THEME_CONTEXT.'_google_map',array($GoogleMap,'createGoogleMap'));

$Layout=new TLThemeLayout();
add_shortcode(THEME_CONTEXT.'_layout',array($Layout,'layout'));
add_shortcode(THEME_CONTEXT.'_layout_column',array($Layout,'layout_column'));

$Social=new TLThemeSocial();
add_shortcode(THEME_CONTEXT.'_social_profiles',array($Social,'createSocialProfile'));

$ContactForm=new TLThemeContactForm();
add_shortcode(THEME_CONTEXT.'_contact_form',array($ContactForm,'createContactForm'));

$FeaturePost=new TLThemeFeaturePost();
add_shortcode(THEME_CONTEXT.'_features',array($FeaturePost,'createFeature'));

$FaqPost=new TLThemeFaqPost();
add_shortcode(THEME_CONTEXT.'_faq',array($FaqPost,'createFaq'));

$Accordion=new TLThemeAccordion();
add_shortcode(THEME_CONTEXT.'_accordion',array($Accordion,'createAccordion'));
add_shortcode(THEME_CONTEXT.'_accordion_item',array($Accordion,'createAccordionItem'));
	
$Tab=new TLThemeTab();
add_shortcode(THEME_CONTEXT.'_tabs',array($Tab,'createTab'));
add_shortcode(THEME_CONTEXT.'_tab',array($Tab,'createTabItem'));

$List=new TLThemeList();
add_shortcode(THEME_CONTEXT.'_list',array($List,'createList'));
add_shortcode(THEME_CONTEXT.'_list_item',array($List,'createListItem'));

$Shortcode=new TLThemeShortcode();
add_shortcode(THEME_CONTEXT.'_pre',array($Shortcode,'pre'));
add_shortcode(THEME_CONTEXT.'_header',array($Shortcode,'header'));
add_shortcode(THEME_CONTEXT.'_dropcap',array($Shortcode,'dropcap'));
add_shortcode(THEME_CONTEXT.'_redirect',array($Shortcode,'redirect'));

$GalleryPost=new TLThemeGalleryPost();
add_shortcode(THEME_CONTEXT.'_gallery',array($GalleryPost,'createGallery'));
add_shortcode(THEME_CONTEXT.'_image',array($GalleryPost,'createImage'));

$NivoSlider=new TLThemeNivoSlider();
add_shortcode(THEME_CONTEXT.'_nivo_slider',array($NivoSlider,'createSlider'));

$NoticeBox=new TLThemeNoticeBox();
add_shortcode(THEME_CONTEXT.'_notice_box',array($NoticeBox,'createNoticeBox'));
	
$PricingListPost=new TLThemePricingListPost();
add_shortcode(THEME_CONTEXT.'_pricing_list',array($PricingListPost,'createPricingList'));

$TeamPost=new TLThemeTeamPost();
add_shortcode(THEME_CONTEXT.'_team',array($TeamPost,'createTeam'));

$InfoPanelPost=new TLThemeInfoPanelPost();
add_shortcode(THEME_CONTEXT.'_infopanel',array($InfoPanelPost,'createInfoPanel'));

$Blog=new TLThemeBlog();
add_shortcode(THEME_CONTEXT.'_latest_posts',array($Blog,'createLatestPost'));

$MenuBox=new TLThemeMenuBox();
add_shortcode(THEME_CONTEXT.'_menu_box',array($MenuBox,'createMenuBox'));

$IFrame=new TLThemeIFrame();
add_shortcode(THEME_CONTEXT.'_iframe',array($IFrame,'createIFrame'));

$Divider=new TLThemeDivider();
add_shortcode(THEME_CONTEXT.'_divider',array($Divider,'createDivider'));

$Video=new TLThemeVideo();
add_shortcode(THEME_CONTEXT.'_video',array($Video,'createVideo'));

$CompanyInfo=new TLThemeCompanyInfo();
add_shortcode(THEME_CONTEXT.'_company_info',array($CompanyInfo,'createCompanyInfo'));

$Button=new TLThemeButton();
add_shortcode(THEME_CONTEXT.'_button',array($Button,'createButton'));

/******************************************************************************/

$Comment=new TLThemeComment();
$ContactForm=new TLThemeContactForm();

add_action('tgmpa_register',array($Theme,'addPlugin'));

add_action('wp_ajax_theme_public_contact_form_send',array($ContactForm,'createContactFormResponse'));
add_action('wp_ajax_nopriv_theme_public_contact_form_send',array($ContactForm,'createContactFormResponse'));

add_action('wp_ajax_theme_public_comment_add',array($Comment,'createAddCommentResponse'));
add_action('wp_ajax_nopriv_theme_public_comment_add',array($Comment,'createAddCommentResponse'));
add_action('wp_ajax_theme_public_comment_get',array($Comment,'createGetCommentResponse'));
add_action('wp_ajax_nopriv_theme_public_comment_get',array($Comment,'createGetCommentResponse'));

/******************************************************************************/

TLThemeTranslator::register();

/******************************************************************************/
/******************************************************************************/

?>