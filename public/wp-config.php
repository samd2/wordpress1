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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'deploy' );

/** MySQL database password */
define( 'DB_PASSWORD', 'test123' );

/** MySQL hostname */
define( 'DB_HOST', 'db1.logchart.com' );

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
define( 'AUTH_KEY',         'N,=SWx[b@U.ose~^]8>tt|K{{XL7+C~hh[(?7:3jrWJ0Wv,xotRFV9[Q8AErLKs}' );
define( 'SECURE_AUTH_KEY',  'Plv]4tj@3LnsancT#7|-%8G?vsOGoZl_M)4VyWiTNHD2L)-ti4N)y 5Z`@4uT+z-' );
define( 'LOGGED_IN_KEY',    'e+{PrV4!t-e{Zp/cch;J?b`fU?[`=!;py~]PHIN p 1yw/7z@02>9[TEre]/A_-5' );
define( 'NONCE_KEY',        'jkF 8}U%~Evs ]q1t(BR~EFe]6@&[z]R/?m?&#m0of@1]K+ZUIH~>+!0Tkm=0-,#' );
define( 'AUTH_SALT',        'YpS|XMwWLpw2As@^NeFU_y`$7@}%M[Z6_IXO *^gyQ|W!ba0y,$|0`91I9:!jw3*' );
define( 'SECURE_AUTH_SALT', 'cNo+s5Bkt,viBV#:yL=ZO8f]e*YxBYj(I0;1+BoN}$4W$q]7T`?#o7}fWz#-M)lA' );
define( 'LOGGED_IN_SALT',   'hO;U2]y`w?8m!LC`]F1gR,{FUj=OtRqu[m?P4`trKURTl-X}|w9]MN[Rb9mwMg(s' );
define( 'NONCE_SALT',       't3hWdpS^Z[#B]`DPU>Qegx0r$/OEBcNGzXE~[Tm/Tzy4i<R_Tb,U$Ea%DCrC#%^=' );

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

