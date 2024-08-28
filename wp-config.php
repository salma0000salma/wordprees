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
define( 'DB_NAME', 'salma' );

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
define( 'AUTH_KEY',         'I5KDx)+ :P^jTSGa{})jiybbMM!g4?_o;SsTbGE?@F1YKU~+lbb_E d$bF0fD-&j' );
define( 'SECURE_AUTH_KEY',  'ZlW2]<)Wn.)0H|TTzHtN%vpX=ugk85q-4+7u5SW[},vlUq  6>2aiy6f6B&?K95>' );
define( 'LOGGED_IN_KEY',    '>[mTC{zp`H~Erd8$q-RWmxVx$sKE|}}m<hFv=*.pB_y0Dv0?fbow5vlo<=W?sgOT' );
define( 'NONCE_KEY',        'd(ga+-67XZc&$D<#Cj65QzhY7.o+v5O2s#P0&5*K_fcKUhd8,CjjJr||POAG5L8^' );
define( 'AUTH_SALT',        'h*s^(qV&cvhS1KBypeF^CWjVbI>R7~+>8]5R Qo>md|O&o/EC4/n?)4u V,7}me[' );
define( 'SECURE_AUTH_SALT', '&YcfN.b%^l`[f8=@THs3V6iRA>R/|a~g!^Pbmp@Ge+QXOyZBBoyv`IP(T24<GeIl' );
define( 'LOGGED_IN_SALT',   '}?nVQ]H{g9~C.],[TT7p3}0{aV~X>|yKYadYw2kP.akR&|oX6R7#{~-]<ANK:~.F' );
define( 'NONCE_SALT',       ',{+T$kF3+&+[xhsji@9`}JV2=K%pP~GCsnNS*`}0Wz>4$X(Yt_V3+f^5CB`SXw09' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
