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
define( 'DB_NAME', 'u848568311_yummy' );

/** Database username */
define( 'DB_USER', 'u848568311_yummy' );

/** Database password */
define( 'DB_PASSWORD', 'ZoFpz4px5/' );

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
define( 'AUTH_KEY',         '>#dJpVt:~re 4&&=9VSfc:jmWe)tLwb@4fY,an}v87>*9I}2;h/].NXRPi(I(^t2' );
define( 'SECURE_AUTH_KEY',  'DlNvx]41C)#[@>58*vS]^X{(8{#.~j{jTNk86oyy`POOrQ*qK^UKiWEajQ@8gn4b' );
define( 'LOGGED_IN_KEY',    'r~^iGzvin:MhTume;4U.5vGS*}Ap5`<=N.)$9#Q[Np.Zqzt0.;,!RFs(vKB]DvZo' );
define( 'NONCE_KEY',        '___8.uBhJow5QRVB7,{tTpL=(5<ja{no6Rf7).E5ogu{Ba9(,H00MwBeh.9RQ6O]' );
define( 'AUTH_SALT',        '6^4acRZ?8F,d=ccr9ijDYgihQ dScN`[.Pe/hhH406=-[;2IR4N( > W{?7Kex:Z' );
define( 'SECURE_AUTH_SALT', 'N9.kRJ%Yh#lI0@cl3ms}qCxJIm`Jy(S@pnJONzHFLKJlwDkfEzHc`[){[m^h<0LM' );
define( 'LOGGED_IN_SALT',   'uI3q.|vWaVz![2qSlAp_(r_([/&-cO/.9Ig!v*vgelQNy>0Y:Z:.ULAp@sq*u8J}' );
define( 'NONCE_SALT',       '%zWu*Uj}JEwj?gWX$&9G:(J#WO6!CW_*VyD/AL5IRAEU#c*qw>v9WqW,c&?oS~_R' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
