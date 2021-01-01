<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'urban' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cGm&9Jc<l:LtV!/o56**^0^|%!A-8Jq-1$`v62|5_bW6Of(nG J%0dBN.+[^~NtH' );
define( 'SECURE_AUTH_KEY',  '-x5XKE_F(-n]KHzlDuz,%wca6GoQ[,N{IX9mN)PP]xNu9IUn{fhJ2}$u,Mj81*I]' );
define( 'LOGGED_IN_KEY',    'QJOXu26Alihs/Vl22@d9,s7~80yj>4agmH`KPX)=%n1*^~a_XCG0vkNB4i+9GcnP' );
define( 'NONCE_KEY',        'PPxtaWj!A2LcnD^} ,t42&)8~a,)5~WhYa8Dx&f#?kh>wnBFKj9P{q#c6D_%8n0h' );
define( 'AUTH_SALT',        '}<7432j&l<J9xb`9IzFM_#-+V75duytu[.UsQ;KRrip9}1]}n^>8Y(bwkVCj{K6P' );
define( 'SECURE_AUTH_SALT', 'c7[?9O(Dnl~.C<EY!KMS`p``eje@Nj0w@d?+%p|:$R}w7g!^!q?SJw[ga9ZDi0x ' );
define( 'LOGGED_IN_SALT',   'k)/-?W8@xF||*/%rl+5GH&jA2J]FL7F)y(j=)9ti}J7]:sxZ88^uUq}dnnx|FB.`' );
define( 'NONCE_SALT',       'R6{9U tS0sheDS8UOX>.ybQd00<;7EpJJxxw6esX|xNoO?y8=FG8$vt wG6NAS_u' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
