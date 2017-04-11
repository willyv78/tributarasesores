<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
//define('DB_NAME', 'plantillatributar');
define( 'DB_NAME', 'tributa1_wp' );

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');
//define('DB_USER', 'hache');
//define( 'DB_USER',     'tributa1_user' );

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'gemelo22');
//define('DB_PASSWORD', 'nrv%8Pz1Ncqy');
//define( 'DB_PASSWORD', 'rvVek0f3vNzbD3G' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', '127.0.0.1');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'L|j9Ek6nGU`(:C=*0lYi,Rw5Wfnc>sS5e`%.@wQ[Jh`@8f*!L|?y#8drEUo-jbOI'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'S+?)trOMzlED`(/)gK;?;`cmaaWtV;f=8JZ!P{!(#L%D!)RMV-[i]*J-4}Th!+b)'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', ':.x=s,t@^HS.>Ex~A8}Y|#&]:*mmZ!zM;n7D/{,cx?U;h$guvr9#j6Bm`ni/Xxw#'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'hO{.P#LawK<lIK7AU8?{@yQH;({+[Dc|G=AMZ[vh%.=?GvI2kax3=MJ@iV {qErp'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '|;FC@X~h!,(xyf!>+y?9;CoUe416pt-V$DN-g7VDb!eG2BL}43w;ft9(4aZ@_n05'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '%vT[-~XgI>`)1q;OB4U7)vR5Kqv<=eNs-+z)!?xe/Uv:G`AMCk^HYmK[Lvsd3|tc'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'u$ZPW$rp46uV=Z7B|&x9^~`{O{W{@Wt#=yw+qlHGQHI6![JVR7BwI[/G8tuA9z.1'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '?s^(b^44~:7wyYX3T&8cufbC8OH}{m|E#|/8}xZz3ZU?uevzdv`Iy[OnSC0.;Yk['); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'trib_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

