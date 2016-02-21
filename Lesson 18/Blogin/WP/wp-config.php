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
define('DB_NAME', 'blogin_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'dBXDSq<3Nw}ukJ`cWn>v4rDL_&AxKf2aF M|sn+|!od=%PO U.Nm!I9Kb-5!SJ=d');
define('SECURE_AUTH_KEY',  '?<L2 (EuXy^9B1NDmLHr!6-/OO~l-+)&t~]2FM|8u}cU5_zOGH$N;&2gMZ/dv1-V');
define('LOGGED_IN_KEY',    'cz(>1L.k|VnAaG 6::z*^ZX&+z#)GTNF3@6RX6.=gBrYWknGa/&^z!09v|ugbw~Z');
define('NONCE_KEY',        'lUzh:>sipW,W2CmApjTsm$M*lQviOc`|{UKn;BIk&8;kBZ%5uJ4@Kqfrw _sL*)1');
define('AUTH_SALT',        'K{Qg3W}C.eH9ocG||EP@>t}u`)ymHfJK}`l+8xGtj#oY^9OYK5BOuqWz=K]PC>UX');
define('SECURE_AUTH_SALT', '!|YT#z^Jh2j|@-Zr|o^o?i.s/zy`z4z6wvn3G7>m5$sPBG1H{~|/o{pqLoBNF)e5');
define('LOGGED_IN_SALT',   'nyyt$caLIwG(cuy+|vSa?BFfK~mYDwPQO:nSx_xG?]W|wW6s2?Ozbz)dAjeBY7Tt');
define('NONCE_SALT',       'pla;&DB-VMRAs;jEgf*_d|d;mZ-;wl58U *^zjnSq{+X4,95FYUH1XIBiAdS|_+m');

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
