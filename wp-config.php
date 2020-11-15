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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hiryo2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'r*TfGHod&Wjb6DozZRJYvFj$zpf$0ef[)?:3-;)F4o/~y{LNI8z%>,^~WD%,-mRY' );
define( 'SECURE_AUTH_KEY',  ':n[v22_4SDM#G;m{RxpALE8G;cW+27ej9GqP$Iu=2?`~Mpkg.1qs}mm~-(,5Aauq' );
define( 'LOGGED_IN_KEY',    '19%3X56i/SXLDYx~d`E~}eIB@nSu><[=5QR91Xokk!lMcH.rRD1s@x}5c<,-P;,H' );
define( 'NONCE_KEY',        '9 x($v^6ZoTIT-fDFilqS|||Pj*$>JC[*~HQrc/37(yE|4q[u,sg`HDVE$d?aiE+' );
define( 'AUTH_SALT',        '$F***J 1rm2pzLx[5-MJGcO,}FHO8PF4W}e!F9sDZ^.h!FJ&%+(,LwS>gY$pb cB' );
define( 'SECURE_AUTH_SALT', '(W0*5+sx@2DYj/)Zfk@95&-z[N?cA19={U:c]rCjGCx}4G#~t,RU>zM^a:E{*Ymg' );
define( 'LOGGED_IN_SALT',   'gnu,yV|K#T;2Ec ogZWCf4Cmt crQfy)8v8 HTEIGVkG{*I9=JC6k3B(^Xbg])@w' );
define( 'NONCE_SALT',       'sByfe8Gp^1bxZ.v.RY|l;je>]mK9[O<|ch}rwVo *R5Fqb8xL2>  c7M ]{#(1FD' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
