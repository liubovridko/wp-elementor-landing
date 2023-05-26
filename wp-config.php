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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-elementor-landing' );

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
define( 'AUTH_KEY',         '>iz_z*7G0S~)vK?pi)1U)E02>TBCw3QoEi-WA[a9X^CZ)CFPH&sgg$0Lgn;f/C[+' );
define( 'SECURE_AUTH_KEY',  'TnO3q/4ZQ}I,)`qKA/#@KEZ`#/kvD4Jj60=8ojM(6Xopb+6(Vl7lN%ZqNk25}`C8' );
define( 'LOGGED_IN_KEY',    ']P>l`[c>.1ZjlSnAlJrf_!RdB!Zoi]^%h9@uX~0Q*72av2^sDTG `._1V[u4s 0f' );
define( 'NONCE_KEY',        'H>EHge@T-Z#p{zJP>7xjr(tT!(g=[iyUQU9;`K0Vh<}4NP7fj SiVd0(baKyS}>+' );
define( 'AUTH_SALT',        'feWe/&SL$UI:bj<ZG_p`@>Bwk+PH2P44bn<dRi!z8%KTxsZYS9%Zvg0u[+/8M=XP' );
define( 'SECURE_AUTH_SALT', 'fj;s]~*~66mYvf?Fn2j-3=Q6akr]$}9aU>Nm@hpS.VD,~M@J,?E5-y&)0uAD+|YQ' );
define( 'LOGGED_IN_SALT',   ';-^7H5^cmF/kgZLJnto9>czxmEQVVvccIF};yq/pk*<MF5g]bq}=!Xtox]Q!i,Q8' );
define( 'NONCE_SALT',       'SrrcNlWaoPDnjTpw1Bbu+&;ZF]5TI!o|]}+{sy<c()f}$?iQ3tK}Jq>?K/AD)K|L' );

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
