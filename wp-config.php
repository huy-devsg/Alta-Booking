<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_little' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8_unicode_ci' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ff#/S`OABuLZY/%Nk:P};eK<DUo8gxF6L<7og%gY;H[x3x<,k1FKO?9?TauOMbz{' );
define( 'SECURE_AUTH_KEY',  'Z%~@;=>z(W<WzN5x$_9h+topE)PP&h@1rQ(.j%?y,9<Nh#o2AcSQ:)( C[.j8s&]' );
define( 'LOGGED_IN_KEY',    '*93tTW`9N{4fictXyE9<4H!ccLG<3-ac`Mo~tCuW;^IlW`8x_t$&H3@vx]g|RNsH' );
define( 'NONCE_KEY',        'U1%)9xX8g;D%HsPBa+J%^|/a5;Gn(Hp%,nEr2Zz5;@=4Pinc(CFl4[dOf.kYMV#i' );
define( 'AUTH_SALT',        'x=6~:+<h/v%.[*!NJV]OJWy4Ijuv~6~0P#{tU45Bz{6`HGtR4K;k,_&?Fj;XYN$M' );
define( 'SECURE_AUTH_SALT', '&c=Bwe(J;mU#/ir_nvgp!WATUa~G#(PYZW&5^oUFSXC7}!)S;K5/F3|SDs7}1pFY' );
define( 'LOGGED_IN_SALT',   '<9YS.rNW}8!uMLC7*NU qx|p*t{0~hT=-bphkwSu-0hFyB#EVs4{1`Go&*r78/mT' );
define( 'NONCE_SALT',       '>Y1 DF]@ZaReGIzx|7cT%3}~1EYee. `co4q$/vl.@+7/`:*,+Eh8$eqkGhl7*]v' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
