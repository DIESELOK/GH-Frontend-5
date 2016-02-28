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
define('DB_NAME', 'deliver');

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
define('AUTH_KEY',         'wu^uY(-}aomL|#;g#Cd@,2plK7 Pf SQ,c2-/^M)*rium;&:)Sn^/~J&{i{3^r`q');
define('SECURE_AUTH_KEY',  'Y.)JoSWCr$TM~Ltjf&98+HPAZS,,JAtT|^EfFlKNT_DY~_X{auOS-3kxaIw%3=Cb');
define('LOGGED_IN_KEY',    'S$RyUz5!;^LWC;iwcGFg#L(Jrm<{x[*T 2j1J#NQSErxNd4oPVH`IivsZECn-2,&');
define('NONCE_KEY',        'y!yJx0q}n}Q:]j9X:W4FniG0op:r|WkuE2yCb||<Ss^*g~h<bIN+ja6H<-xxaSnB');
define('AUTH_SALT',        'gsq+RO]|8[-E(/F3#<4,6{1Z_V+.vLsn<FN&=<7NQ6o;M+|PR1T+?4kM2FdPAXIc');
define('SECURE_AUTH_SALT', 'Ag*Xw?Ix~dbSfH-j^]P(T#@^|foxv97b|&1.=ob^6~Xp=kot1Gk-^]jF+GL`-WLg');
define('LOGGED_IN_SALT',   'GqBR/%~7 G$yjCg!O!ED3gh|+jvV$@ E8uD>^M`.C+Nqld0N{z%HCXS~/UBO,M/r');
define('NONCE_SALT',       '%%=K+%7IkVYHq(hMK?K_L;KEEu/f2jnY>N&_7@lV1;y{rz+y.G#f1!Jj_puJB|Fd');

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
