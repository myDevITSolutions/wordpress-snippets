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
define( 'DB_NAME', 'wpsnippetsdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'LPOmnb123!' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'l%,F4;{,N^x]1DGwCSn,AM{jWbV+!dx{KV(~rUR:lNIk*kGI|%P$r>&X5G,:a`s7' );
define( 'SECURE_AUTH_KEY',  '(Zgv9)`{Abg-F.:)k)&*Bq}gVSp{(_u_<6$[QwQ|f[4,V~Sg1I6h-4N4F;^(?c7i' );
define( 'LOGGED_IN_KEY',    '2eFg$wP+BfMy_]7f4lT!lV*()boNkw(%|AD8?aTX(d41oJFsiOnk:1`)-^*vw_@~' );
define( 'NONCE_KEY',        'Uh7/[Ia,TqND;=8($ugCP?[4FbN$F,0$F_6W>>u>`Fmeof7V/~-*obD6H@.^J(Si' );
define( 'AUTH_SALT',        'K/1`^k;;,7}xs[NTz[_MEQ7~eHhD:uZG#nDHp/]t(sUg7]p`Oy4MQ/7`5-R}-{26' );
define( 'SECURE_AUTH_SALT', 'FGc;{9RnrB9r2<-YJ@DoD>?Q>EyTg?Mgwig-OfT&{;&5/QdHs7kGUDwE#R#&C%hi' );
define( 'LOGGED_IN_SALT',   ' I;>6E?2E]9t{92RLIwI =W%DAf-uP$se:!(kXt|BEH*$8YF{R2?_0cn-pNsodo=' );
define( 'NONCE_SALT',       'I8e~G}3 TCX/s<AI*cYXFMU *|CR^dRfMiuHB1BBcZ%:[Nq@d!T,NMk_WY5dUBv*' );

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
