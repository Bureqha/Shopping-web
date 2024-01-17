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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'barako' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'V(1+kgl-LUdL,Aql#1|ZQ(=WJ_$Z}]tv>4|/t.RsGcc`]-aQV,m7D=9a/,g~zhFj' );
define( 'SECURE_AUTH_KEY',  'h1l#RQ/IhjLrs2#]_BT!i^j.rzPt%].WcoPv_t9<9_kP8e?f>.<uNaau2+Qqw`V`' );
define( 'LOGGED_IN_KEY',    '/27J;p$|#+jM/c)|U=PvPm86MCe[B&/d/(1^8E>SVGBK:%NYK7<]M;w6 l8<pbnM' );
define( 'NONCE_KEY',        ' &(v#|*H+b{O<&0DO5<0d5Q)i?h48J[D?HGO=q=bxlD;DsE9}7:pbv>ml!9[Q,)Y' );
define( 'AUTH_SALT',        'K]w9Ztf4k:.~V !LY 8eQQKI-WnmSA{NIuY*rtMOq>P?#dsX/sz.19cfh(qT,|+@' );
define( 'SECURE_AUTH_SALT', ')R|v^.D^|jymC|m[UAP4&iA@lgy6s6i,AS{um17Z0$~OS5o%/I>.1(pBoUbW%;L ' );
define( 'LOGGED_IN_SALT',   'a0eS:L/r&:}XY4LaI=A}yIYB@^gPa]w<5odq#BwiDOYlv@y%qP,VC#SGb,MI9+X$' );
define( 'NONCE_SALT',       'c .?ap6h3*+]WZ=t=4TYzxhpprYv<i6|^E5Ds=+ZUj,x^;J>I8w[_N+Z$/mP<-MQ' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
