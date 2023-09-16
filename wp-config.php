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
define( 'DB_NAME', 'writeups' );

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
define( 'AUTH_KEY',         '/G.R/K4(gPj/BH-2&CXJSX@6I{sYT%5+Z-3JP:DQUJ-U6o[IbiQo1*:;!&|T|uD[' );
define( 'SECURE_AUTH_KEY',  'h*b:$4Bpp~^sv:k`IA I@1c&O?p}b#5e@9-|0Pw&CgR3sB`mKjdrnOlu4w`1t$%@' );
define( 'LOGGED_IN_KEY',    '4G%1jk~&>]Rhw5CV)Hm>qPdO-qZ.yEx;C%QoFv#|yGuXX]B%jIR7bURP -u({_~ ' );
define( 'NONCE_KEY',        '!b+9#N1=MR`[Tk/j{2g]bQEDI<J-&$vR-;T=8|Mw>~^&ct:/HzmLVgQ2F`gHVU#,' );
define( 'AUTH_SALT',        '?q:8AwK6wLwDR=k$UqK=4QN=W}^ALyi#p,eRS68r0LRpaSN7w9A|G 7Oa--BNb`R' );
define( 'SECURE_AUTH_SALT', '4OIqlB!@?(.>PW[;kOQkT1[=gr@cmBz@<xxv1Z<Ltzdf^`EC$#H*}e=A9cbfQ3qB' );
define( 'LOGGED_IN_SALT',   'xiIY2iiI&|v^j|T:<Z#gpk3:0v:#<[25WjOb$Wm,}~c9n)Tv*x*CB*-HLdCA9v)t' );
define( 'NONCE_SALT',       'kMMRs!> @Q~AeP..Ptf|7NIA2-aJveu#xCcF>:1;$DEF&k2VYuHS=3LG*rVBh[uE' );

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
