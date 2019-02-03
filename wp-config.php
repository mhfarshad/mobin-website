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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\xampp\htdocs\test.mobin.xyz\mobin-website\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'the7');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Xk3u5r*5');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'VfFY$)[IU*~~.HAzs8NBg<[8KHmgBKkLT+^9;_BO$rp/N+x`(,m}|0-FA+m1}s_E');
define('SECURE_AUTH_KEY',  'Gm`;d-L|},E|k+|]{q#Z_.xj@g]wF~wgP9;aj0,Ov~p!^|U1EWsEeq8!5V_XOa,G');
define('LOGGED_IN_KEY',    'UXa9{SWJq0Q%Hw!f7,(.]a+s>Jcc=-~Emp}v>Dy;3|+GD(U^B7Spv6THHLGPblE,');
define('NONCE_KEY',        'NJHVW/+,HaeUtkH=Sph7>{d`.|4kR36<n>:j9LlkeG9;)~wuwN(o!V<>;xa?Vy%C');
define('AUTH_SALT',        'x0!j-Zx/r,J|r^D5o/K8dC*h>.eylGK<4ReDaEEXhYYvE=^#sE^,9qIS?V0*Vc8S');
define('SECURE_AUTH_SALT', '+~zI@bspQ0*vIY:/RgJccV^OoZ}=wXn17;Yu(T6[!*_{5<cvMNT{Fv}=$?2O<8AC');
define('LOGGED_IN_SALT',   '8X-a~~Rjtgg3]9:iV07G&6v*#cz9/?>9|^^yJRLa+/6%ff!1}fB,Q`v^Xg<g#$?!');
define('NONCE_SALT',       'P-$S7t=7Dm2&~dWe-hJrmyO<p; 5 K8 #TwDP.6pOXGTk;mRudx!p-],q-2>gg0R');

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
