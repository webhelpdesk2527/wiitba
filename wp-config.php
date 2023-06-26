<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wiitba' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Krishna16!' );

/** Database hostname */
define( 'DB_HOST', 'wiitba.cohz7d8lvpkf.ap-southeast-2.rds.amazonaws.com' );

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
define('AUTH_KEY',         'Z}ZmjuYhM:BKMK1|gKQf<~Dd3(Mc]0jrHLbs -N.Rf_-r.7+R|uRGcPi1b=W>$_v');
define('SECURE_AUTH_KEY',  'xYW14anVtK[Of:hC_<+&kq-*x+Ft2}OT9aZED:8!m!gD`afu)f!vatf=3Cn/tC&q');
define('LOGGED_IN_KEY',    '9ND@bjo+u~!>]S;Ck3yiDw<ju5VJ4!b*!o7V?g4eW7RUObvS,o+k/fslJ=YK`?I`');
define('NONCE_KEY',        'Z_pC7TgTH^_^8-rDCM@+av;v|aZBG)nM8s2WRuyrsjql4xcJ^. !sZ|_`%nVc/#0');
define('AUTH_SALT',        '[i&E)oRbY5CW^&=mGr*QpP3LNbu+z0|CpeAo1 WIJt$jA|`VJ5t6cey+)j@xkeG:');
define('SECURE_AUTH_SALT', 'm%_9 d%sCx!ht0=5gbD^MkMp?I$qjw4PG{?K)_p3H8gfEC9rCPU+u4$`CCH|Mxb?');
define('LOGGED_IN_SALT',   '7FCE=JjjHX)H!Qp2;PK>8BeuIOu*z{rj;ovI|,-U5bg1n5k+!rB,-]j }#usTt)7');
define('NONCE_SALT',       'ri5Z@:-s0.r,]o<-[NZ,zx+@_bNK/HN$j7&*qm3+h_^0&~s829}m2qjMvu^3iMY-');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wiitba_';

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
