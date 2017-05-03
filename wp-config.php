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
define('DB_NAME', 'new_portfolio_database');

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
define('AUTH_KEY',         'WaKgQ=aN<`C.fKw*&_aU%b9wRH_dCq+e<:q&#TsM!=a%0yW`&xI%34c{pDA(Aj&y');
define('SECURE_AUTH_KEY',  'r{P{hyd?x%P-pg3Ciqpu`[McQ&H3>9o3$HDFcxPH/86>wVZ25~<*L8G7GiJl7Nvc');
define('LOGGED_IN_KEY',    'KedP:X(6CWi2#r/-_Qu3&Trx}=VU~$B{?A*NX*Q/}I8mg;y{Y[7H|,yK=Yfp5NL]');
define('NONCE_KEY',        '/4|zSOhU~C^;?Z7~19?KK9&rbx.nQOe%+|T6|% w>`9#j#$cKw=Qe(cGEx${LF)e');
define('AUTH_SALT',        ';=j+ubu^hFM#s kzz#AW%zV*QDUPWA-D_8ozkK /vJu!V)MjLpG[ZCqxe@4sgRlN');
define('SECURE_AUTH_SALT', 'BN}(7r7mS)_3L<Qbr)M:zgQFCMN0lL:#u]/&l8KQ{@-EqH!iJKh7lM *uW)3;KY(');
define('LOGGED_IN_SALT',   'L__Euhn.x@q-Q]:me)]zU35q-M ag7wZPbA,RKYVfDu7/R%6,~K!!?XhxV9j~Etf');
define('NONCE_SALT',       '}9|mcaR`{.OJx1xE./u)5{m7C.[~5N9SM[#H-=(2r)8it-J1}cmeMkTi9B_w6EUV');

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
