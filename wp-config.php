<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'geeker' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'tw`oQjB;hl`_k47L#!sN m%q(6_RumRm.-/G6xddv*aR%iqAB8Yb0Xwof:87YVSb' );
define( 'SECURE_AUTH_KEY',  '[LW3awX/mHxB(,sCV7Qt T-6MD2),<oSGdLO% |Qq]*_ec|8J ~`d?6r6OHqj@;F' );
define( 'LOGGED_IN_KEY',    'N^B;y1T.h0KHq)2Wci q.H|+Mg_!)?Oa{;bESH|XxD(o%$[i:/WQ285j;*#Q3sW7' );
define( 'NONCE_KEY',        'Xm|p+k|O7@CrHtui4{ H]X`LwAGx5{$;a6@%beEY=cR!|xd898lnjxah)1Vwux<f' );
define( 'AUTH_SALT',        'n+ds!dh#[<|/BmB xX0.ibfO+VYXM3ji+7Nsp%>pQ5,4Ej<_$FB`ju:Xk8!rR<c>' );
define( 'SECURE_AUTH_SALT', '5tT`!/{_ophmaA9pc7jqa.Ra!QtpePZ*:]c3!XE[y%woHE:?/w:YC(}70|)g9JR>' );
define( 'LOGGED_IN_SALT',   'n.bta>6}bA1{pp)l5,.Up%w9[859-*<fmq@#YZ$a{MF.,+Y6% DQ2{C9gA)yMx,;' );
define( 'NONCE_SALT',       'g|!L;VZW&`%3`;}KH<re?wtUx3qvNpH^v^e%Dpohj%d,HH5cY}m]6>L+{ ll1t&2' );

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
