<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';8n,[BIih]FOFGi3JJqj&=zb=sC}8kB)N&[gR(7=[F6];b* Rqugh;qTw,Z<)Ut4');
define('SECURE_AUTH_KEY',  '#rf3Rl/|:(OWDm0.+cPX)yKsL%Oa{eLeh&U4D%.8d&(b*%uF)X<.`*-+XRfF,FwS');
define('LOGGED_IN_KEY',    'yOCR> UsZgF}!$G&%@T$Zry(9~!(sPg7+pX0J$?XCU*2(a57ZP!qVIu5Q$>yotc,');
define('NONCE_KEY',        'k-x8mKGmiB>A)eY.76KJk<*4I|AWTj9ubf=h7Y{4Vv)*#bYeLt2P<pA8%ke/(Kq>');
define('AUTH_SALT',        '=IM|mqt(T&iTBam?&E/`&.&wnC;Q`*S?U.bPIFjSPR$t?sn?rF2[zA7eIl{&e?^<');
define('SECURE_AUTH_SALT', 'S>9UNRuBq(cInZ;${_k}k]1I1|,-q@% d;J[w%ku*5CksVKJ<&`1k6uP<{Hj9fV^');
define('LOGGED_IN_SALT',   '1%W~7EPy7+ULd3W<p;I^)sao!S^L>|dV8Rh<04kzq6,m`dhb08TPi@(g]nT4wWa*');
define('NONCE_SALT',       'j+6|1)2pgn&*T(a+$Z|iv^hs8@AC]EMu4&YNI5 xNmFDX(Oemx04&JL.5)7`,c|z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
