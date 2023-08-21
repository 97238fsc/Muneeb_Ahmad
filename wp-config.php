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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Adsterra' );

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
define( 'AUTH_KEY',         'Et!=i/_#Sz@ex{h^Me}iyy c.3GL@PXvWXC2!biLQ9emv,4Fvyo*+ l]S@z;u#!(' );
define( 'SECURE_AUTH_KEY',  'LAbYPhcvf+ bL8$_]-z^u4|3C|SZ>xaeWznHXjlrR=Agms?nNRO|cemf?Q?>%B$b' );
define( 'LOGGED_IN_KEY',    'gTlG(i=q8miq;F9tFel!{6ejNs~Ru$A;l#AFp;OA+tDrp1M3q&qj2_rHeTh2,!`G' );
define( 'NONCE_KEY',        '`zmS_D+7.|UgqjNUSHo;2ids)I%eL@+FP7P[@M)/K.,%yY8vWwY(NzPF1}/=YenD' );
define( 'AUTH_SALT',        '{kEgBIOT``{n:Nr&wu1|TGOSCXql@8*SR55h>MRA81*^SZ4:A4<GE:+`0334xBl]' );
define( 'SECURE_AUTH_SALT', 'mdVyslfop1b!Y||{mbFK6dsT@V2cQu/zOAlh%i+dIt@WDJ#k^SE!<#CLD4jW }5&' );
define( 'LOGGED_IN_SALT',   '8`i<(qkTu[N#/OQ)EVJ&Q!K)v*)=D!sy|Ds(S3dz!}s2Wqs=EuH 5QOgE4{#Yrx/' );
define( 'NONCE_SALT',       'ZIl@q^QmV8g]EzkHRLs2]j~v1v![6|UIursKl}9~8-dR=iUo[7`|598/Gmz}nvZs' );

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
