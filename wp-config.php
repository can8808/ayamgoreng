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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ayamgoreng_db' );

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
define( 'AUTH_KEY',         '$1V@vR}`aLcFaxuj!|h4sf04W>#c8=bmFRd5_%X8~~Chv2}I2aSG@x#L(p=%n3LH' );
define( 'SECURE_AUTH_KEY',  'Dl/bnA/Eqo<I+sRB(!?(#ApG QfQYXF37I<(U&d^5E-pIx!F.NU/,qf`<!=m=`yF' );
define( 'LOGGED_IN_KEY',    'h1:dZm6`XCp&<xL09l<+qq(2Y*[L/9K=f3]J(T-eHh,R0MQFs/#sJh7P?q{/9OIC' );
define( 'NONCE_KEY',        'Qm9$$K,uX2Wqterck*~pA}?S_&P7,k6dF^hV|[{`VKC9ZNcuZnET@g-{G1Q9xLu3' );
define( 'AUTH_SALT',        'txB%e79 ^@T:iU+FiVgsdik2}@5NI9T2KR{it(?t87w[gR]:w141PNqw%oIDy|]}' );
define( 'SECURE_AUTH_SALT', '!p^}5}o,}b~-H#x$5jI}m^;TUUk<Bfs8<`@te;X<P#x5IPW<h>ThY=p*u+v;0ESM' );
define( 'LOGGED_IN_SALT',   'pK$UXy:D%#,o#dIpp~3{F1Q%.*OVWj;qkF4p2QVd|wj=^-9hJ}ifE{~[lbywbu$u' );
define( 'NONCE_SALT',       'B<jTw4=820Fj.]}L>>GeuL{@N%(&F9M0hWJdT>ZYsRrHL,SU3J[^^+DL&u]yYzFv' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
