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
define( 'DB_NAME', 'saubol-wordpress' );

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
define( 'AUTH_KEY',         '0O.6)WS)=? gvc}3{O*]d:|z&<HOBZ@H!R,sx/n)*OPPy%fL707N8G9aIMycs{f3' );
define( 'SECURE_AUTH_KEY',  '-pfg/felcA~63T;m=kM@:Mgj3$FkMG!+o#=|~;1E`^(Qg6.2CRbot<=J$bx7!uyf' );
define( 'LOGGED_IN_KEY',    'H.sHdIP(e5+}I(ku}[-[l2.b/7tLO+-Uv;l]]DUX4q:rE;dJ[YGW6XK6_%O4J-] ' );
define( 'NONCE_KEY',        '=zaH9=n,tgwv?^G*xPVmz+m_%Jz]b^yn,4EY9_;wk}:-~j{R]_1]K1K]|R!JmAIr' );
define( 'AUTH_SALT',        '<Y:Z&TNWua6{}0~spNx9(0JwK-q>[f$]0 zMPgYy8c3;b^S^_6.}?%p[,6T=mct[' );
define( 'SECURE_AUTH_SALT', 'dP_.lsFlFnSwEuNHK**.ZJy7M?f:HT0UgLJ8^G}Z%:Sc]=_+De?K^]`A)YXa](l`' );
define( 'LOGGED_IN_SALT',   'B_{=y<1vBou]IDF|PmH<tby!gDgK2C}iL5t42^Zqx?TB]nRPMq-Ag>HR~j W@+NL' );
define( 'NONCE_SALT',       'Dvu1?~$Yy;ui%)*$7h]5 BNWzt)~Jofph)hMqzzP``f<#H`CVT_Jw4lEz[sGvk_X' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'saubol_wp_';

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
