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
define( 'DB_NAME', 'university' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'VEq09ka@' );

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
define( 'AUTH_KEY',         '=pkrRHs!&a>ro3,Mk!U|BP6c]cb*L>}%n7<iiSx#K|Wqct2dn&v$b;|n19=:53(G' );
define( 'SECURE_AUTH_KEY',  'ggn1;blFJ]k?cu9jK:b3p;Qq#q8~]{*]{6MnWeY7c)ZmRssV%4/j0p9Ha2gJWMS9' );
define( 'LOGGED_IN_KEY',    'xqjhneK^nYZ0n<nXz#+6ppAbI/D-87!)bqu]XS]Y%F=]E% $RW{ LQ^/pjtiW@7?' );
define( 'NONCE_KEY',        'DMPcix?Zu;a1fBRE9iIGd=A:X*0+Y%#8[f/meuwdKF/%l&*R-Hft]qXi:EsD#MGT' );
define( 'AUTH_SALT',        'P1] 6$#RndJ9TLOnlTtDdL#@ucY9Z;3Y>O^8pr$),C?I=m|Y9+@z*,i^:Z1.CH;z' );
define( 'SECURE_AUTH_SALT', 'aGb2n/)<.vco]7tai+tL($8siN%MV2Zd1r~B:nkW7G~<BswGc{E54^}[dX6e`{yR' );
define( 'LOGGED_IN_SALT',   'm?;j:qV0o6(Kjkk8RQ_Z53AUb&i`8ts-F$#;w_-p{@X>]Pxr 3R$p[PFfLndQ59m' );
define( 'NONCE_SALT',       ' `pC^AFf-.P)g,U~6{9PDX=:jN2KlyX}`[hJ{$HTd=WGsOZg%z`uYLL`j3Wy#$5@' );

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

