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
define( 'DB_NAME', 'ticket_dbb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'r}m<x`Vs3CDE%~,E2dH$aw>Kj+3q,774B<Id}mbqra~*q6Pf#l`vi?_,Sr>I.rXl' );
define( 'SECURE_AUTH_KEY',  'jO8O5x?at]$~oh[C_K)7zkhwIUsreF,,LupTVBWuw?[En8TunO:QN(ie/lOV-0=.' );
define( 'LOGGED_IN_KEY',    'bE%0DLVbeZw%d_F<6_OUUZ70ZU-e4w1*zMhG6)^K{9B[Jq`V;G3+^oA6s]&K;x|v' );
define( 'NONCE_KEY',        'QD}qzi7N-Am(y7m~[l2Hn?@_pvKF..7rEYDm Sj(p_ iyt|})L*YAC0++>sw05sF' );
define( 'AUTH_SALT',        '.iEV|]g02T2;.RO%}q=.qT|ceH>>EM%!Nq$%mYt.y!p[U3tFjm:;n;2GQ{6[Fz_X' );
define( 'SECURE_AUTH_SALT', 'bGpE6%k]Qk{iYD|m{bpjTe,q&}XuBVM0=Rj$N!FG!#cUa9XAe>#[<40/E_D{wM`9' );
define( 'LOGGED_IN_SALT',   'vPLv?K<|h.x54b${^l(C_4I8/ISM`TyX(Bk|J]oK!RdM.[hNbjB me9Uyrm/gr(5' );
define( 'NONCE_SALT',       '}Z&7o!101t68i0c.5xPFYx#j@]N+K.})_]J~`R7;rc:H_@ G0]fB.!}32s7w4F(q' );

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
