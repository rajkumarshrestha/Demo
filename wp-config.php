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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'ZMs0+gch8g`_:JL<Y,Q8#g~lRY}ZGh(4J @a+3GGt`=)-5yMTFy%`g JR{kc*zro' );
define( 'SECURE_AUTH_KEY',  '+[a)I?Vdcr6~}^`c[gL{u j~nq]7SK|(}n.%39zpmKXL>*iAV5[ v@4A7@kpsZnm' );
define( 'LOGGED_IN_KEY',    '(<z)Iez6?(E8n<v[dQ.BF4V#y#mES?Ehvl}}|,O0T{p0@/&>H17XQ}7l6;nANNKk' );
define( 'NONCE_KEY',        'ZAC:0/jfz`]d24Z6`Am`YLr|jk!P~Elbd1qd*7>R4^zIMEgC=d~tdH{^`]D{yR=;' );
define( 'AUTH_SALT',        'D[}8` 3O0,,qv[mOE7%17J~O%yc|&X>N4xcI=X<vXr(8</b<qx/zZ1~dQi3ip<Z!' );
define( 'SECURE_AUTH_SALT', 'As%T%|Har1SS*.]@5J;qxFo?;WF<Y<IFKo)r1.PFb%T:vLf+&p>YZrwAc*: zo~a' );
define( 'LOGGED_IN_SALT',   'M=^B20ZA<q>3LIK!ek<K04EY.n.KEFsOI|krB%I$]`xDX(<rMc!$c.:MgQsyVQV|' );
define( 'NONCE_SALT',       'R.H37d?bP_Zx:!ncHos0PCy7U<m:5^]qIrcAF&3P2=b#Fy-%7vY4KI:e;?=n&E19' );

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
