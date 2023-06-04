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
define( 'DB_NAME', 'ju-tawk-wp' );

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
define( 'AUTH_KEY',         'zLx_8lbu(Yyyyn_Ym*`?y@,s&mpkD_SNn1+|zd>zf01IBFN}qREqq_zO.]JZx|;]' );
define( 'SECURE_AUTH_KEY',  ',@*=7Ic!oKrAdCuo-NX ophqHc(_4u5=5dG[ByJH%xfeC;=E&wev<PCz.c)Z{MN~' );
define( 'LOGGED_IN_KEY',    'ffSs(dg1O~jHXU03>`CN D=RS9tT]>&41#z54&72d]dm,)|nvS#2wLxvH aH;wLA' );
define( 'NONCE_KEY',        '+kyXQMr{kgW&&2i)1>dEDKdFF;,PUbP}7{|{x;D@s4Bw?dhwr<A8mU)u1kKMtwg<' );
define( 'AUTH_SALT',        '$P=tUXS%]%7$LVHPV5Usa09Eaw&(W)6H*f [Rkh@fgRr)sNNy|lg8K7k.W^VbpV^' );
define( 'SECURE_AUTH_SALT', '95R*4%q0tEG#`Wx^OB~ng5=CIs1:Xa|+1?Dw~aNQ}c>Am3ewiqi]!mJy!A[z[b}l' );
define( 'LOGGED_IN_SALT',   '4q.9Ahi}!7Bb%YGGJXIm-QmKDcTZG86W+g@,TG>Z/O3NvR[`O1F(GB28cp2VD0?v' );
define( 'NONCE_SALT',       '?njnyOv+$Oy.)v)UK2jIp0O6V]gVz-qd<Qs2AH<-N-]Rlx>mc-XZ`WM3N6h~Q<{<' );

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
