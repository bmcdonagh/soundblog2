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
define('DB_NAME', 'soundblog2');

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
define('AUTH_KEY',         'j|:OdM~Lt+ek1bVyuls)8i7O,I0A(uf7Waca*vSx^NTH,?Avc.0)>8^9Uv1gR/Pd');
define('SECURE_AUTH_KEY',  'nR^Gn3uI $U(g6d*hn.?9^m7ia[?<@4Y-r<Z^IOe%aiN<[3n?yyT9Rd[}mu ATQV');
define('LOGGED_IN_KEY',    'Vd%}o(3eQQ fvZ7LJQVvQ7>:iWq3SrT0|SuzdXZ?*Gm?YW[&P.74`g5[}SM&*JoH');
define('NONCE_KEY',        ' $Fl,3eGbR(yCSZlEkqW<OV,:8jQ}W!*,FW$^6d,wH6x~_`Lh8buOPWQz[DJce-T');
define('AUTH_SALT',        '1?XtIhRXaPH.T:fq4?[nc~<d8I4#QWUxJQj[{gQceCBDuWIh)W}9U5n}Ft%P3&up');
define('SECURE_AUTH_SALT', '>)<]pS? t?r~3UUd+3}kRt/}uDnOzF+Os6j!J-e|esWAMDJ#HQWmmYm XsO:%iW.');
define('LOGGED_IN_SALT',   '@;Pu:d21c}/qP7I{q$(m{bTfgI#>&`-5~u{>#3!|!#CJ3/;2MDAuNCyy7IWp*1#j');
define('NONCE_SALT',       'Ge_w4(ZZ)TYYEh>7U[> lQxHNK%i>s!%! -23_GCUU[oNDSvj.FOH-.uLFAXx,Fl');

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
