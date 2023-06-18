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

 * @link https://wordpress.org/documentation/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** Database settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', 'bitnami_wordpress' );


/** Database username */

define( 'DB_USER', 'bn_wordpress' );


/** Database password */

define( 'DB_PASSWORD', 'fb1f37a1c5f67688171609e122a96438ec40475c9e2dcd91d52904810aef4279' );


/** Database hostname */

define( 'DB_HOST', '127.0.0.1:3306' );


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

define( 'AUTH_KEY',         ';JkDxXj!-OI^y JDG(5p^GK7oGRv*Rj(){5 @rRC/Sc|` QK&[7]=tRz&5!urr5F' );

define( 'SECURE_AUTH_KEY',  '?2_5mx>oGOiW;)gNisV*Z*3[0:.&{VRs@=BS=#EHSsx62[&oLy-tI|tn>x3&ohGT' );

define( 'LOGGED_IN_KEY',    'Si$M^?f;DnVTl3#va4ISz6yEsGq%i_Dn2RVnRZ+Zrsou*}8=RsL)w%{zt!f)g93q' );

define( 'NONCE_KEY',        'b7rd)}urT4aH`ver#@(j]VU]fLS348*qIomUKu3:NdFUXUP:Qp&t5*~EHPaySBy(' );

define( 'AUTH_SALT',        '05?7x(3s3!gGYeYLKCS53a;xMLR7SKE9Y(1h}G|OrZ8DJhs >-2J!vrpy&`*b35V' );

define( 'SECURE_AUTH_SALT', '!f4l]*iCTTP}:me^`(Js261pDe$6fE=w/}M&v8a1Hke3ksQkAyJKc4Rl7v6-MA%/' );

define( 'LOGGED_IN_SALT',   'WP{>Twm40vb4r?fwYho/m540R-L,P7XYU-v6(}Nq p*x2>]9rfCO)%k{cy>(4<iH' );

define( 'NONCE_SALT',       're&T(za2<_Had|AVR!]dj;&t2Rvxp;Z{SUJ^aN;eYe0j!W+-p!QV@]!lr?,UXZ>U' );


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
define( 'WP_CACHE', true );


/* Add any custom values between this line and the "stop editing" line. */




define( 'FS_METHOD', 'direct' );
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
 */
if ( defined( 'WP_CLI' ) ) {
	$_SERVER['HTTP_HOST'] = '127.0.0.1';
}

define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

/**
 * Disable pingback.ping xmlrpc method to prevent WordPress from participating in DDoS attacks
 * More info at: https://docs.bitnami.com/general/apps/wordpress/troubleshooting/xmlrpc-and-pingback/
 */
if ( !defined( 'WP_CLI' ) ) {
	// remove x-pingback HTTP header
	add_filter("wp_headers", function($headers) {
		unset($headers["X-Pingback"]);
		return $headers;
	});
	// disable pingbacks
	add_filter( "xmlrpc_methods", function( $methods ) {
		unset( $methods["pingback.ping"] );
		return $methods;
	});
}
