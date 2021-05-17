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
define( 'DB_NAME', 'themes' );

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
define( 'AUTH_KEY',         '^|6^+#BY|2C-xllXf,fTFu^Ky;&=CWWM[S%&C1!oVV.u_*3l}]:VD}:*32r@W^-O' );
define( 'SECURE_AUTH_KEY',  ')@#:xj&vD6D4s*MjREe}`WvBSR9&uAEdF:{JIxjE3}zU>*R1Aab$hbwp|=0v.3(r' );
define( 'LOGGED_IN_KEY',    '9PcH9@2v_}p:-h*55:G/]lP)bn1t%d;%i@E!b2y$a ) >$FH$aTd(,EZo{!6x1JO' );
define( 'NONCE_KEY',        'gI#U-^Bf|kc>@.RnY[s`>+z1#] `}Fdyi+jiK&@^!?<=Vq|Wo|!]Yl?!*hQLyt{r' );
define( 'AUTH_SALT',        '~.8Syub5k+pIOFyy4 8d;iWU~3VY6CS,E4B^o)WeLo9g@)EkGQxPzpu:P*3ggh`9' );
define( 'SECURE_AUTH_SALT', 'SH(;@#[imc[{iIl^5r)#GE{I*KAm;D5of*qh_I=t8fU,?[_e8jX,E]6SYH*x%5Q{' );
define( 'LOGGED_IN_SALT',   'b}t0YFmUCOX3<<*0vAHWYCZ+==$D$A~a6SB~^hY.!L- U*fn4pw?Y$bm-tl1jrvl' );
define( 'NONCE_SALT',       'NU9ng9y/&wf~/K*AK)eoj%HIDLXY})CHT3;Xjs ygW118Ton;8y^{[/`Hq271yBh' );

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
