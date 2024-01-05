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
define( 'DB_NAME', 'myportfolio_db' );

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
define( 'AUTH_KEY',         'xOt(5`oaV=nzMQj&[*@zWQ2(3u4=!m1/6d5Pl3YtV$;/h%RIhbN*2Tg:Pg..Dm/)' );
define( 'SECURE_AUTH_KEY',  '&~K&#XqReO(E)(3d1X/0YEPGFL-_7Ag&/2Q/8#O.|^A9n)}IGZ:rn&~M+uD+CE9{' );
define( 'LOGGED_IN_KEY',    'mCq@B!/w RuAHx00wv2u9R!t~pL8IouFvk-SZc?23h^`$ o?SiVQyNSs{iQ;.jm:' );
define( 'NONCE_KEY',        'SqQTXe&4{0@T?*@@ox/u Ez L(0R-(j)#fIIt6pSbY>Q([E}I|$)t.lY4aEqpD-2' );
define( 'AUTH_SALT',        'JO /mF8($QRW{@46NW#,A;r3X#pu89;. C`MtDfU3z[;^HI7>4Q@C:X;FArbRVH(' );
define( 'SECURE_AUTH_SALT', '_BL$Jw#FJ3;h=B.Bc>=$c?V#<=T2Zj`zAA==)puA`HFKVvW~mVx>+]v8IORO01!m' );
define( 'LOGGED_IN_SALT',   'u`jKC4^~`-E:|j8hZIwjW+bphzYr0eN=q5:NL[Xljl3L$>$[d;u|Ccmj2a+E^.-6' );
define( 'NONCE_SALT',       'L[`3:Fyl*amEOXLxZ @}e%<)@K#637udyt=N=p`pXFS;RGlluH}6~LkmX>d]c>A4' );

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
