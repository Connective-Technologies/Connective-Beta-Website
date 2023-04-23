<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u483169275_X45Yu' );

/** Database username */
define( 'DB_USER', 'u483169275_uBmgZ' );

/** Database password */
define( 'DB_PASSWORD', 'AHSlWUAP5D' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ';.Jp.~ZJ<{Z+:oU1IZ-.$gbE4}43lxfKewalL6vF0jjfXqx;}XXMF~ SPVYD4SI$' );
define( 'SECURE_AUTH_KEY',   '/8hasi.d8NxkvVqSVw~`)^pjp!1;>6IiTY%B4mYIA`rq^Q%@y.^?jrU!62gGWPgh' );
define( 'LOGGED_IN_KEY',     ')lH`Eqs]T)z~gN7oZ0y3uNf*Cxy]b-eqdz+fNKq)kuf[IxwEq:hGT@v<$w`51G9Y' );
define( 'NONCE_KEY',         'BcUG?}i;Mh4MdI/RK3h8D[$yRA0MU5_GL#WZlL0uyB7wwa-w_P?_{E9h+7_#Dd_T' );
define( 'AUTH_SALT',         '3e~Aw^{`il=;Q^0;U~]xtvmyX?oPA=yhKX:#[,uvyT{AXym7vKaZ]K-(Vt5{hOI@' );
define( 'SECURE_AUTH_SALT',  'B>0wErbLJmgi,~:;RT3l7nH:w5vs53>[uQ@,}I .)JC3a([`vi|71PeX>y4uo<_<' );
define( 'LOGGED_IN_SALT',    'j.xdK5u/J *{-(x3~.KY079.=Jlk:z34W?sIBW.`4(GADsT->tq2aXeJX(>=La_0' );
define( 'NONCE_SALT',        'VBQ/&R7PHV=nPY)Q>0?tXKZRe|6s0X&$!4d,Q5b~Mxz##QcB>qngqx,e/mQu[G#v' );
define( 'WP_CACHE_KEY_SALT', 'ff~]s_],z@:<g^,2Z6LnG<>i  uB.-Ep/w:A9c6+SU_gA)T<g]qm<.9S<bs5>dpI' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
