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
define( 'DB_NAME', 'combatroyale_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'AB_|Kk]oM-#jr7n`>gGn;J<W40EkCB=Sd6ktF5,cb{ S%E=91m]Y%=T~yow~!9.I' );
define( 'SECURE_AUTH_KEY',  'if^kf5~R+iu]6APy~nB|fO?T,E.GaoT|tn2WWNC; Wm}|u=9H{c]V^{yXLVvh0X/' );
define( 'LOGGED_IN_KEY',    'QdNQih:FpwjjkgUuw/Zw1iAgI:7~sB$%l>LK~a9:i3wHg:Zl:0:o{6})aDe}zRyP' );
define( 'NONCE_KEY',        '^X#,hipLaK+&)U(-6R@@rMv^8#7a&(lIcVeB{3a}GI_2u2Duv#u6r2d4!/gg&`^W' );
define( 'AUTH_SALT',        'MqdxJf({F~},?<%;=uoMWlE}iaq7)aPr/$V2IU3<Hp5wlFZ4j{#arCjQE?_`^8TU' );
define( 'SECURE_AUTH_SALT', '~KSsK0$LS=q2%d^YHs?{nVvY+rf#jpX*JsBKX7vWrO%OQ3[X7haF49]n}X~$-I~)' );
define( 'LOGGED_IN_SALT',   '.M y4VlFJckY_BSrUw6gc{v3MikX -L/aq{mB7l<w-;H4([jDIv6:v?%d?=m]*a#' );
define( 'NONCE_SALT',       '_}SRo@Y@a$ T{[^<LHEu=I/N ^RI{,PE:X*aLyKP,e!c1[[8Q{S4my%HXV`*VMgw' );

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
