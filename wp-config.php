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
define( 'DB_NAME', 'website' );

/** Database username */
define( 'DB_USER', '**' );

/** Database password */
define( 'DB_PASSWORD', '**' );

/** Database hostname */
define( 'DB_HOST', '**' );

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
define( 'AUTH_KEY',         '^r${Wv{CH:e|!tlnfMVBKo2%hNmb(}BDG*E^|!u>TA{v}jI<Ph5iOXdZ;f@.No?X' );
define( 'SECURE_AUTH_KEY',  'P%PbiEBNwycf&Ko(7~cKZo:/nf|LG_3t:<[CSrk&$:Zv@*x;Da4CA^A<L4-G:f(@' );
define( 'LOGGED_IN_KEY',    '|mbNW/@4,@/g7-QYWr,R/[u49v[,Tzr^2#J6^|VSF3Y7X+fYBY@h(9@RbIga4y2{' );
define( 'NONCE_KEY',        ' n0cv{+2Qgfl|_$*28NKWzKYSErIIU+=HPCt/|pw*/h[H{[vU+&gG7Ha)QvL6o$T' );
define( 'AUTH_SALT',        '5Bvj)^rP+=l|.ji5V0iSO(FNN!d<?DvN/?pCyb6METuq$=V9wk:VIFXUx$hulB7$' );
define( 'SECURE_AUTH_SALT', '/Y`.?JCIUrhm^dMqlmn!zC>U,yKbz:qozE./eGsr9D_~Z`&r/;F*w;}8pNr7/tDJ' );
define( 'LOGGED_IN_SALT',   'f2zdO|~T%5C+p]({bw?&ATg%HvJFa8t$}d5]Pu1L~SV /Yqg<T*C.MA fg]>-dCY' );
define( 'NONCE_SALT',       '8Op<^=q5tDw*8s<,dbh8AWkuA,d^U.&|*PoU @)f[|]dI=MzAtX=n/wjOTR<#Dbq' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');