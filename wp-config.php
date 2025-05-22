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
define( 'DB_NAME', 'insure' );

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
define( 'AUTH_KEY',         '$ycHY3X]WKq{aE@Mg`sGv6?jIA@%n!LhQr8k{r8:vMj1YK<y3E`Swl*dTcB)4?tP' );
define( 'SECURE_AUTH_KEY',  'j^l?RGN}1c|K|7b-jaWw[Y$sG0B1U#xI7q# Rm3[rIOyJKQLT9Ry]Pf,*)P9lNVS' );
define( 'LOGGED_IN_KEY',    'Gz@,/z-xl=nwM]r}$t[JQj[@YYN~BsFTaHyRWd~{FB0|E<ojI6-IDV}Bul.lz1#t' );
define( 'NONCE_KEY',        '*:4wA|&o+MBr5e;YC|J2,)/z2XG)y$j4xOVsO=.G{]=v2eAJQ2~c_=oh+J>])Y0=' );
define( 'AUTH_SALT',        ']uHYu:fRPBwaS,#g)2b+NM)p>YS.a|22P$T7Jg,Q!m]:[&0CXIH.3Gw.0@AmXibj' );
define( 'SECURE_AUTH_SALT', 'Vfv#2VfMHjo56{|rFxf9W,%X{9hSTKg9)b7&GnA(;:-h2%C@XeP1.Z^jr7J~|l9/' );
define( 'LOGGED_IN_SALT',   '@4)~?JE6?l&@V4T cqCeSmNV$(.3<_s:^u[pGtA/H|k6G&[:gZ*[ @5<KT @,M}S' );
define( 'NONCE_SALT',       'n>yO`:oqyb}*b1Zc]F;DU`Ms_yW)leh]*bZ*!e5hL%h#7NS2>pdZK0P3o4QXG-Ng' );

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
