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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tasks' );

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
define( 'AUTH_KEY',         'YukE75mn1C7aam`5+DjP=DSwAeE:xoSw*hlsDZj ]:|>QIoYL47MwOt|4;jfo(=8' );
define( 'SECURE_AUTH_KEY',  '44*JhkuhUC1uDv4/ !$3k Q {,>*(<+2;`>]:t^$rjEtZ6vmm*7yD}afJfL:KfJS' );
define( 'LOGGED_IN_KEY',    'A*s>Q0.ab%QGg^,eyWM u1SsFnqO$:9%2X;)#Iw1g? ?mKL}ZfP_*h+nKg_{FrpO' );
define( 'NONCE_KEY',        ',F4t;2z+r096!6U&=I;dHn7#@Y}KmrdFse%~a9WH-xH9R1~d#623LzHS)O)-(4{b' );
define( 'AUTH_SALT',        '_v7/k* {Dogx~Abz3.JL;[4y{:{I7qXzT<.p]z7pywjYMpxiL0/g<4Xd-U.4M>*K' );
define( 'SECURE_AUTH_SALT', '`4mw,-+$8B[dupzLGSN{TUK|mc|I6}w{4%Xn5}X+}1sCdXOT A^={*<]kjVsi^[I' );
define( 'LOGGED_IN_SALT',   ']*# 7t%QTyj h7pq H!UIn-MY>^tu33rS11 Q(*@(Tb#1c((g]/A :O?rf:-wM+]' );
define( 'NONCE_SALT',       'j5,cMhJNif<>IS9kd*o`bfglR?qU6Y[L]amEr(|9ALJWogJMW|=eA5#e{<infTt[' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
