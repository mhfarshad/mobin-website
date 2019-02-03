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
define('DB_NAME', 'mob');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost:33066');

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
define('AUTH_KEY',         '604;-fF1E%]^/(%S)XPO-i[|@/w>4{o[5+1|>?mb(@^FuO>DX(Wf;_G_qN&]DIY!');
define('SECURE_AUTH_KEY',  'cK7@ jPNEy,xKtOZa=5Kx*W*/e/-#ey-O)D<n=gXJLZ)ykDT:w`z(SeV^xG,fvDp');
define('LOGGED_IN_KEY',    '[UVjRv:U}tyyRN0b/%XR8ho~H0SpU%*dT4?ag0zyn09Q;#~b6YuM1KZ~bhAvk<UX');
define('NONCE_KEY',        'U]&sm-9&Qt4EO*}TF04^M+3))$y<d6L$B;Uquv({~#)4(8B.gn8.dc3[RhZlRPCl');
define('AUTH_SALT',        'liX[9cZU=::VD|z(h,(+e*ImmZ{*iOb!DI?1#KW(-,L5}g_!VVgDpO1|51l^v%=Y');
define('SECURE_AUTH_SALT', 'S[(Mkjbi}n2Sj>RE=s_{^)W(R&%:9DJA(rp5pu~S7ySo|a#p)@0`P#q^4,D9Dj$.');
define('LOGGED_IN_SALT',   '?P*9ry68Aj[Sx+S)3G1hSOSCTIUm^>lh1 TlCvlXF*d0W.T^oA&|gd<GVES.,GE{');
define('NONCE_SALT',       'S5#vnXl316,^3xQ<>{9)UCMJAKLM|+NkM:kZM^+A5Ss/`{xy7x%w`IfGotQ(SSLC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mob_';

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
