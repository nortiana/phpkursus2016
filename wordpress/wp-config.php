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
define('DB_PASSWORD', 'student');

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
define('AUTH_KEY',         'G*WQURB0~?SMHIVY!W(*/Nco7fWk3TVH>{u>ZNEhFj!: UQ_Po=R+G|]@{.i2vNE');
define('SECURE_AUTH_KEY',  'VL#X:?_e/q7V*`aQ2F/8prtCx][L;ph().~pYu4)(vQ8MGk<KU=h?fEP%h?w|9lO');
define('LOGGED_IN_KEY',    'c5/#h*-~>}(R(E/@]<IBjy48_+b[<3aRLaxU|u4*-IY-1M,ZbH;L2(L.uo/?[>3Y');
define('NONCE_KEY',        'K0H`|^XUM&oYDTcM%=Qy+-g3+M]KVy/i},3~4uK1m-soa3Y-IZ4Yw8,&V?.i&[I;');
define('AUTH_SALT',        '=I6^)QpqWDY#7,@dyw0]%7vl#HL{pu@h,?TT6Vu1cg*_hlDnvyQ3$jYagZIeag@{');
define('SECURE_AUTH_SALT', 'DKnWXaUJ]1C&s]QG*>OTy]e%QuiH-? qBVG5Io_Y&EC7ZHex$RyZK-|2*{KWKT:f');
define('LOGGED_IN_SALT',   '74z37`t/_n)xydXMVq!=;9BpAQc-(w@Cwm:Q3Y+ g}_j_X)}#L+qv6FxD{!s=ymv');
define('NONCE_SALT',       '+u X!]-6+AX&zUhxb*)=8T<>dZ;QYJQUtMm76T+Tf=xNjpv )TI|_[C}&;#}noXG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpphpkursus2016_';

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
