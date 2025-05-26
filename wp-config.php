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
define( 'AUTH_KEY',          'T[fO.1@gLD|-L{w?Hx#8Gs[t%E3KilB^^9J)V.mk.JzBfNRI1:HYx|4wpf.u6Iyp' );
define( 'SECURE_AUTH_KEY',   '#cOSt?szkrJ.t{r_SoCZ5=U@pgVPuOA1j= <seY=o=)g),/~sn<!KT(Ny0fJ$rvi' );
define( 'LOGGED_IN_KEY',     'Q5?T=WP1aXHPHJ~m.$vm)<~viYD|D&nyHI6(s?-aL(F:QZiFP}1EU9uN&IO>$_|>' );
define( 'NONCE_KEY',         'UcV*Ocb8.i[o!I:||VnIx8oVXRWJ`}aHQ*/>eq)sOXIBARR!E;N=`CX865`ar&TV' );
define( 'AUTH_SALT',         ';ssZH6XU9a>?TBcTpx6vuWDgr~Uazd#@dOXNriO-IYZ!p>>Gz.k}e2SQ8s?cNuNg' );
define( 'SECURE_AUTH_SALT',  'GtNfpsE_tcjV`oR]qZ1((!dW4ESYiB_.I0GLAG29]z+-18/1cv[T@lgfcoU(Sf[|' );
define( 'LOGGED_IN_SALT',    '((Bt,~9z}Ki%3qi.N5 k7NE[@q8?`D-r$ X4W76*w,W5}X7~.cKwBKN^KaR]6W~`' );
define( 'NONCE_SALT',        'XDIYqf{(`cylp;[!?OEYa6F,k:jjrW&bCsD@,h{]Ln<<P!|H8W:h;d]1O|~AR;D2' );
define( 'WP_CACHE_KEY_SALT', ']n|L RIC9T,<W5Sv&LXUOM%U9f{{6ZU6%H5xqk4zraX,)y&yuU:3%xhZtu*Hhgc5' );


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
