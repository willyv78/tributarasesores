<?php

/******************************************************************************/
/******************************************************************************/

require_once('define.php');

define('THEME_URL',get_template_directory_uri().'/');
define('THEME_PATH',get_template_directory().'/');

define('THEME_TEMPLATE_DIR','template/');

define('THEME_PATH_CLASS',THEME_PATH.'class/');
define('THEME_PATH_ADMIN',THEME_PATH.'admin/');
define('THEME_PATH_STYLE',THEME_PATH.'style/');
define('THEME_PATH_SOURCE',THEME_PATH.'source/');
define('THEME_PATH_PUBLIC',THEME_PATH.'public/');
define('THEME_PATH_SCRIPT',THEME_PATH.'script/');
define('THEME_PATH_LIBRARY',THEME_PATH.'library/');
define('THEME_PATH_TEMPLATE',THEME_PATH.'template/');

define('THEME_URL_STYLE',THEME_URL.'style/');
define('THEME_URL_SCRIPT',THEME_URL.'script/');
define('THEME_URL_LIBRARY',THEME_URL.'library/');

/******************************************************************************/

$class=scandir(THEME_PATH_CLASS,1);

require_once(THEME_PATH_CLASS.'TLTheme.Widget.class.php');

foreach($class as $className)
{
	$file=THEME_PATH_CLASS.$className;
	if(is_file($file)) require_once($file);
}

require_once(THEME_PATH_LIBRARY.'recaptcha/recaptchalib.php');
require_once(THEME_PATH_LIBRARY.'phpMailer/class.phpmailer.php');
require_once(THEME_PATH_LIBRARY.'twitterOAuth/twitteroauth/twitteroauth.php');
require_once(THEME_PATH_LIBRARY.'tgm_plugin_activation/class-tgm-plugin-activation.php');

/******************************************************************************/
/******************************************************************************/

?>