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
define( 'DB_NAME', 'coolbaby.store' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         ';*]Qh|J<!,q~=K#@+}@TMRmFB8t`&zR8ud+%V=EkWT%+Tk.Jd4[q5bD1fJfM}WGR' );
define( 'SECURE_AUTH_KEY',  '8s-:HkK}?Ud#F[)b|l]58>VN7@8Yw.jC6)uYdJ=$JAW7lPNr@,%c|$|8o/J-a3(2' );
define( 'LOGGED_IN_KEY',    '=bAigfY{KU%$su^5r?sB]CU6BJoZKXJVQ_DiHx?!+(?h$%5XJt{ Ip7a%qS~cSbM' );
define( 'NONCE_KEY',        'L`}N#mZy3oAz~z/VF3=Ea/03x><TU#p_~Q7g3d_xqMDjc>:6&ll*&zFT?uaYQe>e' );
define( 'AUTH_SALT',        '@4$.nV$^n(gE2A2 DV6#q:QCDyX?x`pD1L#]da:Ba9_Q11,i)H-/u&8JV0p=GQ{f' );
define( 'SECURE_AUTH_SALT', '16?@$[zc|rcu1u,Www7CwLcUe{3LuBN0[$0#ZJoHtsB-u<}4(k k-w6[=H-]tzol' );
define( 'LOGGED_IN_SALT',   'wy>rjG1&:}d4Ek]JA.&}BK{6%PMg07<FBuam_Ym[I4s2FZ6y5iGd1H>(!0W kDcc' );
define( 'NONCE_SALT',       'euf/sqz^.4n~CpOYjPYf6y8b1L*]|Ff6%U%uRY-h.VZC?k/V,hoYp=,;mo@~<|eP' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'store_';

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
