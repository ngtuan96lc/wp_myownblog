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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Ngtuan96lc' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
//define( 'AUTH_KEY',         'put your unique phrase here' );
//define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
//define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
//define( 'NONCE_KEY',        'put your unique phrase here' );
//define( 'AUTH_SALT',        'put your unique phrase here' );
//define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
//define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
//define( 'NONCE_SALT',       'put your unique phrase here' );

define('AUTH_KEY',         'LACr,v=cRa+T&P9]an$f0A:Kr2_m7#,3o3c`}LTV-`3I7<g!8rk#p+Z$U}wDVZS`');
define('SECURE_AUTH_KEY',  'jkg0Z#I%t5U{PGSNv/;dv3|.88@nT+H-.0lM7<5SYI1EGThvG;8h:ggGUxS9@bG1');
define('LOGGED_IN_KEY',    'f>,h|s5LDr.%Ix9({7c#+rX$= I5Pm+btBmA{ZdwK8Eg=pCm1 J<<dy Nn*>phwk');
define('NONCE_KEY',        '0V^3/a&>y-ulX+NEf^mv:;AInY*5C-4yh/8|kjvz_0;GXf(TFfoK+snAr9V|TcS6');
define('AUTH_SALT',        '8keYy|7PoRyBq4l}BlBAU);-nZ#qd$&b*X1 _Nm<J1K37ZFvf.<;yY_|@4k4Y-R|');
define('SECURE_AUTH_SALT', 'x!B@|Bg<)e_6!E|Pg)JB]C]Mc3/ A~Q.<V7hlBk-fD>O.jvtBP8GV&<V+k^+=Ouy');
define('LOGGED_IN_SALT',   'JC}k&L$;U;yq+oN)i|!OPj8M-K@jlw+X.wT<VGrysVlLC:>.0vTP|$ c78zcGeli');
define('NONCE_SALT',       'fj1nxF_iB{N&1/=s[SR+]8-Ye-|+V55ySGP&Z)`&rab`r&eY4!o;*-?@lG f,DVk');

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
