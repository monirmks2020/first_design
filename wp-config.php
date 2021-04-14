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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'first' );

/** MySQL database username */
define( 'DB_USER', 'monir' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mredu2010' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qGVM)m4C^gOkUTi.LyUgWW52fbu0D1$D*3G P)wyast*gQ^{hKp$y7kSCdp%srN@' );
define( 'SECURE_AUTH_KEY',  'rrL_HYA}0,3;:ECeB6)vt%`#A`w~BO1b[S_ebD:q$w>V$1|)]O!2jFKGQRk?>!0y' );
define( 'LOGGED_IN_KEY',    '-!s0){Hk:sXpxAL$sB]Ur1n=IQP9P+RXl;^c (Z,vvEIcoA5pp!GBhY)rBJBl:as' );
define( 'NONCE_KEY',        'wy;8Z +Y/!g;g4Th@Kwx:0g~@l($B+xXcJ?O8[2JRiNE}UZ7P-<.cto(hM|{KRIo' );
define( 'AUTH_SALT',        'U&+H$qURj![FxpKP3oWU%sn%SLh>^~SfjC8gXDY&eqs!&A3<Dd>sjD#/=Rmx*5/Y' );
define( 'SECURE_AUTH_SALT', '-+~-(b>1yO:8@!6o;5+MYGmm$O{h+ny`3$Z4vqsIC>)7WP(iA@!H=swB(r#r=ZCm' );
define( 'LOGGED_IN_SALT',   'o{]{x?OBWK{i-|~{G;@~N>r;JWE;qL7oQ[3b}d#k2iyK&Ax/T(pJk&R&){lL @)X' );
define( 'NONCE_SALT',       'm5<:-WD8)N1mCx-(+RF.[@L_O#g[?(KS^i-u,o`ii23V{{-YtcT,S,p<@!+);I]5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
