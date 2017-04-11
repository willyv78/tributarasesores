<?php

/******************************************************************************/
/******************************************************************************/

$Theme=new TLTheme();
$GoogleFont=new TLThemeGoogleFont();

$GoogleFont->scheduleDownload();

add_action('admin_init',array($Theme,'adminInit'));
add_action('admin_menu',array($Theme,'adminMenuInit'));
add_action('wp_ajax_theme_admin_google_font_dictionary',array($GoogleFont,'getFontByName'));

add_action('wp_ajax_theme_admin_option_page_save',array($Theme,'adminOptionPanelSave'));
add_action('wp_ajax_theme_admin_option_page_restore',array($Theme,'adminOptionPanelRestore'));
add_action('wp_ajax_theme_admin_option_page_import',array($Theme,'adminOptionPanelImport'));

add_action('wp_ajax_theme_admin_option_page_import_google_font',array($GoogleFont,'import'));

add_action('after_setup_theme',array($Theme,'setupTheme'));
add_action('switch_theme',array($Theme,'switchTheme'));

add_filter('upload_mimes','custom_upload_mimes');
 
function custom_upload_mimes($existing_mimes=array()) 
{
	$existing_mimes['txt']='text/plain';
    return $existing_mimes;
}

/******************************************************************************/
/******************************************************************************/

?>