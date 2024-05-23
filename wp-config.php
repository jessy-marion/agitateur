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
define( 'AUTH_KEY',          '!@,|S$&&RJqwHd~:^T=>TzMcNgJl`;CzkIK( rj,X8#|v}Jj?hJ}2O-N.M)*UTeu' );
define( 'SECURE_AUTH_KEY',   'M,D#p<fICBY4-@hf-X-;~VUr(riP4^ZJ&-e?c@]pPH{M5f%giy5?aH|E3Mf6Bm*S' );
define( 'LOGGED_IN_KEY',     'V#2=(^~S0SZO4)vp,UUdG0+RmE^y)&hfyb:HnJmNvHV.iM$<hX^2]mJ#2crV(VbK' );
define( 'NONCE_KEY',         '7_,IO).Kc|SU2S}fz${x[,b:QuT2%W{Z/!$MRgHAiM->,OEX(Ut`aFO>K_6f,!qO' );
define( 'AUTH_SALT',         '8sp(#E:d(aC|;Zl{,I%2ui&IEh~  Urmw}/y(tN}yIYr%Zwf{09Y!S` g+#vQW>{' );
define( 'SECURE_AUTH_SALT',  'sqZ{Ek*|!/uJ[J.C?CQ#dn/mibyb/USo;Ab;GtN0,:4:T=qbKv,z7(0w?hA;~Lsj' );
define( 'LOGGED_IN_SALT',    'Y$:>pjk(C1$3@tpd4SwAmsL]>$<kdX>J0;i~Wcc,z>lM;+sbp!EUxGEGP=IXq}C1' );
define( 'NONCE_SALT',        '0Ud85^&DU^8>hE+$U9]U[^s e6NDY-FndPbLh#rA1/T&XIMGvp!.;iaJA!}sJ?VJ' );
define( 'WP_CACHE_KEY_SALT', '[L3aeBsFjqmNp!bZv0&@Ib6atBejAe*OjDw{ g 8#(%aG6qA)GCbswU h)mjVaR!' );


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
