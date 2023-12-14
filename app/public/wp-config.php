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
define( 'AUTH_KEY',          'f {Imh3HCOTHB_E@bZze)=&bOgT$JC4<g7&OpRTF-d1bR`f>n_3qBRlN=7lSpb}S' );
define( 'SECURE_AUTH_KEY',   '#_|.K;R%qsA:&2hvue*^A,MMop|}&@]xyo[Q)#veh@S@MHR0OzN9ikm5v%YNG+D@' );
define( 'LOGGED_IN_KEY',     'f%wY5q<KVC|_gj$mt%hwV#StMm/-S}n{k$5;NuVtC0_q>r>r{vqIXMxRkRH,:Q9Q' );
define( 'NONCE_KEY',         'SjTD#9]0Vs`utMMW`u<CKgl2<A)x&[.bMT%.:!]hG.v6B}`Tz!l?*S,T.#[y9d5;' );
define( 'AUTH_SALT',         'Hvqek.Yoo2_V</{@5Fko_CC*~)Y*/1[zGS=8C13If8vdJ@H7h=~N, bqr7E$,i*w' );
define( 'SECURE_AUTH_SALT',  '0^4nO&u5fi%pM[Z]j.#Opp:hF&}qm8l^ngOA[EecCfm4j9,w)g.~~?`#SQ1&v,9I' );
define( 'LOGGED_IN_SALT',    '3Sw@mq/t7u*Ff/cJ75gFjnJn!C|;(Kn}m:V8+j(q|#?k)vlm%CE[l]n<B#A$7iXT' );
define( 'NONCE_SALT',        'j5aZPB-77dEe2;rCZ>Nf%>58}9p`gQps&H`~C&y?gp&F4X<)]2D:3F1Fv2NW}P -' );
define( 'WP_CACHE_KEY_SALT', 'zgpy6F{roUXUti_,j Y#~/Y#q&TlkUob/VjlN/n@J4Q3D@)MRw bZF&f|d0/^8n)' );


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
