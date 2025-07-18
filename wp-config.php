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
// define('WP_HOME', 'http://localhost:8000');
// define('WP_SITEURL', 'http://localhost:8000');

/** The name of the database for WordPress */
define( 'DB_NAME', 'kheobs_db' );

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
define( 'AUTH_KEY',         '<!qf2U24[ujPZ4?zh0|Lp#n1E2m<wI<pvCOS8_=k-~UdR:{6,ndk$#w1[i7T%D?2' );
define( 'SECURE_AUTH_KEY',  'K{?ur<p/mjMN#o51:~su[E&@6sVI-q$,paS|,>72^xW3[>_VW4:e!T{0]Hf*EH9#' );
define( 'LOGGED_IN_KEY',    '{w^fi!EjVY)w4_[hYQ~q}+5dPI9CgrL|gl^a[30~e^F>b/CxDZ;je-SLVb?2eR}S' );
define( 'NONCE_KEY',        '+iv|Nh%ymAwZ#`8^bw_q:(+R+fy[c*YLH}G sH(NbAt`6HwG!] ,p5##wMgMdUVf' );
define( 'AUTH_SALT',        'KiHkR%.<n_<|];Nc`:,J,1D 5Z6hY/~-%KNYj6fRwwhRTHE]ZIvoU5i=#lW{v^tm' );
define( 'SECURE_AUTH_SALT', '3~R3D)TA;.uJVF6!d?dqmnQdDmz!K;79o^Hl+$:lWz|G k+,mTaeA;{7+M;#J!!_' );
define( 'LOGGED_IN_SALT',   ' 3Quzquf7X.p0skAgLObUQ_/?cP1F *XLv$_LIqG~{S/1jQ<>7Ld$h1H`vt&VfCI' );
define( 'NONCE_SALT',       '^+&37 m.558Osg9C,+v~nbe{%#O7@Ol,)QR3:1,J</| )=d:Lx:h,R!RZ(#8){l3' );

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
