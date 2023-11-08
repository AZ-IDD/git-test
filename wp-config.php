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
define( 'AUTH_KEY',          'PkxoSN,4oau4l;7X+QT aCX~@1|Qzdoe;y&dhHYkCP?hKdajBm_d{W2g].+w!>h=' );
define( 'SECURE_AUTH_KEY',   'MSB?-uW]lJ+Bl@->M90[gZNAIwZa_emqr,Rg5ip0Y[gD7P8$m@=XcjD!w5tDs]*8' );
define( 'LOGGED_IN_KEY',     '&RT=$$%vb4O9o!0p:nY&g9!+Bj1jGgMlJs^ZBd9>4m?z*2)4yseWgMs`J?,b<+-W' );
define( 'NONCE_KEY',         '~`]EWJ|dVtC2L.DJ;2Dcr;k~sxG:I(9T{frKI=`Qh}:!6Jv+tenDB5EFx1e (_2y' );
define( 'AUTH_SALT',         'Sc)|fs.#P9saBRN3+&8K9}-w&,?GWkEs}Um<ouQ%XCTwN}:xn^n9Zlspk.$xwFb)' );
define( 'SECURE_AUTH_SALT',  '`?CdlnHXoHU[5]60j_te=|abX5!c]XcOLoNUBPvQ.m`3pbF^O)WM+{cTG3{`!eBg' );
define( 'LOGGED_IN_SALT',    'p5>(%,fjc@j#UTr|:XVU^Q~|NR,V_jdOF`N3SK[p~&A|}6>eUw2NQ@8{kG<jX5?T' );
define( 'NONCE_SALT',        'Q)/|n&oxqAI1_gHtN,&[7+V^)zS5HVZ4z,/c!Uw(!?kzf{FSS pfu0|&>BoC)Y/!' );
define( 'WP_CACHE_KEY_SALT', 'N`YNzMg_#~%eNT,Ti-<}|=`T37!)7PO34VT(|rGjpJHW,MF}UtP?gMMeJXeo&+/q' );


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
