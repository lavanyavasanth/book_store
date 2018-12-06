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
define('DB_NAME', 'book_store');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'KT-`cYL:vM{07*cN-P:cr92U<W=KBI0~Ahc-JkbALw#7eC.BW$oesVauEJ33B*5$');
define('SECURE_AUTH_KEY',  '|G&As,,v7j|OqYozl|US_akk/=c]fBO}U|(17`u/.?,0[]u#on~4nbE.U&xKH:p~');
define('LOGGED_IN_KEY',    'Qi6kWShR!r0f<PYI@f,9:CIx&Nk%M=b-s!R;c$=rmLu;]oAtF3U*z{Pc3->#iwQW');
define('NONCE_KEY',        'f36J7@VK#4e&#}gNfZck /XYP=^POi3{ZeUWO^EI3;#:CLdlsh9%WAOtm$R&~I2`');
define('AUTH_SALT',        'Z4@;zb@m;mgLXQR:-V}E,1pOB =D))0{CGq,Lc_Fp.s+}qSYX?WS8T9FY]==TM>Q');
define('SECURE_AUTH_SALT', 'Hvh$McSKF4A?}K2V*w&V.-lps&x26a2,So8 O]!c4blM9Q2EkU-9QS:HG~ay6K.v');
define('LOGGED_IN_SALT',   'sB}/14-ht@5{wwXn-<A}>L GYio;R~iFK7|&$LQ6!`+tx}zN<$^9ftDNPRuDGa w');
define('NONCE_SALT',       '.b3~0lu:?: .[3+,[yCsv$=xmn7k<$l^khhL~Tsp=N#{v0FsKj]|3%Y4&m%+S/v9');

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
