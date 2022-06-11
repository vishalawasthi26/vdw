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
define( 'DB_NAME', 'vdw_test' );

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
define( 'AUTH_KEY',         '@uho,7[T=n/%Q;Z!v8fZ,W%diHA~vWgu:u1eI/F:@A9p40P]F9s T7!.Gg*q97?_' );
define( 'SECURE_AUTH_KEY',  'bF)[J8YPU6v=L%%W}k)p-c);s=9Dg0%u<A*4+NpKM134akq{aeu <_2U8V;nso)@' );
define( 'LOGGED_IN_KEY',    '7n2<z>fh4`S/>wQBjHBW`wLodpb(rhC!a!>/LWU6trp)+-OR&1TB5:nBty4pdU$B' );
define( 'NONCE_KEY',        'BOs.dOnE?)iG1nY0EFk?L_x+gUzq2K@M#$Pq&SJnXER2zU*HWU4Ie]|I~l,c](/Z' );
define( 'AUTH_SALT',        'Tc)Kl,cwF:[.fYh 5rBu#06AQG+IjSW}.q#^#5mmb1?JEaY3bC-8z4r;_97mF]e`' );
define( 'SECURE_AUTH_SALT', '=%YMWWU$pk^gjq{g[nDn-D5[K^4x$WLR0[btf&H=tf>3mJkOBn|.Q&!>Qe+8(^8g' );
define( 'LOGGED_IN_SALT',   '1NkOLupJve[_0&z<#RnN>LcWKDd,^)buPXgcS8a[w|+8IR =e@] =/t??-f1X~}`' );
define( 'NONCE_SALT',       'QQixEG6Ub^q_Ie1Q;$lou-j;.HZ_rc-qfy!7LN,>grD~_s_|a{uPWrJcF#tThdio' );

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
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true ); // 5.2 and later
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
