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
define( 'DB_NAME', 'skillcrush-wordpress-2' );

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
define( 'AUTH_KEY',         '(]`I/{EA2`SL`0/tywzR4m`L-@e7]4}!=G*s`q# }L&ZEs?u>KNr%xB:%A4f +.+' );
define( 'SECURE_AUTH_KEY',  'K+Z|VX9pE;BYL%I9nHOSqX(g)2v-2Qqy$#r8c[M7|;,p9l%{:M]c|(/Q,raO.K#;' );
define( 'LOGGED_IN_KEY',    '-AHKgnd-0HJx5~y*?}-.Ap$>|mliqWu}[^ofK(=Nd.1ck]L&DX2,ef(=lJCa@!QY' );
define( 'NONCE_KEY',        'YB[{TQ-JA0dF=(Kl[L&?y(o[rbVeyy#g=fsO_`x$Z=9+?6{Ycg8qVgp=+D$9a-6q' );
define( 'AUTH_SALT',        'xd_p5##(1^NA;MnHN-y[iv8?Q9ae<`V?s8o@s>$l+yrzLT|JQZ)S2I5y?Ks1nK7I' );
define( 'SECURE_AUTH_SALT', '<,>)MKi9^1ye6,+d`:q.p$s*LR_ w~*=eg`jBgH9a?jfmpxC;DN<Jr/nDh,25@>=' );
define( 'LOGGED_IN_SALT',   'v>Lmp|Hoo>q~FP@2)$^4BBlJiF|#d%-Rnk]3WUamj*T~s9|1B@gc9W9`hpkt4zh`' );
define( 'NONCE_SALT',       '^CVc}Np+Q/;~h*Ae`%nH7wtxDtxp2-HR2ow>A`OMRe+dYP82cp%PcHko`tx4^k|w' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
