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
define( 'AUTH_KEY',          'Y1[qK$X@$vI{%cQtDZz~qZJf=Z,S$_!Z5jGlKApN-)!u$b;ODzd=;Sa$oIhww70}' );
define( 'SECURE_AUTH_KEY',   'jl|I@hHgV)@JW_PfSz9X=Eqjms|p m^S(OTPz %%CWQy][1xm>Jvu(,C JGqlhj=' );
define( 'LOGGED_IN_KEY',     'Ij]gD}9pIC^k0g>=x@7~ozxYr*A1r&`Y[;IRWFDOP6HHWk@s}U7Y8k7FBp1U/Y;i' );
define( 'NONCE_KEY',         'b!$vJ$n_f7?m ~BtU1%l6?Br_0nJBKAU([Aa8(U;wxgLl{>HCQ@!y`=TnK!QYM1=' );
define( 'AUTH_SALT',         'IxU.QNc>8NG8b.[!_ A`q)EL9?FSyH?6!]&0G,N;~nQr(r(Rat=B==5a+[t1,HpK' );
define( 'SECURE_AUTH_SALT',  'YyaT0RyBx!/qd&!=WpCE2q^5JXD0IIaYb3c+0 $QmdAp`:u0n*Xpgi~3pM[JUFr*' );
define( 'LOGGED_IN_SALT',    'P/_91&]|lW/6v*Ct,,%KSdMwEH1[`&BLf/3O}?C]!<&9-<3CtA9-4N*6Xq?1pN|{' );
define( 'NONCE_SALT',        '4L[5}wNlf}YA$BPslW9~.40  y?jnaHl~FP|E@TO4ewa@VNdn#Wf%alU!ub9rU&%' );
define( 'WP_CACHE_KEY_SALT', 'n8cL0J?U2 2}z$WH{v!HmW2Ri(C>9r~nLE#8W]}})Q<r7m9tM`8lJJ5Fah<sgoKb' );


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
