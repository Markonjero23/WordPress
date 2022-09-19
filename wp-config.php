<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

define('WP_HOME', 'https://mnovak.wppsbootcamp.com/projekat');
define('WP_SITEURL', 'https://mnovak.wppsbootcamp.com/projekat');

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
define( 'DB_NAME', 'mnovak_projekat1' );

/** Database username */
define( 'DB_USER', 'mnovak_projekat1' );

/** Database password */
define( 'DB_PASSWORD', 'EHqj7D5wBe-3' );

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
define( 'AUTH_KEY',         'rDENJikN!=qY@*|JL^49FatJNz9$nEZ1m#vuAi=r,Bve]<sw=I&(7VRN@,)3(mIg' );
define( 'SECURE_AUTH_KEY',  'hcs)3q$eT8NH:X,M{w]XFGk{ac[W@iT+:Cv]g9k.ir0R`<WMjCUfFRTnNz+IxI=s' );
define( 'LOGGED_IN_KEY',    'Ig&~O{e;I-e.*Uk?kE}?ag80SQYXPN!,TY5i:^U1aT?U(KDh/.|05a3xs{vda:t5' );
define( 'NONCE_KEY',        ':?v:FVY+W5a9:b4H2W.S_7 w309OPxuI+r+%n}])kfOp{yVGI6v;n(DtiLl=_Nmb' );
define( 'AUTH_SALT',        'UvepHz,F?!f~ ZcGA  UKqgln5w;v7[M?-w[JWLg9S~@Fz4!ab-wPW:&N)n%qUK,' );
define( 'SECURE_AUTH_SALT', ';>)pcQL#5xcPKLSm2Y[urh^G0$a6}W{uSOlk9M!tz4fK{qb|SB!! Ny]%x,y_Hoh' );
define( 'LOGGED_IN_SALT',   'E=l{+anpz`bI|Mzl7x!#$!jUuE|o.!CB0e(H?mhO>he71Rm.g;[Kyf<5%mDzK]f*' );
define( 'NONCE_SALT',       '[ee/k5B);V;1Oc(9zp/uPNPzK0X{spXJI~Mx7HYxKa:+d LAG!NOO`{`KX5<lS_~' );

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
