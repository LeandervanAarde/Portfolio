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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'o$_EKOLzH@Gy~7{L&$8MSY[>=[oY|>K$hd 6~eeJP)&+RpG=b2g>T S?B:-h?YmS' );
define( 'SECURE_AUTH_KEY',  'CO>hALTng,J3;B0>Ivd@i2.%X*CbT_!xvGC0Z]2li<GL;sl(&Pi{],mFE^K?{-tr' );
define( 'LOGGED_IN_KEY',    'q4x*>fG{<|iI/SgMhu!%|v@+|mH:s4I*D~|oHH8$w&Sy-3pA 0gy2Oi4xIU>eauJ' );
define( 'NONCE_KEY',        '1*6zl g~NCzRYs0h9@G!>,Gv7`= |mK/nQ}?wz)7F-aCseHcUE^;N=0:!fpo0hJ+' );
define( 'AUTH_SALT',        'F/9Rc<Gk2ZmwHn+jn$hAto`h`Eyb> hpX($e>m0-j8/wG|Lh/Rpd=G!Bhka4l*`V' );
define( 'SECURE_AUTH_SALT', 'sMTi<<0 5#>PY:+R&]Mr;a%} W,,mg;<wEm.5mj:PpWv<,?]GRZ?|Fx.&=9ejobg' );
define( 'LOGGED_IN_SALT',   '%eJQak&0c}D@kyn;rIsxWkmJ?~hu0N$!:G^A?9q,W}+,](3qAv6U.;IfH&M{Z?LD' );
define( 'NONCE_SALT',       '+Z]fs%oa .uf1rWppP v~Y(i$TW~njwE/hjp{Vv<HM#&>VxK|.x2hd@3hEnYOh|o' );

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
