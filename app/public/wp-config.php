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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '-o(1LB?V{)PgUDn[ aQDRUzg/XpAXs?b[6b+=[,{tbRJ$CG<GXpU_]y~&NHUo-]8' );
define( 'SECURE_AUTH_KEY',   'Wamb@JKQlWB0;LDi_`4p##cf%hCQVu_lnO]0>/Q&vxa=RcS=>&RoHSWJxi)Fibn/' );
define( 'LOGGED_IN_KEY',     'Cz3.?TJ*qi]zy+bc1>71{2*IvOmfXv;DF;7pS[S+g`wC5EVB]0=r+w(,jo^DlQ36' );
define( 'NONCE_KEY',         '`?.{WRh)C$#kH. f.w}:2b(z9#(,HF[CWA,U]BoXVZc8$A?~&rGMyG+$+k?^?7ic' );
define( 'AUTH_SALT',         'XmkUn+)CpOdq8KXQk-C?LxH@ytedq.**)nxF@c`0Fj.a,ky~(_<!2tfK(qUb%Bm3' );
define( 'SECURE_AUTH_SALT',  'H73n<g#jW8d_=(N7g}mAv$>-q Fp#{O^F]Mdp2.4rH).ITcc^*Q-EV9Y/c<W.w2U' );
define( 'LOGGED_IN_SALT',    'n%)1Uw^5q)bLe`fEailp^-)HLM4R^BAZXaH2oe<37B ]Y3DCa(Z5spCwDmJJlpBp' );
define( 'NONCE_SALT',        'vJWkV!U*Q[nn-TNjHX+L=/=w^ EtQ@ RLJZKHt1MREUa UfgI{j,c|XU}<&oGh<R' );
define( 'WP_CACHE_KEY_SALT', 'T];Xb.J)5YuUeV4d%lYdFU&^<I*y[d6tq)=mH6%;hV|Hami|kFvH%4bK}[912Qt(' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
