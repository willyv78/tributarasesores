<?php
/* 
Plugin Name: Theme Demo Data Installer
Plugin URI: http://quanticalabs.com
Description: Theme Demo Data Installer helps install dummy content (posts, pages, images etc.), widget settings and setup theme options in QuanticaLabs themes.
Author: QuanticaLabs
Version: 1.5
Author URI: http://quanticalabs.com
*/

require_once(plugin_dir_path(__FILE__).'include.php');

/******************************************************************************/

$ThemeInstaller=new TIThemeInstaller();

$ThemeInstaller->includeClass();
$ThemeInstaller->includeConfig();

register_activation_hook(__FILE__,array($ThemeInstaller,'pluginActivation'));

if(is_admin())
{
	add_action('admin_init',array($ThemeInstaller,'adminInit'));
	add_action('admin_menu',array($ThemeInstaller,'adminMenuInit'));
	
	add_action('wp_ajax_install_demo_data',array($ThemeInstaller,'installSampleData'));
}

load_plugin_textdomain(PLUGIN_THEME_INSTALLER_CONTEXT,false,dirname(plugin_basename(__FILE__)).'/languages/');

?>