<?php

/******************************************************************************/
/******************************************************************************/

class TLTheme
{
	/**************************************************************************/

	var $countTextColor=5;
	var $countBorderColor=3;
	var $countBackgroundColor=8;
	
	/**************************************************************************/
	
	var $themeDefaultOption=array
	(
		'blog_category_setting_post_id'								=>	'0',
		'blog_archive_setting_post_id'								=>	'0',
		'blog_search_setting_post_id'								=>	'0',
		'blog_author_setting_post_id'								=>	'0',
		'blog_post_content_widget_area'								=>	'',
		'blog_post_content_widget_area_location'					=>	'2',
		'blog_post_footer_widget_area'								=>	'',
		'blog_post_menu_top'										=>	'',
		'blog_post_sort_field'										=>	'post_date',
		'blog_post_sort_direction'									=>	'desc',
		'blog_post_automatic_excerpt_length'						=>	'55',
		'blog_post_header_visible'									=>	'1',
		'blog_post_category_visible'								=>	'1',
		'blog_post_author_visible'									=>	'1',
		'blog_post_tag_visible'										=>	'1',
		'blog_post_comment_count_visible'							=>	'1',
		'page_404_setting_page_id'									=>	'0',
		'page_content_widget_area'									=>	'',
		'page_content_widget_area_location'							=>	'2',
		'page_footer_widget_area'									=>	'',
		'page_menu_top'												=>	'',
		'page_header_visible'										=>	'1',
		'header_logo_link_url'										=>	'',
		'header_logo_image_url'										=>	'',
		'header_logo_alternate_text'								=>	'',
		'header_logo_margin_top'									=>	'25',
		'header_cite_first_line'									=>	'Realize your constitutional right',
		'header_cite_second_line'									=>	'with qualified help',
		'header_cite_margin_top'									=>	'10',
		'header_company_phone_number_visible'						=>	'1',
		'header_company_phone_number_margin_top'					=>	'30',
		'footer_enable'												=>	'1',						
		'footer_top_enable'											=>	'1',
		'footer_bottom_enable'										=>	'1',
		'footer_bottom_content'										=>	null,
		'text_color_group_1'										=>	'CBBAAF',
		'text_color_group_2'										=>	'FFFFFF',
		'text_color_group_3'										=>	'8A7D75',
		'text_color_group_4'										=>	'AAAAAA',
		'text_color_group_5'										=>	'888888',
		'background_color_group_1'									=>	'F66E00',
		'background_color_group_2'									=>	'5D514B',
		'background_color_group_3'									=>	'4E4440',
		'background_color_group_4'									=>	'E9431C',
		'background_color_group_5'									=>	'61911B',
		'background_color_group_6'									=>	'37302D',
		'background_color_group_7'									=>	'3E3633',
		'background_color_group_8'									=>	'302A27',
		'border_color_group_1'										=>	'F66E00',
		'border_color_group_2'										=>	'5D514B',
		'border_color_group_3'										=>	'483F3B',
		'favicon_url'												=>	'',
		'right_click_enable'										=>	'1',
		'copy_selection_enable'										=>	'1',
		'copy_selection_text_color'									=>	'FFFFFF',
		'copy_selection_background_color'							=>	'F66E00',
		'responsive_mode_enable'									=>	'1',
		'google_analytics_code'										=>	'',
		'company_info_company_name'									=>	'Mark Anthony',
		'company_info_company_street'								=>	'Quai Henri IV',
		'company_info_company_postcode'								=>	'75004',
		'company_info_company_city'									=>	'Paris',
		'company_info_company_state'								=>	'Ile-de-France',
		'company_info_company_country'								=>	'France',
		'company_info_company_phone'								=>	'877 123 0223',
		'company_info_company_fax'									=>	'877 123 0224',
		'company_info_company_email'								=>	'm.anthony@themis.com',
		'company_info_section_separator'							=>	', ',
		'background_color'											=>	'483F3B',
		'background_image'											=>	'',
		'background_position'										=>	'',
		'background_repeat'											=>	'repeat',
		'social_twitter_url'										=>	'https://twitter.com/quanticalabs',
		'social_twitter_order'										=>	'1',
		'social_facebook_url'										=>	'http://www.facebook.com/pages/QuanticaLabs/364777863576878',
		'social_facebook_order'										=>	'2',
		'social_googleplus_url'										=>	'https://plus.google.com',
		'social_googleplus_order'									=>	'3',
		'font_base_family_google'									=>	'',
		'font_base_family_system'									=>	'Arial',
		'font_base_color'											=>	'CBBAAF',
		'font_base_size'											=>	'13',
		'font_base_size_2'											=>	'13',
		'font_base_size_3'											=>	'13',
		'font_base_size_4'											=>	'13',
		'font_base_style'											=>	'normal',
		'font_base_weight'											=>	'normal',
		'font_h1_family_google'										=>	'Noticia Text',
		'font_h1_family_system'										=>	'',
		'font_h1_color'												=>	'FFFFFF',
		'font_h1_size'												=>	'36',
		'font_h1_size_2'											=>	'36',
		'font_h1_size_3'											=>	'36',
		'font_h1_size_4'											=>	'36',
		'font_h1_style'												=>	'normal',
		'font_h1_weight'											=>	'normal',
		'font_h2_family_google'										=>	'Noticia Text',
		'font_h2_family_system'										=>	'',
		'font_h2_color'												=>	'FFFFFF',
		'font_h2_size'												=>	'24',
		'font_h2_size_2'											=>	'24',
		'font_h2_size_3'											=>	'24',
		'font_h2_size_4'											=>	'24',
		'font_h2_style'												=>	'normal',
		'font_h2_weight'											=>	'normal',			
		'font_h3_family_google'										=>	'Noticia Text',
		'font_h3_family_system'										=>	'',
		'font_h3_color'												=>	'FFFFFF',
		'font_h3_size'												=>	'18',
		'font_h3_size_2'											=>	'18',
		'font_h3_size_3'											=>	'18',
		'font_h3_size_4'											=>	'18',
		'font_h3_style'												=>	'normal',
		'font_h3_weight'											=>	'normal',
		'font_h4_family_google'										=>	'Noticia Text',
		'font_h4_family_system'										=>	'',
		'font_h4_color'												=>	'FFFFFF',
		'font_h4_size'												=>	'16',
		'font_h4_size_2'											=>	'16',
		'font_h4_size_3'											=>	'16',
		'font_h4_size_4'											=>	'16',
		'font_h4_style'												=>	'normal',
		'font_h4_weight'											=>	'normal',			
		'font_h5_family_google'										=>	'Noticia Text',
		'font_h5_family_system'										=>	'',
		'font_h5_color'												=>	'FFFFFF',
		'font_h5_size'												=>	'14',
		'font_h5_size_2'											=>	'14',
		'font_h5_size_3'											=>	'14',
		'font_h5_size_4'											=>	'14',
		'font_h5_style'												=>	'normal',
		'font_h5_weight'											=>	'normal',			
		'font_h6_family_google'										=>	'Noticia Text',
		'font_h6_family_system'										=>	'',
		'font_h6_color'												=>	'FFFFFF',
		'font_h6_size'												=>	'12',
		'font_h6_size_2'											=>	'12',
		'font_h6_size_3'											=>	'12',
		'font_h6_size_4'											=>	'12',
		'font_h6_style'												=>	'normal',
		'font_h6_weight'											=>	'normal',			
		'gallery_excerpt_limit'										=>	'50',
		'gallery_excerpt_limit_character'							=>	'...',
		'gallery_filter_menu_show_default'							=>	'1',
		'gallery_info_box_show_default'								=>	'1',
		'gallery_layout_default'									=>	'1',
		'nivo_slider_enable'										=>	'1',
		'nivo_slider_effect'										=>	array('random'),
		'nivo_slider_slice_number'									=>	'15',
		'nivo_slider_col_number'									=>	'8',
		'nivo_slider_row_number'									=>	'4',
		'nivo_slider_transition_speed'								=>	'500',
		'nivo_slider_pause_time'									=>	'3000',
		'nivo_slider_start_slide'									=>	'0',
		'nivo_slider_direction_navigation_enable'					=>	'1',
		'nivo_slider_pause_hover'									=>	'1',
		'nivo_slider_manual_advance'								=>	'0',
		'nivo_slider_random_start'									=>	'0',
		'recaptcha_skin'											=>	'red',
		'recaptcha_enable'											=>	'0',
		'recaptcha_public_key'										=>	'',
		'recaptcha_private_key'										=>	'',
		'contact_form_enable'										=>	'1',
		'contact_form_recaptcha_enable'								=>	'0',
		'contact_form_recipient_name'								=>	'QuanticaLabs',
		'contact_form_recipient_address'							=>	'quanticalabs@gmail.com',
		'contact_form_smtp_enable'									=>	'0',
		'contact_form_smtp_username'								=>	'',
		'contact_form_smtp_password'								=>	'',
		'contact_form_smtp_host'									=>	'',
		'contact_form_smtp_port'									=>	'',
		'contact_form_smtp_secure_type'								=>	'SSL',
		'contact_form_debug'										=>	'0',
		'contact_form_reset'										=>	'1',
		'contact_form_subject'										=>	'Message from WWW',
		'contact_form_message'										=>	null,
		'fancybox_image_padding'									=>	'10',
		'fancybox_image_margin'										=>	'20',
		'fancybox_image_min_width'									=>	'100',
		'fancybox_image_min_height'									=>	'100',
		'fancybox_image_max_width'									=>	'9999',
		'fancybox_image_max_height'									=>	'9999',
		'fancybox_image_helper_button_enable'						=>	'1',
		'fancybox_image_autoresize'									=>	'1',
		'fancybox_image_autocenter'									=>	'1',
		'fancybox_image_fittoview'									=>	'1',
		'fancybox_image_arrow'										=>	'1',
		'fancybox_image_close_button'								=>	'1',
		'fancybox_image_close_click'								=>	'0',
		'fancybox_image_next_click'									=>	'0',
		'fancybox_image_mouse_wheel'								=>	'1',
		'fancybox_image_autoplay'									=>	'0',
		'fancybox_image_loop'										=>	'1',
		'fancybox_image_playspeed'									=>	'3000',
		'fancybox_image_animation_effect_open'						=>	'fade',
		'fancybox_image_animation_effect_close'						=>	'fade',
		'fancybox_image_animation_effect_next'						=>	'elastic',
		'fancybox_image_animation_effect_previous'					=>	'elastic',
		'fancybox_image_easing_open'								=>	'swing',
		'fancybox_image_easing_close'								=>	'swing',
		'fancybox_image_easing_next'								=>	'swing',
		'fancybox_image_easing_previous'							=>	'swing',
		'fancybox_image_speed_open'									=>	'250',
		'fancybox_image_speed_close'								=>	'250',
		'fancybox_image_speed_next'									=>	'250',
		'fancybox_image_speed_previous'								=>	'250',
		'fancybox_video_padding'									=>	'10',
		'fancybox_video_margin'										=>	'20',
		'fancybox_video_min_width'									=>	'100',
		'fancybox_video_min_height'									=>	'100',
		'fancybox_video_max_width'									=>	'9999',
		'fancybox_video_max_height'									=>	'9999',
		'fancybox_video_autoresize'									=>	'1',
		'fancybox_video_autocenter'									=>	'1',
		'fancybox_video_fittoview'									=>	'1',
		'fancybox_video_close_button'								=>	'1',
		'google_map_enable'											=>	'1',
		'google_map_company_info_enable'							=>	'1',
		'google_map_map_type_id'									=>	'ROADMAP',
		'google_map_coordinate_lat'									=>	'47.359293',
		'google_map_coordinate_lng'									=>	'0.807967',
		'google_map_coordinate_marker_lat'							=>	'47.359293',
		'google_map_coordinate_marker_lng'							=>	'0.807967',
		'google_map_width'											=>	'100',
		'google_map_height'											=>	'232',
		'google_map_map_type_control_enable'						=>	'0',
		'google_map_map_type_control_style'							=>	'DEFAULT',
		'google_map_map_type_control_position'						=>	'TOP_CENTER',
		'google_map_zoom_control_enable'							=>	'1',
		'google_map_zoom_level'										=>	'15',
		'google_map_zoom_style'										=>	'SMALL',
		'google_map_zoom_position'									=>	'RIGHT_TOP',
		'google_map_pan_control_enable'								=>	'0',
		'google_map_pan_control_position'							=>	'TOP_CENTER',
		'google_map_scale_control_enable'							=>	'0',
		'google_map_scale_control_position'							=>	'TOP_CENTER',
		'google_map_street_view_enable'								=>	'0',
		'google_map_street_view_position'							=>	'TOP_CENTER',
		'menu_box_item_dimension_width'								=>	'190',
		'menu_box_item_dimension_height'							=>	'470',
		'menu_box_item_dimension_padding'							=>	'4',
		'menu_box_item_icon_position'								=>	'65',
		'menu_box_item_header_position'								=>	'80',
		'menu_box_item_navigation_arrow_position'					=>	'70',
		'menu_box_autoplay'											=>	'0',
		'menu_box_circular'											=>	'1',
		'menu_box_infinite'											=>	'1',
		'menu_box_direction'										=>	'left',
		'menu_box_item_visible'										=>	'5',
		'menu_box_item_start'										=>	'0',
		'menu_box_scroll_item'										=>	'1',
		'menu_box_scroll_effect'									=>	'scroll',
		'menu_box_scroll_easing'									=>	'easeInOutCubic',
		'menu_box_scroll_duration'									=>	'750',
		'menu_top_item_dimension_width'								=>	'157',
		'menu_top_item_dimension_width_2'							=>	'117',
		'menu_top_item_dimension_width_3'							=>	'217',
		'menu_top_item_dimension_width_4'							=>	'292',
		'menu_top_item_dimension_submenu_width'						=>	'190',
		'menu_top_item_dimension_submenu_width_2'					=>	'190',
		'menu_top_item_dimension_submenu_width_3'					=>	'217',
		'menu_top_item_dimension_submenu_width_4'					=>	'292',
		'menu_top_item_dimension_padding'							=>	'4',
		'menu_top_item_dimension_padding_2'							=>	'4',
		'menu_top_item_dimension_padding_3'							=>	'4',
		'menu_top_item_dimension_padding_4'							=>	'4',
		'menu_top_mobile_visible_step'								=>	'2',
		'menu_top_fixed'											=>	'1',
		'menu_top_fixed_scroll_hide'								=>	'0',
		'menu_top_delay'											=>	'800',
		'menu_top_speed'											=>	'500',
		'image_hover_effect'										=>	'2',
		'comment_recaptcha_enable'									=>	'0',
		'install'													=>	'1',
		'text_translator_enable'									=>	'1',
		'text_translator_method'									=>	'1',
		'text_pagination_label_next_button'							=>	'Próximo',
		'text_pagination_label_previous_button'						=>	'Anterior',		
		'text_contact_form_label_name'								=>	'Digite su nombre *',
		'text_contact_form_label_email'								=>	'Digite su dirección de email *',
		'text_contact_form_label_subject'							=>	'Asunto del mensaje *',
		'text_contact_form_label_message'							=>	'Digite el mensaje *',
		'text_contact_form_label_button'							=>	'Enviar mensaje',
		'text_contact_form_notice_name'								=>	'Digite su nombre.',
		'text_contact_form_notice_email'							=>	'Digite dirección de email válida.',
		'text_contact_form_notice_subject'							=>	'Digite el asunto del mensaje.',
		'text_contact_form_notice_message'							=>	'Digite el mensaje.',
		'text_contact_form_notice_recaptcha'						=>	'Código es invalido.',
		'text_contact_form_notice_error'							=>	'Lo sentimos, no se puede enviar el mensaje.',
		'text_contact_form_notice_success'							=>	'Gracias por contactarnos.',		
		'text_search_form_label_phrase'								=>	'Ingrese una frase',
		'text_search_form_label_search'								=>	'Buscar',
		'text_search_form_notice_no_post_found_header'				=>	'Error',
		'text_search_form_notice_no_post_found_text'				=>	'Post no encontrado.',
		'text_search_form_header'									=>	'Buscar resultados para la frase: %s',
		'text_blog_read_more_link'									=>	'Leer más',
		'text_blog_tags'											=>	'Tags:',
		'text_blog_views'											=>	'Views:',
		'text_blog_posted_in_category'								=>	'Posted in',
		'text_blog_posted_by_author'								=>	'Posted by',
		'text_blog_comment'											=>	'Comment',
		'text_blog_comments'										=>	'Comments',
		'text_blog_view_all_posts_filed_under_category'				=>	'View all posts filed under %s',
		'text_blog_posts_from_the_author'							=>	'All posts from %s',
		'text_comment_form_label_name'								=>	'Name',
		'text_comment_form_label_email'								=>	'Email',
		'text_comment_form_label_website'							=>	'Website URL',
		'text_comment_form_label_comment'							=>	'Comment',
		'text_comment_form_label_submit'							=>	'Post comment',
		'text_comment_form_notice_name'								=>	'Please enter your name.',
		'text_comment_form_notice_email'							=>	'Please enter valid e-mail address.',
		'text_comment_form_notice_website'							=>	'Please enter valid URL address.',
		'text_comment_form_notice_comment'							=>	'Please enter your message.',
		'text_comment_form_notice_recaptcha'						=>	'Entered code is invalid.',
		'text_comment_form_notice_error'							=>	'Your comment cannot be added.',
		'text_comment_form_notice_success'							=>	'Your comment has been added.',
		'text_comment_form_leave_reply'								=>	'Leave a reply',
		'text_comment_form_cancel_reply'							=>	'Cancel reply',
		'text_comment_form_posted_by'								=>	'Posted by',
		'text_comment_form_in_reply_to'								=>	'In reply to',
		'text_notification_closing_in_seconds'						=>	'Closing in %s seconds',
		'text_notification_close'									=>	'Close',
		'text_comment_form_reply'									=>	'Reply',
		'text_header_phone'											=>	'Teléfono',
		'text_plugin_fancybox_next'									=>	'Next',
		'text_plugin_fancybox_previous'								=>	'Previous',
		'text_plugin_fancybox_close'								=>	'Close',
		'text_plugin_fancybox_error'								=>	'The requested content cannot be loaded.<br/>Please try again later.',
		'text_plugin_fancybox_toggle'								=>	'Toggle size',
		'text_plugin_fancybox_start_slideshow'						=>	'Start slideshow',
		'text_business_hour_on'										=>	'on',
		'text_menu_mobile_select'									=>	'[SELECT]',
		'text_team_learn_more_link'									=>	'Learn more',
		'text_gallery_all_items'									=>	'All items',
		'custom_css_responsive_1'									=>	'',
		'custom_css_responsive_2'									=>	'',
		'custom_css_responsive_3'									=>	'',
		'custom_css_responsive_4'									=>	''
	);	

	/**************************************************************************/
	
	var $adminScript=array
	(
		'jquery'						=>	array(1,null,null,array(),false,false),
		'jquery-ui-core'				=>	array(1,null,null,array('jquery'),false,false),
		'jquery-ui-slider'				=>	array(1,null,null,array('jquery','jquery-ui-core'),false,false),
		'jquery-ui-button'				=>	array(1,null,null,array('jquery','jquery-ui-core'),false,false),
		'jquery-ui-autocomplete'		=>	array(1,null,null,array('jquery','jquery-ui-core'),false,false),
		'thickbox'						=>	array(1,null,null,array('jquery'),false,false),
		'base64'						=>	array(1,THEME_URL_SCRIPT,'base64.js',array('jquery'),false,false),
		'jquery-dropkick'				=>	array(1,THEME_URL_SCRIPT,'jquery.dropkick.min.js',array('jquery'),false,false),
		'jquery-ba-bqq'					=>	array(1,THEME_URL_SCRIPT,'jquery.ba-bqq.min.js',array('jquery'),false,false),
		'jquery-qtip'					=>	array(1,THEME_URL_SCRIPT,'jquery.qtip.min.js',array('jquery'),false,false),
		'jquery-themeOption'			=>	array(1,THEME_URL_SCRIPT,'jquery.themeOption.js',array('jquery'),false,false),
		'jquery-themeOptionElement'		=>	array(1,THEME_URL_SCRIPT,'jquery.themeOptionElement.js',array('jquery'),false,false),
		'jquery-blockUI'				=>	array(1,THEME_URL_SCRIPT,'jquery.blockUI.js',array('jquery'),false,false),
		'jquery-infieldlabel'			=>	array(1,THEME_URL_SCRIPT,'jquery.infieldlabel.min.js',array('jquery'),false,false),
		'jquery-colorpicker'			=>	array(1,THEME_URL_SCRIPT,'colorpicker.js',array('jquery'),false,false),
		'jquery-shortcode-manager'		=>	array(1,THEME_URL_SCRIPT,'shortCodeManager.class.js',array('jquery'),false,false)
	);
	
	/**************************************************************************/

	var $adminStyle=array
	(
		'jquery-ui-css'							=>	array(1,THEME_URL_STYLE,'jquery-ui.css'),
		'jquery-dropkick'						=>	array(1,THEME_URL_STYLE,'dropkick.css'),
		'jquery-qtip-css'						=>	array(1,THEME_URL_STYLE,'jquery.qtip.min.css'),
		'jquery-themeOption-css'				=>	array(1,THEME_URL_STYLE,'jquery.themeOption.css'),
		'jquery-themeOption-overwrite-css'		=>	array(1,THEME_URL_STYLE,'jquery.themeOption.overwrite.css'),
		'jquery-colorpicker-css'				=>	array(1,THEME_URL_STYLE,'colorpicker.css'),
		'google-font-css'						=>	array(1,null,'//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'),
		'thickbox-css'							=>	array(1,null,null),
		'admin-css'								=>	array(1,THEME_URL_STYLE,'admin.css')
	);
	
	/**************************************************************************/
	
	var $publicScript=array
	(
		'jquery'						=>	array(1,null,null,array(),false,false),
		'jquery-ui-core'				=>	array(1,null,null,array('jquery'),false,true),
		'jquery-ui-tabs'				=>	array(1,null,null,array('jquery','jquery-ui-core'),false,true),
		'jquery-ui-accordion'			=>	array(1,null,null,array('jquery','jquery-ui-core'),false,true),
		'linkify'						=>	array(1,THEME_URL_SCRIPT,'linkify.js',array(),false,true),
		'jquery-fancybox'				=>	array(1,THEME_URL_SCRIPT,'jquery.fancybox.js',array('jquery'),false,true),
		'jquery-fancybox-media'			=>	array(1,THEME_URL_SCRIPT,'jquery.fancybox-media.js',array('jquery'),false,true),
		'jquery-fancybox-buttons'		=>	array(1,THEME_URL_SCRIPT,'jquery.fancybox-buttons.js',array('jquery'),false,true),
		'jquery-actual'					=>	array(1,THEME_URL_SCRIPT,'jquery.actual.min.js',array('jquery'),false,true),
		'jquery-qtip'					=>	array(1,THEME_URL_SCRIPT,'jquery.qtip.min.js',array('jquery'),false,true),
		'jquery-easing'					=>	array(1,THEME_URL_SCRIPT,'jquery.easing.js',array('jquery'),false,true),
		'jquery-isotope'				=>	array(1,THEME_URL_SCRIPT,'jquery.isotope.js',array('jquery'),false,true),
		'jquery-blockUI'				=>	array(1,THEME_URL_SCRIPT,'jquery.blockUI.js',array('jquery'),false,true),
		'jquery-scrollTo'				=>	array(1,THEME_URL_SCRIPT,'jquery.scrollTo.min.js',array('jquery'),false,true),
		'jquery-infieldlabel'			=>	array(1,THEME_URL_SCRIPT,'jquery.infieldlabel.min.js',array('jquery'),false,true),
		'jquery-carouFredSel'			=>	array(1,THEME_URL_SCRIPT,'jquery.carouFredSel.packed.js',array('jquery'),false,true),
		'jquery-elastic'				=>	array(1,THEME_URL_SCRIPT,'jquery.elastic.source.js',array('jquery'),false,true),
		'jquery-nivo-slider'			=>	array(0,THEME_URL_SCRIPT,'jquery.nivo.slider.pack.js',array('jquery'),false,true),
		'jquery-touch-swipe'			=>	array(1,THEME_URL_SCRIPT,'jquery.touchSwipe.min.js',array('jquery'),false,true),
		'jquery-mousewheel'				=>	array(1,THEME_URL_SCRIPT,'jquery.mousewheel.min.js',array('jquery'),false,true),
		'jquery-countdown'				=>	array(1,THEME_URL_SCRIPT,'jquery.countdown.min.js',array('jquery'),false,true),
		'jquery-ba-bqq'					=>	array(1,THEME_URL_SCRIPT,'jquery.ba-bqq.min.js',array('jquery'),false,true),
		'superfish'						=>	array(1,THEME_URL_SCRIPT,'superfish.js',array('jquery'),false,true),
		'hoverIntent'					=>	array(1,THEME_URL_SCRIPT,'hoverIntent.js',array('jquery'),false,true),
		'contact-form'					=>	array(0,THEME_URL_SCRIPT,'contactForm.class.js',array('jquery'),false,true),
		'comment'						=>	array(1,THEME_URL_SCRIPT,'comment.class.js',array('jquery'),false,true),
		'google-map'					=>	array(0,null,'//maps.google.com/maps/api/js?sensor=false',array(),false,true),
		'theme'							=>	array(1,THEME_URL_SCRIPT,'theme.class.js',array('jquery'),false,true),
		'public'						=>	array(1,THEME_URL_SCRIPT,'public.js',array('jquery','jquery-ui-core','jquery-ui-accordion'),false,true)

	);
	
	/**************************************************************************/
	
	var $publicStyle=array
	(
		'style'							=>	array(1,null,THEME_STYLESHEET_URI),
		'jquery-nivo-slider'			=>	array(0,THEME_URL_STYLE,'nivo-slider.css',array('style')),
		'jquery-ui'						=>	array(1,THEME_URL_STYLE,'jquery-ui.css',array('style')),
		'jquery-qtip'					=>	array(1,THEME_URL_STYLE,'jquery.qtip.min.css',array('style')),
		'jquery-fancybox'				=>	array(1,THEME_URL_STYLE,'fancybox/jquery.fancybox.css',array('style')),
		'jquery-fancybox-buttons'		=>	array(1,THEME_URL_STYLE,'fancybox/helpers/jquery.fancybox-buttons.css',array('style')),
		'superfish'						=>	array(1,THEME_URL_STYLE,'superfish.css',array('style')),
		'style-css'						=>	array(1,THEME_URL_STYLE,'style.css',array('style')),
		'responsive-width-0-989'		=>	array(0,THEME_URL_STYLE,'responsive/width-0-989.css',array('style')),
		'responsive-width-0-767'		=>	array(0,THEME_URL_STYLE,'responsive/width-0-767.css',array('style')),
		'responsive-width-768-989'		=>	array(0,THEME_URL_STYLE,'responsive/width-768-989.css',array('style')),
		'responsive-width-480-767'		=>	array(0,THEME_URL_STYLE,'responsive/width-480-767.css',array('style')),
		'responsive-width-0-479'		=>	array(0,THEME_URL_STYLE,'responsive/width-0-479.css',array('style')),
		'style-css-php'					=>	array(1,THEME_URL_STYLE,'style.css.php',array('style')),
		'style-custom'					=>	array(1,THEME_URL,'custom.css',array('style')),
	);
		
	/**************************************************************************/
	
	var $easingType=array
	(
		'easeInQuad',
		'easeOutQuad',
		'easeInOutQuad',
		'easeInCubic',
		'easeOutCubic',
		'easeInOutCubic',
		'easeInQuart',
		'easeOutQuart',
		'easeInOutQuart',
		'easeInOutQuart',
		'easeInQuint',
		'easeOutQuint',
		'easeInOutQuint',
		'easeInSine',
		'easeOutSine',
		'easeInOutSine',
		'easeInExpo',
		'easeOutExpo',
		'easeInOutExpo',
		'easeInCirc',
		'easeOutCirc',
		'easeInOutCirc',
		'easeInElastic',
		'easeOutElastic',
		'easeInOutElastic',
		'easeInBack',
		'easeOutBack',
		'easeInOutBack',
		'easeInBounce',
		'easeOutBounce',
		'easeInOutBounce'
	);
		
	/**************************************************************************/
	/**************************************************************************/
	
	function TLTheme()
	{
		$this->windowTarget=array
		(	
			'_self'			=>	array(TLThemeTranslator::__('Open page in the same frame')),
			'_blank'		=>	array(TLThemeTranslator::__('Open page in a new window'))
		);
		
		$this->imageHoverEffect=array
		(
			1				=>	array(TLThemeTranslator::__('No effects')),
			2				=>	array(TLThemeTranslator::__('Use icon effects'))
		);

		$this->backgroundRepeat=array
		(
			'no-repeat'		=>	array(TLThemeTranslator::__('No repeat')),
			'repeat'		=>	array(TLThemeTranslator::__('Repeat along the X and Y axis')),
			'repeat-x'		=>	array(TLThemeTranslator::__('Repeat along the X axis')),
			'repeat-y'		=>	array(TLThemeTranslator::__('Repeat along the Y axis'))
		);
		
		for($i=1;$i<=7;$i++)
			$this->day[$i]=array(date_i18n('l',strtotime('0'.$i.'-04-2013')),date_i18n('D',strtotime('0'.$i.'-04-2013')));
	}
	
	/**************************************************************************/

	function adminInit()
	{
		$this->adminStyle['thickbox-css'][2]='/'.WPINC.'/js/thickbox/thickbox.css';
		
		if(is_rtl())
		    $this->adminStyle['jquery-themeOption-rtl']=array(1,THEME_URL_STYLE,'jquery.themeOption.rtl.css'); 
			
		$this->registerStyle($this->adminStyle);
		$this->registerScript($this->adminScript);
	}
	
	/**************************************************************************/
	
	function adminPrintScript()
	{
		$script=array();
		foreach($this->adminScript as $index=>$value)
		{
			if($value[0]==1) $script[]=$index;
		}
		
		$style=array();
		foreach($this->adminStyle as $index=>$value)
		{
			if($value[0]==1) $style[]=$index;
		}

		$this->enqueueStyle($style);
		$this->enqueueScript($script);	
	}
	
	/**************************************************************************/
	
	function adminMenuInit()
	{
		add_action('admin_print_scripts',array($this,'adminPrintScript'));
		add_theme_page(TLThemeTranslator::__('Theme Options'),TLThemeTranslator::__('Theme Options'),'edit_theme_options','ThemeOptions',array($this,'adminOptionPanelCreate'));
	}
	
	/**************************************************************************/
	
	function adminOptionPanelCreate()
	{
		$data=array();
		
		$CSS=new TLThemeCSS();
		$Menu=new TLThemeMenu();
		$Page=new TLThemePage();
		$Blog=new TLThemeBlog();
		$Social=new TLThemeSocial();
		$Fancybox=new TLThemeFancybox();
		$Recaptcha=new TLThemeRecaptcha();
		$GoogleMap=new TLThemeGoogleMap();
		$GoogleFont=new TLThemeGoogleFont();
		$NivoSlider=new TLThemeNivoSlider();
		$WidgetArea=new TLThemeWidgetArea();
		$ContactForm=new TLThemeContactForm();
		$GalleryPost=new TLThemeGalleryPost();
		$CarouFredSel=new TLThemeCarouFredSel();
				
		$data['option']=TLThemeOption::getOptionObject();

		$data['dictionary']['social']=$Social->social;
		$data['dictionary']['SMTPSecureType']=$ContactForm->SMTPSecureType;
		
		$data['dictionary']['easingType']=$this->easingType;
		$data['dictionary']['fancyboxTransitionType']=$Fancybox->transitionType;
		
		$data['dictionary']['googleMapPosition']=$GoogleMap->position;
		$data['dictionary']['googleMapMapTypeId']=$GoogleMap->mapTypeId;
		$data['dictionary']['googleMapZoomControlStyle']=$GoogleMap->zoomControlStyle;
		$data['dictionary']['googleMapMapTypeControlStyle']=$GoogleMap->mapTypeControlStyle;
		
		$data['dictionary']['carouFredSelEffect']=$CarouFredSel->effect;
		$data['dictionary']['carouFredSelDirection']=$CarouFredSel->direction;
		
		$data['dictionary']['googleFont']=$GoogleFont->unpack();
		
		$data['dictionary']['fontStyle']=$CSS->fontStyle;
		$data['dictionary']['fontWeight']=$CSS->fontWeight;
		
		$data['dictionary']['day']=$this->day;
		
		$data['dictionary']['nivoSliderEffect']=$NivoSlider->effect;
		
		$data['dictionary']['galleryLayout']=$GalleryPost->galleryLayout;
		
		$data['dictionary']['imageHoverEffect']=$this->imageHoverEffect;
		
		$data['dictionary']['backgroundRepeat']=$this->backgroundRepeat;
		
		$data['dictionary']['page']=get_pages(array('hierarchical'=>0));
		
		$data['dictionary']['sortDirection']=$Blog->sortDirection;
		$data['dictionary']['sortPostBlogField']=$Blog->sortPostBlogField;
		
		$data['countTextColor']=$this->countTextColor;
		$data['countBorderColor']=$this->countBorderColor;
		$data['countBackgroundColor']=$this->countBackgroundColor;
		
		$data['dictionary']['menuIcon']=$Page->menuIcon;
		$data['dictionary']['menuBoxImage']=$Page->menuBoxImage;
		
		$data['dictionary']['recaptchaSkin']=$Recaptcha->skin;
		
		$data['dictionary']['widgetArea-1']=$WidgetArea->getWidgetAreaDictionary(true,false,false);
		$data['dictionary']['widgetAreaLocation-1']=$WidgetArea->getWidgetAreaLocationDictionary(true,false,false);
		
		$data['dictionary']['widgetArea-2']=$WidgetArea->getWidgetAreaDictionary(true,true,true);
		$data['dictionary']['widgetAreaLocation-2']=$WidgetArea->getWidgetAreaLocationDictionary(true,true,true);
		
		$data['dictionary']['menu-1']=$Menu->getMenuDictionary(true,false,false);
		$data['dictionary']['menu-2']=$Menu->getMenuDictionary(true,true,true);
		
		$data['option']['bulk_page_content_widget_area']=-10;
		$data['option']['bulk_page_content_widget_area_location']=-10;
		$data['option']['bulk_page_footer_widget_area']=-10;
		$data['option']['bulk_page_menu_top']=-10;
		$data['option']['bulk_page_header_visible']=-10;
		
		$data['option']['bulk_blog_post_content_widget_area']=-10;
		$data['option']['bulk_blog_post_content_widget_area_location']=-10;
		$data['option']['bulk_blog_post_footer_widget_area']=-10;
		$data['option']['bulk_blog_post_menu_top']=-10;
		$data['option']['bulk_blog_post_header_visible']=-10;
		$data['option']['bulk_blog_post_category_visible']=-10;
		$data['option']['bulk_blog_post_author_visible']=-10;
		$data['option']['bulk_blog_post_tag_visible']=-10;
		$data['option']['bulk_blog_post_comment_count_visible']=-10;
		
		$Template=new TLThemeTemplate($data,THEME_PATH_TEMPLATE.'admin/admin.php');
		echo $Template->output();			
	}
	
	/**************************************************************************/
	
	function setupTheme()
	{	
		$install=(int)TLThemeoption::getOption('install');
		if($install==1) return;
		
		/****/
		
		$argument=array
		(
			'post_type'							=>	array('post','page'),
			'post_status '						=>	'any',
			'posts_per_page'					=>	-1
		);
		
		$query=new WP_Query($argument);
		if($query===false) return;
		
		$Menu=new TLThemeMenu();
		
		$menuDictionary=$Menu->getMenuDictionary();
		
		$updateCount=0;
	
		foreach($query->posts as $value)
		{
			$option=TLThemeOption::getPostMeta($value);
			if(!is_array($option)) continue;
			
			$update=false;
			$prefix=$value->post_type=='page' ? 'page' : 'post';

			/****/

			if(!array_key_exists($prefix.'_content_widget_area',$option))
			{
				if(array_key_exists($prefix.'_sidebar',$option))
				{
					$update=true;
					$template=get_post_meta($value->ID,'_wp_page_template');
					
					$option[$prefix.'_footer_widget_area']=-1;
					
					$option[$prefix.'_content_widget_area']=(int)$option[$prefix.'_sidebar']==0 ? 0 : -1;
					$option[$prefix.'_content_widget_area_location']=(int)$option[$prefix.'_sidebar']==0 ? -1 : (int)$option[$prefix.'_sidebar'];
					
					if(isset($template[0]))
					{
						if($template[0]=='blog.php')
						{
							if((int)$option[$prefix.'_sidebar']>0)
								$option[$prefix.'_content_widget_area']='blog';
						}
					}
				}
			}
			
			/****/
			
			if(!array_key_exists($prefix.'_menu_top',$option))
			{
				if(array_key_exists($prefix.'_main_menu_visible',$option))
				{
					$update=true;
					$option[$prefix.'_menu_top']=$option[$prefix.'_main_menu_visible']==1 ? -1 : 0;
				}
			}	
			
			/****/
			
			if($value->post_type=='post')
			{
				$postOption=array('post_category_visible','post_author_visible','post_tag_visible','post_comment_count_visible');
				
				foreach($postOption as $key)
				{
					if(array_key_exists($key,$option))
					{
						if($option[$key]==2)
						{
							$update=true;
							$option[$key]=-1;
						}
					}					
				}
			}

			if($update) 
			{
				$updateCount++;
				update_post_meta($value->ID,THEME_OPTION_PREFIX,$option);
			}
		}
		
		/****/
		
		$this->themeDefaultOption['blog_post_content_widget_area']='blog';
		$this->themeDefaultOption['blog_post_content_widget_area_location']=2;
		$this->themeDefaultOption['blog_post_footer_widget_area']='footer';
		
		if($updateCount>0)
		{
			$this->themeDefaultOption['page_content_widget_area']='page';
			$this->themeDefaultOption['page_content_widget_area_location']=2;
		}
		else
		{
			$this->themeDefaultOption['page_content_widget_area']=0;
			$this->themeDefaultOption['page_content_widget_area_location']=0;			
		}
			
		$this->themeDefaultOption['page_footer_widget_area']='footer';
		
		/****/
		
		$menuDictionary=get_terms('nav_menu');
		
		if(count($menuDictionary)==1)
		{
			$this->themeDefaultOption['page_menu_top']=$menuDictionary[0]->term_id;
			$this->themeDefaultOption['blog_post_menu_top']=$menuDictionary[0]->term_id;
		}
		else
		{
			foreach($menuDictionary as $index=>$value)
			{
				if($value->slug=='main-top-menu')
				{
					$this->themeDefaultOption['page_menu_top']=$value->term_id;
					$this->themeDefaultOption['blog_post_menu_top']=$value->term_id;				
					break;
				}
			}
		}

		/****/

		$data=array();

		$Template=new TLThemeTemplate($data,THEME_PATH_TEMPLATE.'email_body.php');
		$message=$Template->output();		
		
		$Template=new TLThemeTemplate($data,THEME_PATH_TEMPLATE.'footer_bottom_content.php');
		$footerBottom=$Template->output();	
		
		$option=$this->themeDefaultOption;

		$option['contact_form_message']=$message;
		$option['footer_bottom_content']=$footerBottom;
		
		$Social=new TLThemeSocial();
		foreach($Social->social as $index=>$value)
		{
			$option['social_network_'.$index.'_url']='';
			$option['social_network_'.$index.'_order']='';
		}
		
		for($i=1;$i<=7;$i++)
		{
			$option['company_info_business_hour_'.$i.'_to']='';
			$option['company_info_business_hour_'.$i.'_from']='';
			$option['company_info_business_hour_'.$i.'_info']='';
		}
		
		$saveOption=array();		
		$currentOption=TLThemeOption::getOptionObject();
		
		foreach($option as $index=>$value)
		{
			if(!array_key_exists($index,$currentOption))
				$saveOption[$index]=$value;
		}
		
		$saveOption=array_merge($saveOption,$currentOption);
		
		foreach($saveOption as $index=>$value)
		{
			if(!array_key_exists($index,$option))
				unset($saveOption[$index]);
		}
		
		$saveOption['install']=1;

		TLThemeOption::resetOption();
		TLThemeOption::updateOption($saveOption);
		
		$GoogleFont=new TLThemeGoogleFont();
		$GoogleFont->download();
	}
	
	/**************************************************************************/
	
	function switchTheme()
	{
		TLThemeOption::updateOption(array('install'=>0));
	}
	
	/**************************************************************************/
	
	function adminOptionPanelRestore()
	{
		$response=array('global'=>array('error'=>1));
		$Notice=new TLThemeNotice();
		
		update_option(THEME_OPTION_PREFIX,null);
		TLThemeOption::refreshOption();
		$this->setupTheme();
		
		$response['global']['error']=0;
		$response['global']['notice']=$Notice->createHTML(THEME_PATH_TEMPLATE.'notice.php');

		echo json_encode($response);
		exit;		
	}
	
	/**************************************************************************/
	
	function adminOptionPanelImport()
	{
		$response=array('global'=>array('error'=>1));
		$Notice=new TLThemeNotice();
		
		$option=TLThemeHelper::getPostOption();
		
		$file=wp_remote_get($option['theme_option_import_url']);
		
		if(is_wp_error($file))
		{
			$Notice->addError(TLThemeHelper::getFormName('theme_option_import_url',false),TLThemeHelper::esc_html('Invalid value'));	
			$response['local']=$Notice->getError();
		}
		else
		{
			TLThemeOption::updateOption(json_decode(base64_decode($file['body'])));
			
			$response['global']['error']=0;
		}
		
		$response['global']['notice']=$Notice->createHTML(THEME_PATH_TEMPLATE.'notice.php');

		echo json_encode($response);
		exit;
	}
	
	/**************************************************************************/
	
	function adminOptionPanelExport()
	{
		header('Content-Description: File Transfer');
		header('Content-Type: text/plain');
		header('Content-Disposition: attachment; filename=options.txt');
		ob_clean();
		flush();
		echo base64_encode(json_encode(get_option(THEME_OPTION_PREFIX)));
		exit;
	}
	
	/**************************************************************************/
	
	function adminOptionPanelSave()
	{
		$option=TLThemeHelper::getPostOption();

		$response=array('global'=>array('error'=>1));

		$Blog=new TLThemeBlog();
		$Social=new TLThemeSocial();
		$Notice=new TLThemeNotice();
		$FancyBox=new TLThemeFancybox();
		$Recaptcha=new TLThemeRecaptcha();
		$GoogleMap=new TLThemeGoogleMap();
		$NivoSlider=new TLThemeNivoSlider();
		$GalleryPost=new TLThemeGalleryPost();
		$ContactForm=new TLThemeContactForm();
		$CarouFredSel=new TLThemeCarouFredSel();
		$Validation=new TLThemeValidation($Notice);
		
		$invalidValue=TLThemeTranslator::esc_html__('Invalid value');
		
		/* Blog */
		if(!in_array($option['blog_post_sort_field'],array_keys($Blog->sortPostBlogField)))
			$Notice->addError(TLThemeHelper::getFormName('blog_post_sort_field',false),$invalidValue);		
		if(!in_array($option['blog_post_sort_direction'],array_keys($Blog->sortDirection)))
			$Notice->addError(TLThemeHelper::getFormName('blog_post_sort_direction',false),$invalidValue);	
		$Validation->notice('isNumber',array($option['blog_post_automatic_excerpt_length'],0,999),array(TLThemeHelper::getFormName('blog_post_automatic_excerpt_length',false),$invalidValue));
		$Validation->notice('isNumber',array($option['blog_post_category_visible'],0,1),array(TLThemeHelper::getFormName('blog_post_category_visible_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['blog_post_author_visible'],0,1),array(TLThemeHelper::getFormName('blog_post_author_visible_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['blog_post_tag_visible'],0,1),array(TLThemeHelper::getFormName('blog_post_tag_visible_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['blog_post_comment_count_visible'],0,1),array(TLThemeHelper::getFormName('blog_post_comment_count_visible_1',false),$invalidValue));
		
		/* Page */
		$Validation->notice('isNumber',array($option['page_header_visible'],0,1),array(TLThemeHelper::getFormName('page_header_visible_1',false),$invalidValue));

		/* Header */
		$Validation->notice('isNumber',array($option['header_logo_margin_top'],0,999),array(TLThemeHelper::getFormName('header_logo_margin_top',false),$invalidValue));
		$Validation->notice('isNumber',array($option['header_cite_margin_top'],0,999),array(TLThemeHelper::getFormName('header_cite_margin_top',false),$invalidValue));
		$Validation->notice('isNumber',array($option['header_company_phone_number_visible'],0,1),array(TLThemeHelper::getFormName('header_company_phone_number_visible_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['header_company_phone_number_margin_top'],0,999),array(TLThemeHelper::getFormName('header_company_phone_number_margin_top',false),$invalidValue));

		/* Footer */
		$Validation->notice('isNumber',array($option['footer_enable'],0,1),array(TLThemeHelper::getFormName('footer_enable',false),$invalidValue));
		$Validation->notice('isNumber',array($option['footer_top_enable'],0,1),array(TLThemeHelper::getFormName('footer_top_enable',false),$invalidValue));
		$Validation->notice('isNumber',array($option['footer_bottom_enable'],0,1),array(TLThemeHelper::getFormName('footer_bottom_enable',false),$invalidValue));
		
		/* Color */
		for($i=1;$i<=$this->countTextColor;$i++)
			$Validation->notice('isHexColor',array($option['text_color_group_'.$i]),array(TLThemeHelper::getFormName('text_color_group_'.$i,false),$invalidValue));
		for($i=1;$i<=$this->countBackgroundColor;$i++)
			$Validation->notice('isHexColor',array($option['background_color_group_'.$i]),array(TLThemeHelper::getFormName('background_color_group_'.$i,false),$invalidValue));
		for($i=1;$i<=$this->countBorderColor;$i++)
			$Validation->notice('isHexColor',array($option['border_color_group_'.$i]),array(TLThemeHelper::getFormName('border_color_group_'.$i,false),$invalidValue));
		
		/* Content copying */
		$Validation->notice('isNumber',array($option['right_click_enable'],0,1),array(TLThemeHelper::getFormName('right_click_enable_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['copy_selection_enable'],0,1),array(TLThemeHelper::getFormName('copy_selection_enable_1',false),$invalidValue));
		$Validation->notice('isHexColor',array($option['copy_selection_text_color'],true),array(TLThemeHelper::getFormName('copy_selection_text_color',false),$invalidValue));
		$Validation->notice('isHexColor',array($option['copy_selection_background_color'],true),array(TLThemeHelper::getFormName('copy_selection_background_color',false),$invalidValue));
		
		/* Responsive mode */
		$Validation->notice('isNumber',array($option['responsive_mode_enable'],0,1),array(TLThemeHelper::getFormName('responsive_mode_enable_1',false),$invalidValue));
		
		/* Font */
		$CSS=new TLThemeCSS();
		$font=array('base','h1','h2','h3','h4','h5','h6');
		foreach($font as $value)
		{
			$Validation->notice('isHexColor',array($option['font_'.$value.'_color'],true),array(TLThemeHelper::getFormName('font_'.$value.'_color',false),$invalidValue));
			$Validation->notice('isNumber',array($option['font_'.$value.'_size'],1,100),array(TLThemeHelper::getFormName('font_'.$value.'_size',false),$invalidValue));
			for($i=2;$i<=4;$i++)
				$Validation->notice('isNumber',array($option['font_'.$value.'_size_'.$i],1,100),array(TLThemeHelper::getFormName('font_'.$value.'_size_1',false),$invalidValue));
			if(!in_array($option['font_'.$value.'_style'],array_keys($CSS->fontStyle)))
				$Notice->addError(TLThemeHelper::getFormName('font_'.$value.'_style',false),$invalidValue);	
			if(!in_array($option['font_'.$value.'_weight'],array_keys($CSS->fontWeight)))
				$Notice->addError(TLThemeHelper::getFormName('font_'.$value.'_weight',false),$invalidValue);	
		}
		
		/* Background settings */
		$Validation->notice('isHexColor',array($option['background_color'],true),array(TLThemeHelper::getFormName('background_color',false),$invalidValue));
		if(!in_array($option['background_repeat'],array_keys($this->backgroundRepeat)))
			$Notice->addError(TLThemeHelper::getFormName('background_repeat',false),$invalidValue);		
		
		/* Social network */
		foreach($Social->social as $index=>$value)
			$Validation->notice('isNumber',array($option['social_network_'.$index.'_order'],0,999,true),array(TLThemeHelper::getFormName('social_network_'.$index.'_order',false),$invalidValue));
		
		/* Plugins / Recaptcha */
		$Validation->notice('isNumber',array($option['recaptcha_enable'],0,1),array(TLThemeHelper::getFormName('recaptcha_enable_1',false),$invalidValue));
		if(!in_array($option['recaptcha_skin'],array_keys($Recaptcha->skin)))
			$Notice->addError(TLThemeHelper::getFormName('recaptcha_skin',false),$invalidValue);
		
		/* Plugins / Contact form */
		$Validation->notice('isNumber',array($option['contact_form_enable'],0,1),array(TLThemeHelper::getFormName('contact_form_enable_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['contact_form_recaptcha_enable'],0,1),array(TLThemeHelper::getFormName('contact_form_recaptcha_enable_1',false),$invalidValue));
		$Validation->notice('isNotEmpty',array($option['contact_form_recipient_name']),array(TLThemeHelper::getFormName('contact_form_recipient_name',false),$invalidValue));
		$Validation->notice('isEmailAddress',array($option['contact_form_recipient_address']),array(TLThemeHelper::getFormName('contact_form_recipient_address',false),$invalidValue));
		$Validation->notice('isNumber',array($option['contact_form_smtp_enable'],0,1),array(TLThemeHelper::getFormName('contact_form_smtp_enable_1',false),$invalidValue));
		if($option['contact_form_smtp_enable']==1)
		{
			$Validation->notice('isNotEmpty',array($option['contact_form_smtp_username']),array(TLThemeHelper::getFormName('contact_form_smtp_username',false),$invalidValue));
			
			if($Validation->isEmpty($option['contact_form_smtp_password'])) $option['contact_form_smtp_password']=TLThemeoption::getOption('contact_form_smtp_password');
			$Validation->notice('isNotEmpty',array($option['contact_form_smtp_host']),array(TLThemeHelper::getFormName('contact_form_smtp_host',false),$invalidValue));
			$Validation->notice('isNotEmpty',array($option['contact_form_smtp_port']),array(TLThemeHelper::getFormName('contact_form_smtp_port',false),$invalidValue));
	
			if(!in_array($option['contact_form_smtp_secure_type'],array_keys($ContactForm->SMTPSecureType)))
				$Notice->addError(TLThemeHelper::getFormName('contact_form_smtp_secure_type',false),$invalidValue);
		}
		else
		{
			$option['contact_form_smtp_host']='';
			$option['contact_form_smtp_port']='';
			$option['contact_form_smtp_username']='';
			$option['contact_form_smtp_password']='';
			$option['contact_form_smtp_secure_type']='ssl';
		}
		$Validation->notice('isNumber',array($option['contact_form_debug'],0,1),array(TLThemeHelper::getFormName('contact_form_debug_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['contact_form_reset'],0,1),array(TLThemeHelper::getFormName('contact_form_reset_1',false),$invalidValue));
		
		/* Plugins / Google Map */
		$Validation->notice('isNumber',array($option['google_map_enable'],0,1),array(TLThemeHelper::getFormName('google_map_enable_1',false),$invalidValue));
		if(!in_array($option['google_map_map_type_id'],array_keys($GoogleMap->mapTypeId)))
			$Notice->addError(TLThemeHelper::getFormName('google_map_map_type_id'),$invalidValue);				
		if($option['google_map_enable']==1)
		{
			$Validation->notice('isNotEmpty',array($option['google_map_coordinate_lat']),array(TLThemeHelper::getFormName('google_map_coordinate_lat',false),$invalidValue));
			$Validation->notice('isNotEmpty',array($option['google_map_coordinate_lng']),array(TLThemeHelper::getFormName('google_map_coordinate_lng',false),$invalidValue));
		}
		$Validation->notice('isNumber',array($option['google_map_width'],0,100),array(TLThemeHelper::getFormName('google_map_width',false),$invalidValue));
		$Validation->notice('isNumber',array($option['google_map_height'],0,999),array(TLThemeHelper::getFormName('google_map_height',false),$invalidValue));
		$Validation->notice('isNumber',array($option['google_map_map_type_control_enable'],0,1),array(TLThemeHelper::getFormName('google_map_map_type_control_enable_1',false),$invalidValue));
		if(!in_array($option['google_map_map_type_control_style'],array_keys($GoogleMap->mapTypeControlStyle)))
			$Notice->addError(TLThemeHelper::getFormName('google_map_map_type_control_style'),$invalidValue);	
		if(!in_array($option['google_map_map_type_control_position'],array_keys($GoogleMap->position)))
			$Notice->addError(TLThemeHelper::getFormName('google_map_map_type_control_position'),$invalidValue);	
		$Validation->notice('isNumber',array($option['google_map_zoom_control_enable'],0,1),array(TLThemeHelper::getFormName('google_map_zoom_control_enable_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['google_map_zoom_level'],0,21),array(TLThemeHelper::getFormName('google_map_zoom_level',false),$invalidValue));
		if(!in_array($option['google_map_zoom_style'],array_keys($GoogleMap->zoomControlStyle)))
			$Notice->addError(TLThemeHelper::getFormName('google_map_zoom_style'),$invalidValue);	
		if(!in_array($option['google_map_zoom_position'],array_keys($GoogleMap->position)))
			$Notice->addError(TLThemeHelper::getFormName('google_map_zoom_position'),$invalidValue);			
		$Validation->notice('isNumber',array($option['google_map_pan_control_enable'],0,1),array(TLThemeHelper::getFormName('google_map_pan_control_enable_1',false),$invalidValue));
		if(!in_array($option['google_map_pan_control_position'],array_keys($GoogleMap->position)))
			$Notice->addError(TLThemeHelper::getFormName('google_map_pan_control_position'),$invalidValue);	
		$Validation->notice('isNumber',array($option['google_map_scale_control_enable'],0,1),array(TLThemeHelper::getFormName('google_map_scale_control_enable_1',false),$invalidValue));
		if(!in_array($option['google_map_scale_control_position'],array_keys($GoogleMap->position)))
			$Notice->addError(TLThemeHelper::getFormName('google_map_scale_control_position'),$invalidValue);	
		$Validation->notice('isNumber',array($option['google_map_street_view_enable'],0,1),array(TLThemeHelper::getFormName('google_map_street_view_enable_1',false),$invalidValue));
		if(!in_array($option['google_map_street_view_position'],array_keys($GoogleMap->position)))
			$Notice->addError(TLThemeHelper::getFormName('google_map_street_view_position',false),$invalidValue);	
		
		/* Plugin / Fancybox for images */
		$Validation->notice('isNumber',array($option['fancybox_image_padding'],0,999),array(TLThemeHelper::getFormName('fancybox_image_padding',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_margin'],0,999),array(TLThemeHelper::getFormName('fancybox_image_margin',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_min_width'],1,9999),array(TLThemeHelper::getFormName('fancybox_image_min_width',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_min_height'],1,9999),array(TLThemeHelper::getFormName('fancybox_image_min_height',false),$invalidValue));		
		$Validation->notice('isNumber',array($option['fancybox_image_max_width'],1,9999),array(TLThemeHelper::getFormName('fancybox_image_max_width',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_max_height'],1,9999),array(TLThemeHelper::getFormName('fancybox_image_max_height',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_helper_button_enable'],0,1),array(TLThemeHelper::getFormName('fancybox_image_helper_button_enable_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_autoresize'],0,1),array(TLThemeHelper::getFormName('fancybox_image_autoresize_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_autocenter'],0,1),array(TLThemeHelper::getFormName('fancybox_image_autocenter_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_fittoview'],0,1),array(TLThemeHelper::getFormName('fancybox_image_fittoview_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_arrow'],0,1),array(TLThemeHelper::getFormName('fancybox_image_arrow_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_close_button'],0,1),array(TLThemeHelper::getFormName('fancybox_image_close_button_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_close_click'],0,1),array(TLThemeHelper::getFormName('fancybox_image_close_click_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_next_click'],0,1),array(TLThemeHelper::getFormName('fancybox_image_next_click_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_mouse_wheel'],0,1),array(TLThemeHelper::getFormName('fancybox_image_mouse_wheel_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_autoplay'],0,1),array(TLThemeHelper::getFormName('fancybox_image_autoplay_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_loop'],0,1),array(TLThemeHelper::getFormName('fancybox_image_loop_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_playspeed'],1,99999),array(TLThemeHelper::getFormName('fancybox_image_playspeed',false),$invalidValue));
		if(!in_array($option['fancybox_image_animation_effect_open'],array_keys($FancyBox->transitionType)))
			$Notice->addError(TLThemeHelper::getFormName('fancybox_image_animation_effect_open',false),$invalidValue);	
		if(!in_array($option['fancybox_image_animation_effect_close'],array_keys($FancyBox->transitionType)))
			$Notice->addError(TLThemeHelper::getFormName('fancybox_image_animation_effect_close',false),$invalidValue);	
		if(!in_array($option['fancybox_image_animation_effect_next'],array_keys($FancyBox->transitionType)))
			$Notice->addError(TLThemeHelper::getFormName('fancybox_image_animation_effect_next',false),$invalidValue);	
		if(!in_array($option['fancybox_image_animation_effect_previous'],array_keys($FancyBox->transitionType)))
			$Notice->addError(TLThemeHelper::getFormName('fancybox_image_animation_effect_previous',false),$invalidValue);	
		if(!in_array($option['fancybox_image_easing_open'],$this->easingType))
			$Notice->addError(TLThemeHelper::getFormName('fancybox_image_easing_open',false),$invalidValue);	
		if(!in_array($option['fancybox_image_easing_close'],$this->easingType))
			$Notice->addError(TLThemeHelper::getFormName('fancybox_image_easing_close',false),$invalidValue);	
		if(!in_array($option['fancybox_image_easing_next'],$this->easingType))
			$Notice->addError(TLThemeHelper::getFormName('fancybox_image_easing_next',false),$invalidValue);	
		if(!in_array($option['fancybox_image_easing_previous'],$this->easingType))
			$Notice->addError(TLThemeHelper::getFormName('fancybox_image_easing_previous',false),$invalidValue);	
		$Validation->notice('isNumber',array($option['fancybox_image_speed_open'],1,99999),array(TLThemeHelper::getFormName('fancybox_image_speed_open',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_speed_close'],1,99999),array(TLThemeHelper::getFormName('fancybox_image_speed_close',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_speed_next'],1,99999),array(TLThemeHelper::getFormName('fancybox_image_speed_next',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_image_speed_previous'],1,99999),array(TLThemeHelper::getFormName('fancybox_image_speed_previous',false),$invalidValue));
		
		/* Plugin / Fancybox for videos */
		$Validation->notice('isNumber',array($option['fancybox_video_padding'],0,999),array(TLThemeHelper::getFormName('fancybox_video_padding',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_video_margin'],0,999),array(TLThemeHelper::getFormName('fancybox_video_margin',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_video_min_width'],1,9999),array(TLThemeHelper::getFormName('fancybox_video_min_width',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_video_min_height'],1,9999),array(TLThemeHelper::getFormName('fancybox_video_min_height',false),$invalidValue));		
		$Validation->notice('isNumber',array($option['fancybox_video_max_width'],1,9999),array(TLThemeHelper::getFormName('fancybox_video_max_width',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_video_max_height'],1,9999),array(TLThemeHelper::getFormName('fancybox_video_max_height',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_video_autoresize'],0,1),array(TLThemeHelper::getFormName('fancybox_video_autoresize_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_video_autocenter'],0,1),array(TLThemeHelper::getFormName('fancybox_video_autocenter_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_video_fittoview'],0,1),array(TLThemeHelper::getFormName('fancybox_video_fittoview_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['fancybox_video_close_button'],0,1),array(TLThemeHelper::getFormName('fancybox_video_close_button_1',false),$invalidValue));
		
		/* Plugins / Menu box */
		$Validation->notice('isNumber',array($option['menu_box_item_dimension_width'],0,999),array(TLThemeHelper::getFormName('menu_box_item_dimension_width',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_box_item_dimension_height'],0,999),array(TLThemeHelper::getFormName('menu_box_item_dimension_height',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_box_item_dimension_padding'],0,999),array(TLThemeHelper::getFormName('menu_box_item_dimension_padding',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_box_item_icon_position'],0,100),array(TLThemeHelper::getFormName('menu_box_item_icon_position',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_box_item_header_position'],0,100),array(TLThemeHelper::getFormName('menu_box_item_header_position',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_box_item_navigation_arrow_position'],0,100),array(TLThemeHelper::getFormName('menu_box_item_navigation_arrow_position',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_box_circular'],0,1),array(TLThemeHelper::getFormName('menu_box_circular_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_box_infinite'],0,1),array(TLThemeHelper::getFormName('menu_box_infinite_1',false),$invalidValue));
		if(!in_array($option['menu_box_direction'],array_keys($CarouFredSel->direction)))
			$Notice->addError(TLThemeHelper::getFormName('menu_box_direction',false),$invalidValue);
		$Validation->notice('isNumber',array($option['menu_box_item_visible'],1,999),array(TLThemeHelper::getFormName('menu_box_item_visible',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_box_item_start'],0,999),array(TLThemeHelper::getFormName('menu_box_item_start',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_box_scroll_item'],1,999),array(TLThemeHelper::getFormName('menu_box_scroll_item',false),$invalidValue));
		if(!in_array($option['menu_box_scroll_effect'],array_keys($CarouFredSel->effect)))
			$Notice->addError(TLThemeHelper::getFormName('menu_box_scroll_effect',false),$invalidValue);		
		if(!in_array($option['menu_box_scroll_easing'],array_keys($this->easingType)))
			$Notice->addError(TLThemeHelper::getFormName('menu_box_scroll_easing',false),$invalidValue);		
		$Validation->notice('isNumber',array($option['menu_box_scroll_duration'],1,99999),array(TLThemeHelper::getFormName('menu_box_scroll_duration',false),$invalidValue));

		/* Plugins / Menu top */
		$Validation->notice('isNumber',array($option['menu_top_item_dimension_width'],0,999),array(TLThemeHelper::getFormName('menu_top_item_dimension_width',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_top_item_dimension_width_2'],0,999),array(TLThemeHelper::getFormName('menu_top_item_dimension_width_2',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_top_item_dimension_width_3'],0,999),array(TLThemeHelper::getFormName('menu_top_item_dimension_width_3',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_top_item_dimension_width_4'],0,999),array(TLThemeHelper::getFormName('menu_top_item_dimension_width_4',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_top_item_dimension_submenu_width'],0,999),array(TLThemeHelper::getFormName('menu_top_item_dimension_submenu_width',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_top_item_dimension_submenu_width_2'],0,999),array(TLThemeHelper::getFormName('menu_top_item_dimension_submenu_width_2',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_top_item_dimension_submenu_width_3'],0,999),array(TLThemeHelper::getFormName('menu_top_item_dimension_submenu_width_3',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_top_item_dimension_submenu_width_4'],0,999),array(TLThemeHelper::getFormName('menu_top_item_dimension_submenu_width_4',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_top_item_dimension_padding'],0,999),array(TLThemeHelper::getFormName('menu_top_item_dimension_padding',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_top_item_dimension_padding_2'],0,999),array(TLThemeHelper::getFormName('menu_top_item_dimension_padding_2',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_top_item_dimension_padding_3'],0,999),array(TLThemeHelper::getFormName('menu_top_item_dimension_padding_3',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_top_item_dimension_padding_4'],0,999),array(TLThemeHelper::getFormName('menu_top_item_dimension_padding_4',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_top_fixed'],0,1),array(TLThemeHelper::getFormName('menu_top_fixed_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_top_fixed_scroll_hide'],0,1),array(TLThemeHelper::getFormName('menu_top_fixed_scroll_hide_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_top_delay'],0,99999),array(TLThemeHelper::getFormName('menu_top_delay',false),$invalidValue));
		$Validation->notice('isNumber',array($option['menu_top_speed'],0,99999),array(TLThemeHelper::getFormName('menu_top_speed',false),$invalidValue));
		if(!in_array($option['menu_top_mobile_visible_step'],array(0,1,2,3)))
			$Notice->addError(TLThemeHelper::getFormName('menu_top_mobile_visible_step_1',false),$invalidValue);			
		
		/* Plugins / Nivo slider */
		$Validation->notice('isNumber',array($option['nivo_slider_enable'],0,1),array(TLThemeHelper::getFormName('nivo_slider_enable_1',false),$invalidValue));
		foreach((array)$option['nivo_slider_effect'] as $index=>$value)
		{
			if(!in_array($value,array_keys($NivoSlider->effect)))
				$Notice->addError(TLThemeHelper::getFormName('nivo_slider_effect',false),$invalidValue);	
		}
		$Validation->notice('isNumber',array($option['nivo_slider_slice_number'],1,9999),array(TLThemeHelper::getFormName('nivo_slider_slice_number',false),$invalidValue));
		$Validation->notice('isNumber',array($option['nivo_slider_col_number'],1,9999),array(TLThemeHelper::getFormName('nivo_slider_col_number',false),$invalidValue));
		$Validation->notice('isNumber',array($option['nivo_slider_row_number'],1,9999),array(TLThemeHelper::getFormName('nivo_slider_row_number',false),$invalidValue));
		$Validation->notice('isNumber',array($option['nivo_slider_transition_speed'],0,99999),array(TLThemeHelper::getFormName('nivo_slider_transition_speed',false),$invalidValue));
		$Validation->notice('isNumber',array($option['nivo_slider_pause_time'],0,99999),array(TLThemeHelper::getFormName('nivo_slider_pause_time',false),$invalidValue));
		$Validation->notice('isNumber',array($option['nivo_slider_start_slide'],0,999),array(TLThemeHelper::getFormName('nivo_slider_start_slide',false),$invalidValue));
		$Validation->notice('isNumber',array($option['nivo_slider_direction_navigation_enable'],0,1),array(TLThemeHelper::getFormName('nivo_slider_direction_navigation_enable_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['nivo_slider_pause_hover'],0,1),array(TLThemeHelper::getFormName('nivo_slider_pause_hover_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['nivo_slider_manual_advance'],0,1),array(TLThemeHelper::getFormName('nivo_slider_manual_advance_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['nivo_slider_random_start'],0,1),array(TLThemeHelper::getFormName('nivo_slider_random_start_1',false),$invalidValue));
		
		/* Plugins / Galleries */
		$Validation->notice('isNumber',array($option['gallery_excerpt_limit'],0,999),array(TLThemeHelper::getFormName('gallery_excerpt_limit',false),$invalidValue));
		$Validation->notice('isNumber',array($option['gallery_filter_menu_show_default'],0,1),array(TLThemeHelper::getFormName('gallery_filter_menu_show_default_1',false),$invalidValue));
		$Validation->notice('isNumber',array($option['gallery_info_box_show_default'],0,1),array(TLThemeHelper::getFormName('gallery_info_box_show_default_1',false),$invalidValue));
		if(!in_array($option['gallery_layout_default'],array_keys($GalleryPost->galleryLayout)))
			$Notice->addError(TLThemeHelper::getFormName('gallery_layout_default',false),$invalidValue);	
		
		/* Plugin / Images */
		if(!in_array($option['image_hover_effect'],array_keys($this->imageHoverEffect)))
			$Notice->addError(TLThemeHelper::getFormName('image_hover_effect'),$invalidValue);
		
		/* Text */
		$Validation->notice('isNumber',array($option['text_translator_enable'],0,1),array(TLThemeHelper::getFormName('text_translator_enable',false),$invalidValue));
		$Validation->notice('isNumber',array($option['text_translator_method'],1,2),array(TLThemeHelper::getFormName('text_translator_method_1',false),$invalidValue));

		/* Bulk */
		$bulk=array();
		$postIndex=array('post_content_widget_area','post_content_widget_area_location','post_footer_widget_area','post_menu_top','post_header_visible','post_category_visible','post_author_visible','post_tag_visible','post_comment_count_visible');
		foreach($postIndex as $index)
		{
			if($option['bulk_blog_'.$index]!=-10)
				$bulk[$index]=$option['bulk_blog_'.$index];
			
			unset($option['bulk_blog_'.$index]);
		}
		if(count($bulk))
		{
			$Post=new TLThemePost();
			$Post->bulk($bulk);
		}
		
		$bulk=array();
		$pageIndex=array('page_content_widget_area','page_content_widget_area_location','page_footer_widget_area','page_menu_top','page_header_visible');
		foreach($pageIndex as $index)
		{
			if($option['bulk_'.$index]!=-10)
				$bulk[$index]=$option['bulk_'.$index];
			
			unset($option['bulk_'.$index]);
		}
		if(count($bulk))
		{
			$Page=new TLThemePage();
			$Page->bulk($bulk);
		}
		
		if($Notice->isError())
		{
			$response['local']=$Notice->getError();
		}
		else
		{
			$response['global']['error']=0;
			TLThemeOption::updateOption($option);
		}

		$response['global']['notice']=$Notice->createHTML(THEME_PATH_TEMPLATE.'notice.php');

		echo json_encode($response);
		exit;
	}
	
	/**************************************************************************/
	
	function publicInit()
	{
		if(is_rtl()) 
		{
		    $this->publicScript['rtl-js'] = array(1,THEME_URL_SCRIPT,'rtl.js',array('jquery'),false,true);			    
		}
	    
		$GoogleFont=new TLThemeGoogleFont();
		$GoogleFont->setToStyle($this->publicStyle);
		
		$this->includeIfEnable(TLThemeOption::getOption('google_map_enable'),'google-map');
		$this->includeIfEnable(TLThemeOption::getOption('contact_form_enable'),'contact-form');
		$this->includeIfEnable(TLThemeOption::getOption('nivo_slider_enable'),'jquery-nivo-slider','jquery-nivo-slider');
		$this->includeIfEnable(TLThemeOption::getOption('responsive_mode_enable'),null,array('responsive-width-0-989','responsive-width-0-767','responsive-width-768-989','responsive-width-480-767','responsive-width-0-479'));

		$this->registerStyle($this->publicStyle);
		$this->registerScript($this->publicScript);
		
		$script=array();
		foreach($this->publicScript as $index=>$value)
		{
			if($value[0]==1) $script[]=$index;
		}
		
		$style=array();
		foreach($this->publicStyle as $index=>$value)
		{
			if($value[0]==1) $style[]=$index;
		}
		
		$this->enqueueStyle($style);
		$this->enqueueScript($script);	
		
		$aPattern=array
		(
			'image'					=>	'/^image_/',
			'menuTop'				=>	'/^menu_top_/',
			'rightClick'			=>	'/^right_click_/',
			'selection'				=>	'/^copy_selection_/',
			'fancyboxImage'			=>	'/^fancybox_image_/',
			'fancyboxVideo'			=>	'/^fancybox_video_/',
			'fancyboxText'			=>	'/^text_plugin_fancybox_/',
		);
		
		$option=TLThemeOption::getOptionObject();
		
		foreach($aPattern as $indexPattern=>$valuePattern)
		{
			foreach($option as $index=>$value)
			{
				if(preg_match($valuePattern,$index,$result))
				{
					$nIndex=preg_replace($valuePattern,'',$index);
					$data[$indexPattern][$nIndex]=$value;
				}
			}
		}
		
		$data['config']['ajaxurl']=admin_url('admin-ajax.php');
		
		$data['config']['theme_url']=THEME_URL;
		$data['is_rtl']=is_rtl() ? 1 : 0;
		
		$param=array
		(
			'l10n_print_after'=>'themeOption='.json_encode($data).';'
		);
			
		wp_localize_script('public','themeOption',$param);
	}
	
	/**************************************************************************/
	
	function includeIfEnable($test,$script=array(),$style=array())
	{
		if($test!=1) return;

		foreach((array)$script as $value)
		{
			if(array_key_exists($value,$this->publicScript))
				$this->publicScript[$value][0]=1;
		}
		foreach((array)$style as $value)
		{
			if(array_key_exists($value,$this->publicStyle))
				$this->publicStyle[$value][0]=1;	
		}
	}
	
	/**************************************************************************/
	
	function registerScript($script)
	{
		foreach($script as $index=>$data) 
			wp_register_script($index,$data[1].$data[2],$data[3],$data[4],$data[5]);
	}
	
	/**************************************************************************/
	
	function registerStyle($style)
	{
		foreach($style as $index=>$data) 
		{
			if(!isset($data[3])) $data[3]=array();
			wp_register_style($index,$data[1].$data[2],$data[3]);	
		}
	}
	
	/**************************************************************************/
	
	function enqueueScript($script)
	{
		foreach((array)$script as $data) wp_enqueue_script($data);
	}
	
	/**************************************************************************/
	
	function enqueueStyle($style)
	{
		foreach((array)$style as $data) wp_enqueue_style($data);
	}
	
	/**************************************************************************/

	function automaticExcerptLength()
	{
		global $post;
		
		$length=55;

		switch($post->post_type)
		{
			case 'post':
				$length=TLThemeOption::getOption('blog_post_automatic_excerpt_length');
			break;
		}
		
		return($length);
	}
	
	/**************************************************************************/
	
	function filterExcerptMore()
	{
		$Theme=new TLTheme();
		$length=$Theme->automaticExcerptLength();
		
		if($length>0) return('<span class="excerpt-more"> [...]</span>');
		
		return('');
	}
	
	/**************************************************************************/
	
	function addPlugin()
	{
		$plugin=array
		(
			array
			(
				'name'								=>	'Theme Demo Data Installer',
				'slug'								=>	'theme-demo-data-installer',
				'source'							=>	THEME_PATH_SOURCE.'theme-demo-data-installer.zip',
				'required'							=>	true,
				'version'							=>	'1.5',
				'force_activation'					=>	true,
				'force_deactivation'				=>	true
			)			
		);
	
		$config=array
		(
			'default_path'							=>	'',                      
			'menu'									=>	'tgmpa-install-plugins', 
			'has_notices'							=>	true,
			'dismissable'							=>	true,
			'dismiss_msg'							=>	'',
			'is_automatic'							=>	true,
			'message'								=>	'', 
			'strings'								=>	array
			(
				'page_title'						=>	__('Install Required Plugins','tgmpa'),
				'menu_title'						=>	__('Install Plugins','tgmpa'),
				'installing'						=>	__('Installing Plugin: %s','tgmpa'),
				'oops'								=>	__('Something went wrong with the plugin API.','tgmpa'),
				'notice_can_install_required'		=>	_n_noop('This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'tgmpa' ),
				'notice_can_install_recommended'	=>	_n_noop('This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'tgmpa' ),
				'notice_cannot_install'				=>	_n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.','tgmpa' ),
				'notice_can_activate_required'		=>	_n_noop('The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'tgmpa' ),
				'notice_can_activate_recommended'	=>	_n_noop('The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'tgmpa' ),
				'notice_cannot_activate'			=>	_n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.','tgmpa' ),
				'notice_ask_to_update'				=>	_n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'tgmpa' ),
				'notice_cannot_update'				=>	_n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.','tgmpa' ),
				'install_link'						=>	_n_noop('Begin installing plugin','Begin installing plugins','tgmpa' ),
				'activate_link'						=>	_n_noop('Begin activating plugin','Begin activating plugins','tgmpa' ),
				'return'							=>	__('Return to Required Plugins Installer','tgmpa'),
				'plugin_activated'					=>	__('Plugin activated successfully.','tgmpa'),
				'complete'							=>	__('All plugins installed and activated successfully. %s','tgmpa' ),
				'nag_type'							=>	'updated'
			)
		);

		tgmpa($plugin,$config);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/

?>