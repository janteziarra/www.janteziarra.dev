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
define('DB_NAME', 'janteziaDByajx8');

/** MySQL database username */
define('DB_USER', 'janteziaDByajx8');

/** MySQL database password */
define('DB_PASSWORD', 'JjX27rRXDJ');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '<AHuXm+{t.2HD#6HW9ap*it#6~;DS5KapSWl~~_1-[DO1GhwOd~:w!1G[84GVKZk-');
define('SECURE_AUTH_KEY',  'rj$v>^3,y>BYQ7MFYvnXMjbu{^qj$3{E7<A3QIQmbyfXq.$API;I6PiPHbTm*i');
define('LOGGED_IN_KEY',    '_G:G9SKdOCZSl_wh-s|~1!-:G8VK4NGdRoVNkZw[!ogz0|C[!4}FcVB4NgYscUogz');
define('NONCE_KEY',        'uiu.2+;ET6PixmPix#p*2LD]D5PiaH9SpexhWt#+;-t#91K5]GaOlSKdwp_ph-s#9');
define('AUTH_SALT',        'Yy>u,$I7.7QEXEXMfybujy{y<6P2<ATLfLeXq.yi+q.6;+;H6T9;HeTmSmex]*l_');
define('SECURE_AUTH_SALT', 'd8!1G5K1GZoVkZs!k@:G[@}CV8RkzoRkz}v>8}B>7RgNcQgzcv,7^v,7M3IcQfMbu');
define('LOGGED_IN_SALT',   '@CRG}F8RkRFYs|o@r,8,z}BR7QJcUnUngz},r,$}J{,7IcUBYMj$rXuj$>u<^3I');
define('NONCE_SALT',       'aWDtailSe;x_#t-L19D]1hOSaGx~lpwd:9_|1-KWCCO5hsZZlR~[w-hsC|14@[ZGJ');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
