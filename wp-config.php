<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projekt' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'K%y(mV0+deG=goDD83e~p3Qkb=~>(>._AU}S+3noykj<Y^V_h]BSSP8]W7g$u!g+' );
define( 'SECURE_AUTH_KEY',  'Ry|A_:.vHXSPn2{9a=3zb2:E$3}HNaXu/|@h9!Jmd6~mwH{e7XKk&~RNx&E8Y:~n' );
define( 'LOGGED_IN_KEY',    'qnQ5ez@Z.J=I$jCjF+9Io^_Y<>c#BT&aBuHJ-U:-su,p0o>.w$ZTic/y8pxdF~{-' );
define( 'NONCE_KEY',        'D(Z~P@{Ji@+tu8MNIwWhGC[k>rjH|j)wAvG}2#j2AVNd06j;VkQ{0A^MK4_clZwa' );
define( 'AUTH_SALT',        '3](}h{A6kKIa5vu{~F/U&; *,Pe)Vokd;ExyUFu89G2Y,TRz|P Q&!b?6[dXUy=5' );
define( 'SECURE_AUTH_SALT', 'x`tFi`Y`2wb++ta6p&:HvM7P biE7$XjBpN`9IbUq34ZehK:.In`gJCRG&/3{#XN' );
define( 'LOGGED_IN_SALT',   '~NcVex0c~>v;=^Tzf(:]$i63W)/ve;8jGpZoe,1E.T )%%AYXl[B@fy4P(?FU[Wm' );
define( 'NONCE_SALT',       '.U#0D/FrAp*N,)Ipga-edE;tbddc@W(&/3hzFo]P6}{uzs2D?t-W#8,z&<rzZZ@i' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
