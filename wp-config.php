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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '7NsM143[+zT&r@u/k2&]o@tcG TF!?h#;+yJz<RBdo,V0h=%~ladg|h{;bGZ= ?Z' );
define( 'SECURE_AUTH_KEY',  'k2bLB/L(xRMv+h~.V!US=c7; i<Y;U9}MSjSRTAH*$3~UO%2ha^(Ok+22DAK4qZW' );
define( 'LOGGED_IN_KEY',    ' 4!|6/o[b#^J/GPCwO`,JCYum^Zfp)sP7%uKZrz4|zy`q^H`C~x-b88}yv]nWszN' );
define( 'NONCE_KEY',        'mb1D=;mK9x}_aP_tp>PLksG2z$/oOMh4VmXp{A*wr8VV8|p}jp9+%WCA$n#3Feav' );
define( 'AUTH_SALT',        'Yw8?P%`upOMa[;DhwHYvz#vdJA*5+0?fkcCi)Lm!e=6JF_TQ!!+BoHe?%&kk_cYs' );
define( 'SECURE_AUTH_SALT', 'Ss97>$p3IrBy9Wiid4PSZ9A<nejuHvd@7eH~kDJqKd,M/x$?gii#)*gx,?8B#L1x' );
define( 'LOGGED_IN_SALT',   ']yQ{#wwBZdm)8]z,C~XCCyTq|p&!lOIlhZE}>_bVbHZlf9HuIa}*e|s`kTr}GmP7' );
define( 'NONCE_SALT',       ')]w%{%EnpYkDS#Alsp4iXW}Yj%zgG8_Xe&xjcJZBhu~Cku*Iq`1-,~qiZ#IdNHVh' );

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
