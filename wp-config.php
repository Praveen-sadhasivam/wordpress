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
define( 'DB_NAME', 'gtwp' );

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
define( 'AUTH_KEY',         'ky4:G.pDZ|E%b4hO~nxwCzrgiZB<m<FF{5Rhg$ ,Y+P^ogS<osNZ.LmLP9^?sQt%' );
define( 'SECURE_AUTH_KEY',  'LM<tKo$;XvdH8ys?MP)mv#IrbRvQByLB-lFnNHcWd3NUHwJv)zph?)G(n+mx>wIH' );
define( 'LOGGED_IN_KEY',    '+l]0kmgfP=-);L4(=Cw65],S}-qkUE[#$5B IIsKnUehKf9kB8fx`o m4m%ke-or' );
define( 'NONCE_KEY',        'v%W~G*n~0`O2eh22{|9D@/v?-laIl/y7t|-]c0:,nco}U{(}8l1Sy9HiQ8b0*=ah' );
define( 'AUTH_SALT',        '9p_+TxH/wi<E&Q5N}Lc]lF2uiue;F+y:;jmck`m?moz&(+JP=hqk;D1osF+ 0Ym+' );
define( 'SECURE_AUTH_SALT', '9K%$ -}i2OygH2Ni9Y%QOMR]U)%2J`Fu&84/k3tmH:T_s<fEwLDK*@[m6Dp{)Tcq' );
define( 'LOGGED_IN_SALT',   '|mCJ~Cww hc=2.-3Q!Mjx=tDe|vP6jDmknh}3E/jyU32f$;I{8W3ud7>2Uk=m4?d' );
define( 'NONCE_SALT',       'xAZ?{|n(9vjXpMw<TW~BVzXntuKPRjc xy<2l3;W-4S7@M>+!6IXx,LeOPasFx@^' );

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
