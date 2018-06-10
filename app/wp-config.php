<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'at2018');

/** MySQL database username */
define('DB_USER', 'airtel');

/** MySQL database password */
define('DB_PASSWORD', 'hi');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'D8rmTW-Gzl4R{ioI.ui9xW5SpQ0Un-:HGJ}<,nC*/G07p`.B1LDm^RG.{S-wht:2');
define('SECURE_AUTH_KEY',  'TNgHbu$RmsX-A[DNre|3=N{2ij9AQ,Z?x&H 9/yVRx3[duIj1&bg@j8+mO`pdcZR');
define('LOGGED_IN_KEY',    '&2N)uFDr7v8Fdi<B?nQnpr~~5DYkr$B]_:LkLMD>}8-Tz4,sM.nc)BG6d}6|59fu');
define('NONCE_KEY',        '|3Rpxc0ok}~f#+TJq^S7KtGl}Uhaoufti?M|`n](<jSk9}6(Y)x|uDU>S)(CCcvB');
define('AUTH_SALT',        'g7i9B%c`:#pu,X/DXxS`l$W}bn`xL1@zFnr2q2Y.bKsAwQh{,:1^T!tmV9z6hBf/');
define('SECURE_AUTH_SALT', 'uA`M}V=MroP}abs~o%U__f(T:zYI8p%>5!m{$}@c}OCz[c2[]-D*_ZWd^,Vq|SY:');
define('LOGGED_IN_SALT',   'Ow|8e0,C:hS+K)j25K%swkIB(u;_ZH}vunxRyyM)kmY|=*sI`QQTho?2d=eUj(pL');
define('NONCE_SALT',       '8dIQkfY+zbVs]5oZ2/%N},8;VGOr,3T>blwY#EoKrQ6x=*W>;(o!aqE)lmrr64g0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
