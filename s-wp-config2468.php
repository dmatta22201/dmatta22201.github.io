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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress-pass' );

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
define('AUTH_KEY',         '$<+W}PDpC*ToBlUUClKg/!`S8k!7yl77cmlh,jIMg5`Cl-oV:pa`z#<>LFp3#v*(');
define('SECURE_AUTH_KEY',  'sXuA?y1fXkxb#?;|h&{2|sqEg9l=Kr6/H}Cbpq{.f5I2^*z{(G/s,tIW!ri`]t2M');
define('LOGGED_IN_KEY',    '2AZrSGO+eX%p]YrP3FAGCR1@1=y!iU ;-8N8KN$:yM44W{6{xqHIvY}n-nx@~%6,');
define('NONCE_KEY',        'N+ycE&>/g8lx!Z>aI2zk#F3Cwl|Vld>&w}G?L#^cSq4,qF!=}U6(qh_#DrGI= Ly');
define('AUTH_SALT',        '[S--AXGpj3cl5?TO1.@PLs+}]EA]~|c5T.4;r-f1e^]:#%D@3f3-c^&Qs=7[U#`=');
define('SECURE_AUTH_SALT', '<1=Dx^$]GcIP.;~ volukNb59Mcg-aXK]GGPBl|#.`9Q97[KJ!:Bvu<zbM%?[~e4');
define('LOGGED_IN_SALT',   '|R#Uy:f;3@rMld0dS*,^9`$G*DKxVOCVl}B.y;M7g;o=izpv_qO`&C*^jy?C-q;e');
define('NONCE_SALT',       'Xsp6PN+iDw16BZ /6I~||n^%.4zqdJ`8@7TXUvG+25HUmw,w!ZoDL}+8v-<ScF8|');

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

/** Allows caching to S3 using an EC2 IAM role instead of access and secret keys **/
define( 'AS3CF_AWS_USE_EC2_IAM_ROLE', true );

/** to allow 'W3TC' plugin write the configuration data into DB */
define( 'W3TC_CONFIG_DATABASE', true );

/** to allow https in WordPress, will be used in lab 2/
$_SERVER['HTTPS'] = 'on';

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
