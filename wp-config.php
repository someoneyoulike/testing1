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
define( 'DB_NAME', 'webstack_erkai_t' );

/** MySQL database username */
define( 'DB_USER', 'webstack_erkai_t' );

/** MySQL database password */
define( 'DB_PASSWORD', 'webstack_erkai_t' );

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
define( 'AUTH_KEY',         'aIKI&T.*g5<_=+d:~PAz`Vq~p>ei+DVYriG*bjRj@ynsg-szga.ABz|U[sO/p0[,' );
define( 'SECURE_AUTH_KEY',  '`4:I6*!>uoV~sh>m:&*wCI3v;J9{LJm*>RdL?CjXsg)jJ2 4$]>aRgF`6U0MKPBb' );
define( 'LOGGED_IN_KEY',    'Fgjw}Xu0Kb<e]ik/< K.g*KX{r}Ft<9?dkK=08QE.jE_4_j/dFAJg`D[o<cUD#k[' );
define( 'NONCE_KEY',        '#JW}A@G&+1-egI9.$q|}Gx.HC:GUO7]GNYMjqw26Cm1XLGX_u[8)zOuPYRdv}|iT' );
define( 'AUTH_SALT',        '-mx/LM4pX[a.?]t*Wu2VodygLj*)T{V6cunkq;N/ eV=B:0n7n3=-;m+w2y#]YXt' );
define( 'SECURE_AUTH_SALT', '7x{Gn8OD],ZZgp77jwuDc:,hHLUJ92&CP8P 3ZZbbRKVF<=Jmp^r-`?n,4En|8>d' );
define( 'LOGGED_IN_SALT',   'bu#x=wfj|7kBoH*CCkts)~FAz1MeDJP]!}|Wkee4`|<N_oMNYNg<zL.Feqd69Y8d' );
define( 'NONCE_SALT',       'ElVfMiGRr8lry7@*Q]LHou==stFckN_]g{<12-OwF2/_u,qh? l0zwrH2s-+>-60' );

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
