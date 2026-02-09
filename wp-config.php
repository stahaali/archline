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
define( 'DB_NAME', 'archline' );

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
define( 'AUTH_KEY',         'DSQOl~%&VN0_$<`d6}o%HrYvsYIUJ;MRhZSi> F_l6nM~#wXTS ]qG8Hlm@,DU`a' );
define( 'SECURE_AUTH_KEY',  '`K&<$y{GzSO9,7ANIw~f$/c>nMqR{tbTx<Vk{s7o] MJZ(H-SQ(AkaJD@V*Q%vd-' );
define( 'LOGGED_IN_KEY',    '/5?F8B?@45?kjOsjxI]7KCIz]:51B:*3F7lu,pL|iO_eA@&7FyRTo(:2?z|lQ__g' );
define( 'NONCE_KEY',        'x#{(:1Uky1DtCW C+fa!r]zF5k@Y51SjNeU eN{8QfN<]Dw)lK8DRZa[9G>xwl=b' );
define( 'AUTH_SALT',        'ePR:M3],/Lxc(cfDW%b9zpTBtMFMo1;qRM4-#QumM=9^ZTy1(z4,?E2gGO1~6ywx' );
define( 'SECURE_AUTH_SALT', 't|PbaZSAN4~HGImaP^yZp6YZ3HM?(/A0}:EY%iG#;Y&bBC ::z)Fk%ZYnNI XVfL' );
define( 'LOGGED_IN_SALT',   ':#d$&JlX]s72G^-]q:!n/{eZ86paN981~je}k:0Xk[*hw{n{@:rJ%|wqh`w>u/#k' );
define( 'NONCE_SALT',       '{`71j6u<C<Elas&Oq&5&#t0j,|I2!b@d7lc3sF&q:Emi(*Ix6)lU@^_^/9?e09.2' );

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
