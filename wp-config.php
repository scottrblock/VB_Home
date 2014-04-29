<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ventureboard_home');

/** MySQL database username */
define('DB_USER', 'ventureboard');
  
/** MySQL database password */
define('DB_PASSWORD', 'thinkdifferent');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '93#j;cf})S.D7{,I+u~?rBF9G`x>$|c]JJS(W&qBqI|2zQ`F(|7?El0F}04C`1gk');
define('SECURE_AUTH_KEY',  'n6D|^jMrQfI5NA/<Fa=-ig<+nzc4*%&c TM&?q<JTFg*zI4f=sKBgzp-=YDU:_Nh');
define('LOGGED_IN_KEY',    'r-L3sJ3h}{o}tM<MOfD|))#uH!G]zUg}#c)ThVz=xv AMiax~ ])|,>g7|0wA! |');
define('NONCE_KEY',        '6Rt6YnP XeuSV-9@1bF6mG;nEe8,|rCx(FPk:h<;JI3cXAd*$GG8r)3 |wdOK^1[');
define('AUTH_SALT',        '`|U9 ,QX6>.+QK5J:Y2|Sg9F5& 9j0l_DpW(+E,-$>I!Fma7T.4&[^jo;lmh#Zes');
define('SECURE_AUTH_SALT', ':&%a0MHHRr_<_Lw1Fqwn}R5^~7gpRc?{wH{<t=SW~Dvik*7qBaF84edCLT1[^d<=');
define('LOGGED_IN_SALT',   'a_B~ ;sfWP-a-gH7I?o_?Mbg#/RF3OvyQ^vbR[HXWUWx{9-fjj4wDEpvLsRM7f)x');
define('NONCE_SALT',       'hxb8y7!`m]kVabB[C+)+-+:A:ne>1f3TVmgbmNmfy:-Hep2@Xto-wjcuU,QG.A.W');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vb_wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
