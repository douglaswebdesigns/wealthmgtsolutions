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
define('DB_NAME', 'wealthmgDB9bkhp');

/** MySQL database username */
define('DB_USER', 'wealthmgDB9bkhp');

/** MySQL database password */
define('DB_PASSWORD', 'tHQZTbk6EK');

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
define('AUTH_KEY',         '7bnbuC1oZG~s@1!:!ZK0ockZs@rF4!YJ2#9H5pep_x_x;9]hO9wlw[~[~S^uM7IbQ');
define('SECURE_AUTH_KEY',  '1ODMfUfQ<ujA{6PELAuiP<+<A{6]eT@VJRFYkY}^nF0BjQFyny{^<$UdS#-|9[5[');
define('LOGGED_IN_KEY',    '^rg7}3MBla1~tG5G1KVK~sZ1|:!5G1odK@sbP.qe6{2LAL6taL.x_6#2#eK5thrbv');
define('NONCE_KEY',        'p#*lD;9;HOD+pW]~rgz^vMB>cQbM,rf7<3MAI6ubM.yg-kwkC:zRGRkVgV>@kB07}');
define('AUTH_SALT',        '!cJ4sgr|v!vN4>cRcNgrg7>1pelat~tG5_ZOVK~lZ1|-R8[hVEXITH*mX;.;H2D2m');
define('SECURE_AUTH_SALT', '5sZO|-h8[4[CK8wgs|z|z}4>gVatiti+_xO9KeSdO#th5]5O9K9wh{jXfTmymA6P');
define('LOGGED_IN_SALT',   'rfM^u^u<3.bQ6ufqfy*uLAHbP@oG}!ZNVockY0@rF4FYJUF$rY^pd1~sK5GZKVK');
define('NONCE_SALT',       '7[~1C1lZG~o-o!:!ZK0oZkZs@oG4i6{6{eLAxit<+#+P6]iSexlth9jY^{F7{jY');

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
