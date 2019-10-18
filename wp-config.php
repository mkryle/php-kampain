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
define( 'DB_NAME', 'kampanj' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '2W7q~Uc<,L|&_F[$=c$}9}=uSWsZ4C35c|26fu1h=SalZwRyv6gQ-m+vjs>w8;[ ' );
define( 'SECURE_AUTH_KEY',  '0<%h]TSZ^ qH?0O7N7wg_6,bnx&LJMM|T]s~&wD,E16wENo3iPC5Pcpl&_I}u*Up' );
define( 'LOGGED_IN_KEY',    'uF^lppHa4wl?t}^=8|W8B=?o[2yNES-S7zM$IkE:m+WyQ+}2QPD5$f3@Z}VQRnDJ' );
define( 'NONCE_KEY',        '+80~i13C-$Ka~QlPXGHNLhJPB@8`FKF(}[XCm{jP!v(SuajFv8%O>1@Ri3ofgE=&' );
define( 'AUTH_SALT',        '5::(D|18wl7,obcDe#XF;WCR H&)lLoki8?mjiB`HKA#,{C?;=y#nO>5pU?~,cl,' );
define( 'SECURE_AUTH_SALT', 'J%LRzORXF7o_`h > !zcw`;a+P|nO3}HNvcsK0wX]!Ckc`ocAv@^2<u@>G_y$)?%' );
define( 'LOGGED_IN_SALT',   'rL@a__ka</AbT^qVt(.{}`TBal=n&^kvs;s.-SO#koMWymNgk:ODU<u+o5P|H?g7' );
define( 'NONCE_SALT',       'NapK{>w[-3*8M|ACyMQ5Qo4wxF(c?R+TYxZI5`:8}3f.o {7)6Z-|NT-+XjV)[C9' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
