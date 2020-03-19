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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '6ixty7' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'U1!daTi.(;Iu/XS8QS/%%dH:GbO}M]h-?PT$;e4IWcGd-xxsDdkGEQ_9oFDhX>~~' );
define( 'SECURE_AUTH_KEY',  ']u(?(=f/BavMhCUP`X2hbwFoPfQ* @6E6koNt]l3Ih1z6x`)6V w]r:C$EqL4L7R' );
define( 'LOGGED_IN_KEY',    'p8pJ0aBhsQ:[7ZFM*WMj2~oHK>@0Yc`k6v<2<W[1rD)^^}7:PNVDCz3ZX@g4SHK|' );
define( 'NONCE_KEY',        'Tgph&9`!t!R7tR_)g:*S?_b>rW] #!{N}XDvuJW):QkB7G6@!xB.c<*lnK?!m#5r' );
define( 'AUTH_SALT',        'Y9#fZ,,YKP-aw7XYwSW{o~mZ#.|[~V%G*eJ R<:o6PodJe@Ld$Oz>ReXT(>cm7(=' );
define( 'SECURE_AUTH_SALT', 'M^*#|]CPt1[]hL_Ia/IK2i(#-xmn>9qV@CmRV.r8!dZt<u}Pb@=cc$!K[|]iqiV;' );
define( 'LOGGED_IN_SALT',   'K ;V%3O?N @lYHQLjoP)*A=WP=G5Ub?#(kSKM!d3&hg.==4DfsBZIm+_|/{cp *y' );
define( 'NONCE_SALT',       'A*o=<Lp4jIf~#<=P*)[TY6/Kd-Rn2>1/-@vv[T>[22cMP5E]m{aTul$;haHI5O(y' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
