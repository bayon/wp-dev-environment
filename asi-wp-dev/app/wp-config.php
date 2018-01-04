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
define('DB_NAME', 'dbname');

/** MySQL database username */
define('DB_USER', 'dbuser');

/** MySQL database password */
define('DB_PASSWORD', '123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define( 'WPRB_AJAX_BASE', 'http://localhost:3000/wp-json/wprb/v1' );


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Fi{sP-ph33_52rQfKdcbO_D0wqG+7W-d|R$y$u3`[:}/$b4T6-w6@v2!+q&*jr- ');
define('SECURE_AUTH_KEY',  'OAhf5#uJAi^Kz=B|3DWFe~+15{0=^6G}j`G-#{Mogo&vr,So5V<b:e:-3&M/!6S,');
define('LOGGED_IN_KEY',    's{JEitbIJ&-e7T[Egg3FnA(4JPoq{ pjU:-SF4#8|>y2idm_Hcjs%nJ{FbQ$$^5i');
define('NONCE_KEY',        '|ZYs$@$Hs4T^A7Wjnfd@%&p|a&4^8F&~m=S=z&;4/1r?U;8EsHC`>vs$#rTpaRHl');
define('AUTH_SALT',        'p!L~>gWW+b>-+`oF9lLo ,DA&)`u<s$][#. yQW.DvdF_,E@.M|iqD(.wy7UMe7T');
define('SECURE_AUTH_SALT', 'K!_?5H{cDw]${d/S%-Xw|/TNK>}(A**dBf)=xlV6m5zes6uw-H-rtq)G@1.-L*kB');
define('LOGGED_IN_SALT',   'x&|P7S%E8OEW7?9qx4+rKV?=Dab}7qVc%4Qh,>[F3j)d}-_=%t8,f(p-gS&L;_}>');
define('NONCE_SALT',       '{y{-Ex|Vi%{e4-eF wW9cuav/tgYBLpfkkl5&33k^d1k>[YA2TQmO$ACF4.NEI0:');

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
