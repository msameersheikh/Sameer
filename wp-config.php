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
define( 'DB_NAME', 'Sameer' );

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
define( 'AUTH_KEY',         'Y`K>H*3UFQj7j`<7_XCm&Eu3pOrx}5vk1x7rR6Sxe`!?}-pXw5{T>x&JVCLF,F~a' );
define( 'SECURE_AUTH_KEY',  '4#vEtV!0mAgI|qApSoq52ADrPr8]4bkfVz<XfjTVQ;mi#A}L]r|,/[!kF0/|?sC-' );
define( 'LOGGED_IN_KEY',    'ACWAT;{B&ou5n PM09ZAuJ4JpLhmW8tA*lH7ksT$.l]0(, z@:DPM6,fvm~]vj4G' );
define( 'NONCE_KEY',        '0dD=i{84g)V7Xn7^QSYsu4<8unU/Y8(w78oQ`6}cM+NZuck7PwGB@)5!CeW;QcP ' );
define( 'AUTH_SALT',        'w@R8aEGnBf#F])KMky|F#j?7Y:m.9IZP-Ns`}GY+S1YH&GR?IB*CX~2o(VHyd_|P' );
define( 'SECURE_AUTH_SALT', '4]KoA*.<alr![gLVC`rh%s^8f&CiyofE]EqKMn.i4GL:s9!SO{bzl9W171zz|chg' );
define( 'LOGGED_IN_SALT',   'E6:St&MT;yS$=EM> S6><sjq_}+MnHqZrsfGAlVHAVFu=+u&7{2A:3`3FpdgV:x}' );
define( 'NONCE_SALT',       '4h1zUPUhhv|X4aw^{[&u)ca.Q`YiC-%%u7?M3gU~@H%DJotaz#vUXyN5xL S|=++' );

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
