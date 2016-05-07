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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Z.DW0[XB!r(yan0}/wcel<+QP,P+<b2{8Bfap!9vlr2bAMNl.RULAsz-S@1TN;#M');
define('SECURE_AUTH_KEY',  '%~$qV#7Lv#$#O.9ocH>8?]?_a]!jVWhzAEV0|BtViH3imH#%Q*_:GXnkLyq6mVx1');
define('LOGGED_IN_KEY',    '0e,waQ0fv/aE_($V3}fa1=yP4q8Gug@H{mp#qB<w?e(tIeHc9iQ}J{:*dM2UHB3`');
define('NONCE_KEY',        'e%Y@KPy-l&/?GcK,ZtNkWI-j,,:Xc*K0TPqxvHi&us4N{)QmiV9l$F-1^>6W^(O{');
define('AUTH_SALT',        ',N>+uW|g:;_YTxk__H3q%Xg&.4O2$tZ&xM].&X+]lK9kNb,7RJ{LIqk5yGYM8 o0');
define('SECURE_AUTH_SALT', 'kHgPZe+W=K?v;8?*rV{oTQQhwv&+-kcYLf*9ugRKVtqDO:{)_7u{w([CIl;O`s$.');
define('LOGGED_IN_SALT',   'y,U*Fg{2R KvUjj`t(~|+?97a@`}8@|?<!Qg[LlJa+I(n^kBw)C8_<8Sj/esk:q%');
define('NONCE_SALT',       'EpzTRR(8;pG)v2*C<7CsD- Z5OmzXJ~2 y^ %IUO:t1cb0n`y(aA!e/N8A`(bswr');

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
