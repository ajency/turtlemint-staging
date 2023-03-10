<?php
define( 'WP_CACHE', true /* Modified by NitroPack */ );

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

define( 'WP_HOME', 'http://localhost/turtlemint-staging' );
define( 'WP_SITEURL', 'http://localhost/turtlemint-staging/' );




// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

//define('FORCE_SSL_ADMIN',true);

define('FORCE_SSL_LOGIN', false);
define( 'FORCE_SSL_ADMIN', false );
define('DB_NAME', "turtlemint_staging");


/** MySQL database username */

define('DB_USER', "root");


/** MySQL database password */

define('DB_PASSWORD', "");


/** MySQL hostname */

define('DB_HOST', "localhost");


/** Database Charset to use in creating database tables. */

define('DB_CHARSET', 'utf8');


/** The Database Collate type. Don't change this if in doubt. */

define('DB_COLLATE', '');


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define('AUTH_KEY',         'ZEx=n$u<kN6X4:h65ZEJ9rg[b@uT#+>TQtStvD&d|]ai] K53k+NJ?thE}8}RsjS');

define('SECURE_AUTH_KEY',  ';n N9jqhHNM0F)d.At|Ld|plA.rF[<V)P/,kiD_RTbcsQ+TLs%gSaB?PCfD%UqOx');

define('LOGGED_IN_KEY',    '=3o7`Ff?5H~=zro|S&8!>V4&ZJ!MVS8(2|>)pkI-rjl#O_xM!?@3B!H}pryybm~5');

define('NONCE_KEY',        'NS ~|.7LH+34r(rEyO!)TO^h]!uDtT(pR,@_$d(8s2xyQi< xIeNn33 +YW>oSR:');

define('AUTH_SALT',        'f3`338^4}k<JP?.[m=h/@<9nbZiwE1?T+inc$SCkI?fu,Ed1retRig{J6gYc/U^H');

define('SECURE_AUTH_SALT', '9eNPZ. C]B0uWE;#)kV*kr30y|>IJ)KA.aRQEuca4t6K(5,@$}jh5nnqg {BO[.:');

define('LOGGED_IN_SALT',   'N^0(JI[2&6aO|%P3B~=;Sq#`vfVJL#wm@}$`q5|;1WD+E!U#_V3%3FKd+I;I!2jR');

define('NONCE_SALT',       '*dKDP$rxH;A;vyB~-r?pZ  );KO90kR.b?ZvExgxv4|mTa,@%w}$((se}Wcmz; J');


/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'dbbs_';


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

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );
define( 'SCRIPT_DEBUG', true );
define( 'CONCATENATE_SCRIPTS', false );

/* That's all, stop editing! Happy blogging. */


/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') $_SERVER['HTTPS'] = 'on';

/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');

//Begin
$server_opts = array("HTTP_CLOUDFRONT_FORWARDED_PROTO" => "https", "HTTP_CF_VISITOR"=>"https", "HTTP_X_FORWARDED_PROTO"=>"https", "HTTP_X_FORWARDED_SSL"=>"on", "HTTP_X_PROTO"=>"SSL", "HTTP_X_FORWARDED_SSL"=>"1");
foreach( $server_opts as $option => $value ) {
if ((isset($_ENV["HTTPS"]) && ( "on" == $_ENV["HTTPS"] )) || (isset( $_SERVER[ $option ] ) && ( strpos( $_SERVER[ $option ], $value ) !== false )) ) {
 $_SERVER[ "HTTPS" ] = "on";
 break;
}
}
//END





