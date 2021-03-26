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
define( 'DB_NAME', 'onlinestore' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '.9:+VD5lglJ7x|qSve4~)k>Rz^%!C~wvGI,vaW d7}@]C$Jji#=u#WSahF@Nt(Ik' );
define( 'SECURE_AUTH_KEY',  '[QBpDu2^ism0=UwW3N iRP3<IO}*!*X]/*/%k!9E2=7|yeq$}dYJ@p/Pud*[TxW$' );
define( 'LOGGED_IN_KEY',    '|]Q=LPBJ(>8YzMAoq]1lAwv[V/CKiMNH+&14ZHEeDt]}l3BD*u<$rcMol(b91/vB' );
define( 'NONCE_KEY',        'aB-ysSSnvpakvp=Nir<raqU#k[GEpA@Mx>ZOyw:1</be@tAFLspr,t@N_A^@9.D<' );
define( 'AUTH_SALT',        'K 7U9!)b&1}>ShVgUZ#6QKJb>#mgEr&s8X}i}2w={mV/!:85X_/s^hnAC;a9:).d' );
define( 'SECURE_AUTH_SALT', 'Zux|o)mx->VOJ#@b-J(YQDf3MjR#b~i mx*$%x(tJICaf){u~%!}:kcnmz:Azis}' );
define( 'LOGGED_IN_SALT',   'B2lZsyk%eCBsn*315d~aG.NcyTd~#:Y-aTr0w6z}Y_?P7oPM6u~ne{${a GK%HN}' );
define( 'NONCE_SALT',       '{!LbsE{S4W}2;g?At4rt_XfV(j89R#-N;kDdwcb=26~c)&(#q6/1rz#>!,pCBO}/' );

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
