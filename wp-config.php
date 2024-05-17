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
define( 'DB_NAME', 'examnight' );

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
define( 'AUTH_KEY',         'Ep(@JiX*61kwg~`Yn|>Q;3a^I<6ne$R[6A_}HO(?(vOj#6<bcObgQSFP2=N`jxPj' );
define( 'SECURE_AUTH_KEY',  'r:cU1#Q@q#;W!2gO^S$]>b=Sb@P)nVAI3X`.g6.m2QIZFYqOT`f$B(-a/uYth)sB' );
define( 'LOGGED_IN_KEY',    'u}~>85cZA?u?`YBK:*4(P|.|GANx~cLXgW%j84!x,?<#nkIawqQmp/;.>1V ;*&V' );
define( 'NONCE_KEY',        'RxIr-$*3rXr[sxhF,?2)J`TAW_O.<<Q^uR8QGT9`QM!$+1|,S,$?tQbox]-@?hCw' );
define( 'AUTH_SALT',        'd^S~f=T<~o410b4MuSjJKP~M,u;xAhg.evp7_Io$?f <9.0<D;3ks-#o~Zy!jpV.' );
define( 'SECURE_AUTH_SALT', '}.p{`.W;Tq4ukm,ZDHr&}TG2d]Z)@@Hq*T :KF?SO$$sL<SQ{>4]6|D5jI&,?Qhh' );
define( 'LOGGED_IN_SALT',   '5Al+K?(Hs>eSe;M<Kww+5@=,C>7b??2;j_})=d@E`~hQbHX=#QF=l3{s7G-!..~.' );
define( 'NONCE_SALT',       'CdgT<@&76zNCdudcHaNbM=LpPu)w:-Ad>xlsY%f#5K=FSt)),b>!,`}r7kho0!_O' );

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
