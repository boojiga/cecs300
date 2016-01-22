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
define('DB_NAME', 'cecs300DB5lrjg');

/** MySQL database username */
define('DB_USER', 'cecs300DB5lrjg');

/** MySQL database password */
define('DB_PASSWORD', 'sjB8xSGMA');

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
define('AUTH_KEY',         'dvrngURJ84>!@sJsJ84[!!w3<$$qjfX{MBu^yvnbcQFB0,iaOLD2;#a+tDiX#LAt');
define('SECURE_AUTH_KEY',  '<*.XLmAQEu7Xjb~xKla;PDx2#a+pDeT#LAq;.X4[d~RGhV|O~w1hZ-OGD1[#~cQI');
define('LOGGED_IN_KEY',    'l+Sti54nc@RFg4>N@v0gYzJCd:|GwoM*uujbXMEB,,ynncQUJJ7}piWWL992.+ia');
define('NONCE_KEY',        'K:1#Z-OCh1#H5p]eSQ,z4nc!RFk4>N@r}gVzJCd0|I6{M*uumbbQEE3<{rB;ha+LD');
define('AUTH_SALT',        '!oZw!oZGdK4G:K1!s|w_oZQA<3,B>yf$jUfQjUB{JB>z}@jUg@nUFYJ0!}mWD]H2');
define('SECURE_AUTH_SALT', 'F@r,vgrcvgN4RcN8,C|vgs[zgNI;*{+2*mXqbmTEbI3*7I$m,qbnXrbM3Q7I3^aK');
define('LOGGED_IN_SALT',   '4!vco|scNE{+<x{+iPmyiPAXE{$<E{$m^nXjTnUE{I3E{ySD]-1D]-l~pWHepWH;L');
define('NONCE_SALT',       '1sd-hO8KhO5|9[5#w]-OlaK5S9]5_F}$j^}@jUnYJ0BUF}@4!}@o!sYJgNZJ0N4|s');

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
