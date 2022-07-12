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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'btg' );

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
define( 'AUTH_KEY',         'N0P)=_=/Jlds[*a*O0_Bo[hA/xo)r[ADIR=/SQ.Ty/w`yez<ny5MRD#S#fl^EbF2' );
define( 'SECURE_AUTH_KEY',  '|7{K}[pvyo}5eAR*#*0j?B@8tlfLw;?&#OfY%~N=p}%6jc3lo?~3MZz=55#%/O71' );
define( 'LOGGED_IN_KEY',    'i0Vg%FH+QFIC!h&FmJw,n 5WLqh;+;06/Xxq7wyk`w{u/31t9cQcUa-J9Nsx$jnf' );
define( 'NONCE_KEY',        'J|)#apt$nP7>=C)Zp)jsCM=!`5nGl5zSH*1cO,-poL1S]uxciQ!r=8A:mqLL#;b;' );
define( 'AUTH_SALT',        'CS/Q.aTuV^>k;T)c^U/zP#<Wy[bpb j,Wet?OCS,,d,{vSF[Z>x_m2~UH%Y&qcUi' );
define( 'SECURE_AUTH_SALT', 'K}~_a-QBa#Z5LCv(ag9[T|*JZZ<s{C}5^R;5^[]P|X8tNSmJ)3XQ|yO[kWP>ND$p' );
define( 'LOGGED_IN_SALT',   'vk^_81%+sbGvVKF+VPItTj5S7aH{RS`xZHr@n^K[ oJ-$! :&tuO=AZy23Y0Ei9_' );
define( 'NONCE_SALT',       ']wDw4anpBVd`0dK?74J+nGzYH%I$B33_hG@m?jb&qNpV~!:m$R8>xoH+fV%Hn^,6' );

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
