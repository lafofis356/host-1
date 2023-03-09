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
define( 'DB_NAME', 'wp_host1_db' );

/** Database username */
define( 'DB_USER', 'wp_host1_user' );

/** Database password */
define( 'DB_PASSWORD', 'wp_host1_pw' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define('AUTH_KEY',		 'H;hZmRqUu]@$zj)GZV%/Ni)&y7eaanyp8ns;HtZILz:7d9oimVE;=sChIEKC28Vg');
define('SECURE_AUTH_KEY',  'Pg5c;@yb|;hvtQ=x<{we2=Y)wF0i/<mD@evNV) y;ERm^Lb?uC20J<E6m>FSJAl@');
define('LOGGED_IN_KEY',	'01(i[_LB]wK`q].<w{AgBDQ{tl}LYysF1-Bk$§e!se>r§§Sg8}Zy/eg!W[(T>j<-');
define('NONCE_KEY',		'Z pg]/Z3y>Mx,m)Ju6ZhStu@+yUU},ugO8l!St8,J-m]hML{aZY}xtg:_8{xqacr');
define('AUTH_SALT',		'[=9aK@:.MSIOeCxZ:@LhV,3 3[cvJMSNM}Ba=f%a~}kErT[J5.Gl=@JAmZol)GJ`');
define('SECURE_AUTH_SALT', '(>W[P@?;X2^iM5(_g?C.j/:fy{]~_MraBB.aV;G[_r/vR^rJOt+j2SJ=§-b§_K!T');
define('LOGGED_IN_SALT',   'BC;</§rls(-_q=suol@tfo~?hw4@m=ZMe e`{>LI`@`o$@6SA,`lvW(%F`gd§`%1');
define('NONCE_SALT',	   '?mqOtPX|I_)^iZgPhHsDiaP<@r+spI(6}@.D@Tu2v-7_,wQ9uO$!xJ0Z-n`D?$,§');

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
