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
define( 'DB_NAME', 'exela_db' );

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
define( 'AUTH_KEY',         'E(*zm>L?m=(.?^_Ry#acxldPZ>49iT&YGy6YI5Ly|^7yAN:d&7Nihg<<qT%jxCqW' );
define( 'SECURE_AUTH_KEY',  'gb#{,r|.dIr)u^YTLM6L?.P^IZ?NFmdQ7binyN+q25W[1oN(N gePM<^W#DMu.}F' );
define( 'LOGGED_IN_KEY',    ':0`j!zFXld8h5)/,>6B=C/&Ivap]&aF1$C]r]4^r8EM*3e:!A_5a7$NOet+>HW$s' );
define( 'NONCE_KEY',        ':bjZGk(J~P8&u[9b~Es9sfY6![7OK1VDsw=-,-^.w~J_nQQ{sjEXC.g<USp!#-Dk' );
define( 'AUTH_SALT',        'U3,wZZVm?Z /~~9f8hy6U*~[)Zitln[lHy|--(q6l9}t0? [Nifu=Y)9w[^P$]0W' );
define( 'SECURE_AUTH_SALT', 'mx w*sa$TG7n%3XMpfwj_OE4}.;,QJ Zp3z?[7EE}]}3x7oOGK?!=Ta#M_m7-f/b' );
define( 'LOGGED_IN_SALT',   '=TB/N.3Wjbg()CRv&VR4:3=:m}fyfoT+FdmRN[wtY1hA^7KY*(~d}5/OtHt K3_t' );
define( 'NONCE_SALT',       '9`9i*R_ajw5<:+K`{C{f|.CT!/((J42swj55Sb5 [f6@Gw&g97j>ylL.>^_ltU(7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ex_';

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
