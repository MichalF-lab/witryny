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
define( 'DB_NAME', 'pj' );

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
define( 'AUTH_KEY',         'y%=ya^GAKwQ^zpK@bD^$ZgEB,875VH[42E`lhrB:?69/?zCQK.ZGO,=^::!21w~4' );
define( 'SECURE_AUTH_KEY',  'g9mUjbo!w^H4#og6ZR9T{>9/{W|EM6NJd x4esyO-I~ct^kH]$NknK*qcm!,bO#^' );
define( 'LOGGED_IN_KEY',    'peHV$lk*,aj [N5?wlrFG>?_F=u$}`?as>R[I0L/O+?LFNzN>r)-?]K&Q;&ZAdN8' );
define( 'NONCE_KEY',        'J3vSFOEyrw3,Okc21d%x8f]GEs.|f>V(vy}KK0Sj(F1?ieIVJPd; JGr_(>WE.wq' );
define( 'AUTH_SALT',        'h_*pqvRCN;&,xsb;J0O|qH9|!&&46ON>EY7X33zm&uJi/9v%!Sy@I[0@)RAN S|~' );
define( 'SECURE_AUTH_SALT', '`f#+d0cB}jo)h`zkpqNIfH[6QLXpwNld}n#cn!4NgF<>%}RMR[7Wzmra[Mh]}9As' );
define( 'LOGGED_IN_SALT',   '6/3.eZKd>)ldT9[!!+TPTt/TOOhmjv7=w hmTe u3AAHOeqbTT*C3fn=KFWikv6I' );
define( 'NONCE_SALT',       'U*gDkq<D3XvXTI2I4>^/O(7q4M @S~[de.+=XHRuRk<-/m7b_V~GM)6>OT7`zWdo' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
