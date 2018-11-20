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
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '5d0EwyXeAMg2zn>*rkDQc_2o|-0Y&56J@1p1E{}aZc{^}gO6Mqh}VH=WXPbPe]kF');
define('SECURE_AUTH_KEY',  'h=d+A_O-&Lr4x~A6]HEW:lN{dq-]X,n?s?O1=Mhs8)|N/9rG4}YV8n},p&)b[>2 ');
define('LOGGED_IN_KEY',    '.`FX7YIT$MW*~m!.}1rWl9tqXZ#4ybyRjLqo*ha}+-<]@wpRSK?r0(W~izU*yu8e');
define('NONCE_KEY',        'mvDQ0Sb>W/m !bWu/e^eJIYtDQ6+p$e1Y&%lyas_u!c@>~cPQlll%DRKA~ce u3]');
define('AUTH_SALT',        'T8g!cUA2E>:>DpDOTnE<oM7YSjhH_vyH!C$4}WAmGeU9&7F@?,&L6s4sVj(@pQg~');
define('SECURE_AUTH_SALT', 'tf/=c)EzLs7px5,&un~I$=1m_4qf~^q(_1v^{;P0||Nly5-i]j0R/|puO:IxnVpp');
define('LOGGED_IN_SALT',   'DL?z`dA+g>byo5.=9Iu4(p&{<:Tg#mZ^:|J85$fBbHpbxHUIJ}W&kL%x pR`P+PJ');
define('NONCE_SALT',       '+Eyr7WM?Z&2:(=fg;vc9._<D:p9,TlI&+YY8;h)SB>vf23~sly,bRRQ0E|`-)^R{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'danayangello_';

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
