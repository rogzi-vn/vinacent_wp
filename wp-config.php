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
define( 'DB_NAME', 'netcorevn.com' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '22121223' );

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
define( 'AUTH_KEY',         'V=tl1_~Xmql*7-lj3]WS!;nA:hp-PP1Y95.OH*_E@`/)m<MmPARZ?1}&[mtu7D)X' );
define( 'SECURE_AUTH_KEY',  'wH+X>K+k;yLvuBvx.rQ}c<}vl?c5}Hpx0;8$b#9vH5YA*t%>i-):Db=IKd@DezQ2' );
define( 'LOGGED_IN_KEY',    '07]/vlV-Y!xpR(qr#8c=6Gje(Lg6XgL:8vNN~=V;a.)2F]G1Yyy Wz8SW)qg*NG7' );
define( 'NONCE_KEY',        'E@Y$-v QA6:sJc8~F@L4r%a)}e?LVI|DXf#.5r5{-s1p9cT7CvQaRIN@:z*d;gY&' );
define( 'AUTH_SALT',        'G@_1gpq3%:`pWqN>r|Ut*[d7zla)_.tG6*U6 C+<?%rQ*QjZ@YsG,7pSDQ9Z_Lt|' );
define( 'SECURE_AUTH_SALT', 'w;AAL#`Uh9=tEF=7B/5:/gONWaq)W@<G?RG5c.%Vgczf?df6uO9eYH~vW9bNc$_(' );
define( 'LOGGED_IN_SALT',   'I+-R}T,gW*jTacB,(8pzVS:u|Igt#z-8$DH7<GT0#wlJwqS#nuA?c9dzV=s!eE.|' );
define( 'NONCE_SALT',       '}S$ MWGRV8b9d8Z*zj;UXeRUE)|jBHT98k#0_t4l.Wbp6~]H>:d!CbI8z_A_IS6d' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nhun_';

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
