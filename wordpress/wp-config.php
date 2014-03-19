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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Users/crockett/Development/sqlite/content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'sqlite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '_?J#Tm ;Ud~tj )j7z}gg`<lXXRpU.pc-V}lF#)KAF_LS]v$(SNt^r9anPSqi;*)');
define('SECURE_AUTH_KEY',  'i-~DxTw@e{lhmKK<x@:7d_]kS=vnYruqvM:8h><s+8lMjp-]_4_:V B7|1v7jd@z');
define('LOGGED_IN_KEY',    'b;Vm]0|8~$yGMm(B-!|:#hV9Ty`624yU8LyAiZ})osw&cE(`lY<%Q|=pu:?~m=!M');
define('NONCE_KEY',        'd=pB+olDJt~[4IZZ,cX_&e3PAG=x^Ft$k*7^7NQN5OFVpalh>n)<i<;t41}>FK>d');
define('AUTH_SALT',        'nR:ms+2~J$|u;1* 4Z|26*+(,I{<CAeV[+J0r8>]hJm@r}Zj)`?7}u-smM9]YBW/');
define('SECURE_AUTH_SALT', 'DVf8@$!CAbv%Pw7w@M8%eSHlY+X<KGFD~V:wee0-ynvlpUnS7l2PP:1W6w+9,z}%');
define('LOGGED_IN_SALT',   ',>C[!8txjR7T?Ikx37cb$;E!kVDhYQ2Oa>]G7ixmM2Rb2`oseJ#PlD<6+f{:FS6j');
define('NONCE_SALT',       ')-yA|kZT4#1].i:.bzlxrFKWqtAF-l1:d-0?]Wqz,s{A>g#RH:Xo,6xaVWYT)zdX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

if ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] !== 'off') {
    $protocolString = 'https://';
} else {
    $protocolString = 'http://';
}

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/../content' );
define( 'WP_CONTENT_URL', $protocolString . $_SERVER['HTTP_HOST'] . '/content' );
define( 'UPLOADS', '../uploads' );
define( 'USE_MYSQL', false );
define( 'DB_DIR', dirname( __FILE__ ) . '/../db/' );
define( 'DB_FILE', 'localdev.sqlite' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
