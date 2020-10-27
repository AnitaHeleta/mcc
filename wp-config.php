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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mcc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'wm|(_ ;jVqM6=l.YJ|lYM6:m[qBqUEF}`FZz% ]5Rpq$DysHP^vIZ|,r&rj<2!*@' );
define( 'SECURE_AUTH_KEY',  'Mbh_6!=(,Km6OrcCq4-9 6]=4bPR}O{4vQ(XwP+>xLn8r`W$EUvTfW[Ocq7O?Q/`' );
define( 'LOGGED_IN_KEY',    'i)Z?v4w 1nj|UEcz,$MZKDpZal_c#Jf{Rh35G}9fjJRmp![T uoM*{+58Z@^Yd&o' );
define( 'NONCE_KEY',        'Xr8L9wTU3kT1JUSwJ+rIac8d5zV{;rz 0^Y`l+S-WaERj2|56rw $i<yg@qdm)5s' );
define( 'AUTH_SALT',        '@EwW{l.lu?@,ZIy:j#G  sXD[g6<*=O]hV<VBkZ[[^K~>7@1`,4j_c<*cfh98.::' );
define( 'SECURE_AUTH_SALT', 'SdWGy0-#sV@0M5CZ*4-RT`X<f_0Ev4wW-Or#bl.@yo<^<Vxlp,&5[`LG>#UX%OKI' );
define( 'LOGGED_IN_SALT',   '*_>G9U;D0bPXHmh7GiM )-il.^.CVQUb[Tj7WwJk;hWm.-,},2{*V=Z[@VV8&slI' );
define( 'NONCE_SALT',       ';(@wqv1B](hWBve?xnr*03aECo0G@e>(vUqcr2!BZBAM|q^HD3otKpxBN@Uy_$1>' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
