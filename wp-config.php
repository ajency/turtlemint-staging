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
define( 'DB_NAME', 'turtlemint_staging_new' );

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
define( 'AUTH_KEY',         'Xk!v~sni({5WT$%_]SH?I4RYq:}5a ip!zx9-/{*(;FH.K9Js9~ sCU)tkO3hK@n' );
define( 'SECURE_AUTH_KEY',  'B5l#V|G7<IAoo+o8AK4SJ~a%[?9!Ech]))ia).%w|)u2yaJLZ3B4(8Ym0fvuE@W2' );
define( 'LOGGED_IN_KEY',    'E+vL{w+y1ss|8k1B|*lPoE+|NX>/Mysr9O<l|X&IQXctuCo1!#7B5s[ yMMn1,!Q' );
define( 'NONCE_KEY',        '[T-mX!=B%R]Ra;RYO`YUJqbBK_)Lu/`2KW^,}FQ}$UZYn7bX_d.n>.MU#X@j~B3/' );
define( 'AUTH_SALT',        '0Z(?<nn4<zkQIftGeA01[%uJ(](%{`%}FgTS<H~j]<b9(|OJf{U- rH}!7CXq@a8' );
define( 'SECURE_AUTH_SALT', '4x.!s_I&wL:M4PJwNG#-+R`3O(E{OOXKHi!gSPJh;jBS;yOkLX;1)KGiJ/vnnfit' );
define( 'LOGGED_IN_SALT',   'r)GL)>lq998g-uE6n,v(R_S.$)-8YW9,1Z+Lv1JeHaM6=;pl`E{/1LJ#elr6ie)8' );
define( 'NONCE_SALT',       '7t{;1UE[G&yWLgcb*GrfY2#0sYVKyI[dp9fB|>KQJk4`Tifl&>9?t6;rr|?8uQ@>' );

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
