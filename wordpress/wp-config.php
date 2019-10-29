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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'njhess' );

/** MySQL database username */
define( 'DB_USER', 'njhess' );

/** MySQL database password */
define( 'DB_PASSWORD', '67porter' );

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
define( 'AUTH_KEY',         'm*3*|p 2zwKo2f<Cyl~Rxaq?HGpu =;D2F8fh/rXgZf$%!NV qLPZb-Xf}vYak2M' );
define( 'SECURE_AUTH_KEY',  'Qo}VAQ8p9!~{FF>)1F#PIn.:j$}}xX.HR{,q$GTnuQ_wihsN. h$o&7ZSwXYf5co' );
define( 'LOGGED_IN_KEY',    's:S$-4<axf>],G;f,!Np5$tdOvhy*^Y0Pg9@bLmEQ8-J{m6J%zv{SXOrx83tve{m' );
define( 'NONCE_KEY',        '-[_^|@:EPBvrtNRR$]~ZIf;SYTD+q- U &&)p=5d-93Z*]&CgAZgH!22{nn>fl3G' );
define( 'AUTH_SALT',        'Hhml?DJ:;996iKLnU@RgrCVEZva4o#Z{&>DOaMODLt<65qVQ9I_>6^1{V*C-6|B/' );
define( 'SECURE_AUTH_SALT', '.Fe(`; T9{6@8,1]gXx2bDd<XV*ob$ 20ebP_7Cy]6>}{##!^yi,OtvUmI40_Xdp' );
define( 'LOGGED_IN_SALT',   '/<tA5j1u9qK=eRc)1-38:6<=GfN5hZOVe*w#EOThzH{< I*oo{Y.Y)$-Z^-bGYBn' );
define( 'NONCE_SALT',       'NA_,j~B:hSJ8IoHvcVe5LlB@+xA{ k|0@n[89Yomtuo%zstG<;52!$4o 2J*P-Ol' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
