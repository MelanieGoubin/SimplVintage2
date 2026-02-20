<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'simplvintage2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '73T~f![|e_~wv]](kRktF_5jPhvo;`@O3s0/KV2Lkd5#EX=ynzlDShA5mia3Ib{W' );
define( 'SECURE_AUTH_KEY',  'H2{nH<A}IU])-Mv _uTc.&.,N%EXwph|?D<[gD^=.c[d&[7pFuug}8us/^v.4;Ao' );
define( 'LOGGED_IN_KEY',    'u$cse))]./jgEsvDe(dC,FN(}gl:=`zR21pAi@#k>mzfL0[ [&>RsH!#M)1fAj5-' );
define( 'NONCE_KEY',        'x/>H8sm8Wo-NF?>6&%)7!7L4 6WPLEo&@Zf&y%j?>|A@sXw#B8hi6vu?JkiOy$l$' );
define( 'AUTH_SALT',        '6psC$oT./<L.wol.6H.fHkICjTluxi0=nWBwp3lcH!{Cx0Mee,Do`Zt%h!e.st~M' );
define( 'SECURE_AUTH_SALT', 'j9redAw+)#bS^Qid~<0A9MrLrg+-]_r@Nh==U>>i)$/Gc]NviGoCYSF7/3?O/@Lw' );
define( 'LOGGED_IN_SALT',   '<vv.[4bb>Yenb~Zby7]p*@4UF&-3~k@I*odRTjVVS{C721X.^mvi=gB%=t47}{xB' );
define( 'NONCE_SALT',       'UoYl*!&2Q :OD]>;Ql9)}I{yhDI>s+WRE_Ib.6WIsN:)o*X`q2g:ru:9jV-,Y1mq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
