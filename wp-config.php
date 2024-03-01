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
define( 'DB_NAME', 'smartmarket' );

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
define( 'AUTH_KEY',         'A7Z$r6r@d:6VKDJ=o6{XZ~%Pjd-i>wzy%eBUl1Y&@3o4{.]O+~]3l)a3qK0dLpZ#' );
define( 'SECURE_AUTH_KEY',  'a=.8S[HI8&z-5)C1}E`pk`qw)Bzz@9D;94h.s8q+/I.<YIk4`!b(6Mtp]G]viV)s' );
define( 'LOGGED_IN_KEY',    '?mA*isa3M?1]O[iFoGVk1%i.a9xcN@IN<?!=/?=T}gTIhF[x-^?MQB=KE1Y;G7mb' );
define( 'NONCE_KEY',        'Lyheuh@ddN1SMD(w1Bc}.q=/[9kx?kW5c$qRa$~9kAr@bb? i[##?fdtBrRtaG+<' );
define( 'AUTH_SALT',        '{(o#1-Q<|ZDCxxjdp~rrOf-c&H8^^cR1)WY_*a)<Zi$|7<(pMkyD^W:zn2D$:LrG' );
define( 'SECURE_AUTH_SALT', 'z-W2O9XqxX vF8Y/||~CHz-i: d9!?B3 kJ$`.@fU.ey+ u{nmg~,wWK*^-h>i,:' );
define( 'LOGGED_IN_SALT',   '&M|C!p,:(>d5Y@;AZ|F|Q}[F%d:xyN29<>|7.Vl;sfJsp{6O<:HP%bAP`-#}|HvG' );
define( 'NONCE_SALT',       'UB~9?]7#2HIj;zKQSeiy2R>0[[5nw;BQx!AS{!uO.MhSm<2sB?5&_`b|-;AIHKAq' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
