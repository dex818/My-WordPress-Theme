<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'moh' );

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
define( 'AUTH_KEY',         '!qVziU5WWBkdWADY.!wj!qP(_GX44)9BTl!ks(9[er#YefSg=zL2iCi-Y:RvRef,' );
define( 'SECURE_AUTH_KEY',  ':%0)![p^B:kM1 HZ0PExQsjF)fO[mQd1G1JN%oTJ{)&a#vF4NPVAt$@nFHt/q7S ' );
define( 'LOGGED_IN_KEY',    ',8nb+H[;n@NMBU.mJFs2$W- z[Z=1;-=Rj!0AO[7MF0N6<?9:xytd}T2Se&H.8&N' );
define( 'NONCE_KEY',        't|%~s:y*4ggw,p:`E>9%%#8[v9}7n(45O=M{RBQQl%%Sbn $#Xb{adP:J5OTEJwL' );
define( 'AUTH_SALT',        '?6xb.(8$lGxQr5^9b7xs<`_|V]&Mh=YLI,&wY8w;Wd<crJ(5etOXlF$O.H,VC:yx' );
define( 'SECURE_AUTH_SALT', '+BBXG[Ssya2[](FrLE^f/kK96k!:M4WV;l6P3g`2.w=zy4eP[;Zp{j0K,XqO^JMi' );
define( 'LOGGED_IN_SALT',   'a{xezU2dR89$^>MlI4`^NUEX(4sCn-E6NnttihD|H*vwHQFm5)L,Nie!cah.>#yt' );
define( 'NONCE_SALT',       'Wb?nm)S;KJ#(M&>I1$Bwrai5 1:h43cP <hu}&].xN/0(yDt<Gs3[3(JyoISvSlp' );

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
