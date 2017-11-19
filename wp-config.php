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
define('DB_NAME', 'test_wordpress');

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
define('AUTH_KEY',         ' *lba^$khKg8Z#%c(<bQY`o4cOx^L>fhi)JB/_WD$ycCr88|P=O*{V7dls~{AF<O');
define('SECURE_AUTH_KEY',  'h!/ordv?m##oKK]U(5|O=W.%@gKE%!KbRnGc|dCXVr@Q7?_qs}Xkp,*fF<mJJw^#');
define('LOGGED_IN_KEY',    'M*qz6$v]_#77}A?3E(o:t(IG2}|)Pu2*B~CR8JkPN5t.]=p?6gvfJ%ej5w}+Jk8]');
define('NONCE_KEY',        'Y^^`Jbu`f/d0146mlWVt8(e,@ zs>SwRmA%&mW-#vrha=VP,nAH;75QH!~<Q/0*6');
define('AUTH_SALT',        'Y!,)v.YzOb0V8m^RB7dBLl{S/)mf{yW*<I:h*(8~3jEnilPq$+2nLJ_(_ @kx(WA');
define('SECURE_AUTH_SALT', 'ak9cs.|NdtD~8&d*&5hsb&o8HYYqX`GEN 1mR|z{(e=JkElf2sy-H.YI4]_u5^}z');
define('LOGGED_IN_SALT',   '&&=@#MktM}jd2g(8W1mU>si+3UHs:GyHuHNl&va-R5f;h!r_x5/dd 1U_uHi<0JF');
define('NONCE_SALT',       '%+Zh(/%;|3Q)WqZ_l3d~gl12xXh+nu5k4^<:F7t+bU!F(wWB[Nj$mbFh~kdhAoCO');

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
