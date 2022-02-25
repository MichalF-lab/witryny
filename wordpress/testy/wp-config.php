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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'hbaUgS46:z40Z]+ijtfG#;%-Oy`^9~??HLu 6)YfkAg^aI6N]wwMZ/Vos)2b$qZl' );
define( 'SECURE_AUTH_KEY',  '=lhalc/oRVBJf-zvRiNXuJx1Ln,s41uK=B^vL6%WG(;c07#K|AJ;;#H;(I7M81 t' );
define( 'LOGGED_IN_KEY',    'ZwZ$39O^F<d|Lz<p&$<5cq!!A2ET8+Y7(4t^,BY]kx_x[EqRZ~W$,pv|@aqoiJ,(' );
define( 'NONCE_KEY',        'SrV)c.D-e=[a6b&R(n brwYro}#v;RAV48QYa^*O3$&hU%=Gh8V%J_{G72{}+Vh%' );
define( 'AUTH_SALT',        '35*|Sva~lmE.jn1O{8ilL9pP+ay8o@^::jM1RKvrdtH?mcJ.i%Ndkz&pGgJP#sTU' );
define( 'SECURE_AUTH_SALT', '|S&pZ#!Q3}]&o16(EXpMun]fdoL4,J$VM^Hv[92W/O9$1&,84cE]B~zAzx:RAQ[V' );
define( 'LOGGED_IN_SALT',   '$/1R[v.Hecl}@6t&|3?`eK~WUvh]A%D?$mL(FdRw9=&(^wn8/ff5h26HMlF`pN }' );
define( 'NONCE_SALT',       'b4El0@,PN`xOfM3;S{l#fcqMUp^g|Za^D @LdKo-JCm!;a1p>Ra; I#zC#h+#w?r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'MF4D';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
