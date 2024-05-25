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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'V&dJv#~yx4_|z23<:GiXdo5zZ.V4CAC*EPyk0J*fZlL71%_xGQ$zp2;l8+E/r4^A' );
define( 'SECURE_AUTH_KEY',   '55g*mo_=Xmnr`J^(YqAO`/U|a3@{kxx},!oZ_%B<,+mb^y$rq!e[fMv_gAX-h0(t' );
define( 'LOGGED_IN_KEY',     'x[?a>Px$p})Z99d*[<h!mV-oV1r_qt,-8gxMiGl@M+T2PRf@MPT>^&*-n[_<iP$E' );
define( 'NONCE_KEY',         '0w~m~&G>H5KEOu )bpfBIL6#?Lq8^:CvlA:G~e_u2rpij^uq6;u H#|f?T|(XFa/' );
define( 'AUTH_SALT',         'esz)e.i+:=t@LTk4nW#`SIVn1Rw0fwb!2B{Bz>#/YV*WyWu!jU 1$5Epo>c:D1Wp' );
define( 'SECURE_AUTH_SALT',  '=.8HYDEX]9q(mQKoQq*m:>, 3>},p?6HCy]8X&3<+h;E,MMWMiLPUHi^l#e:jfna' );
define( 'LOGGED_IN_SALT',    'fmsH~9jL$vm}W]l=jTmL-r `aJ8?G%~QZ+D]iQ0Dv{NyPErI`M@XWMK{vjMYN:.|' );
define( 'NONCE_SALT',        'c~1_Y%YE0NrX.l4|W/vIWN.vS<z-~e[%!O4E9d0YpiamgnZ1ef(`{H<Pbr-59/>v' );
define( 'WP_CACHE_KEY_SALT', 't]L5*:NBi?9d)C0c>TMhFCa8Jq~wJ1/a4fe54^P1YAHW|l}0cK4LTE>tHBB|u]-*' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
