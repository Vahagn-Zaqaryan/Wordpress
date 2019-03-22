<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
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
define('DB_PASSWORD', 'usbw');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'ETH9E@@FA+-f{3QRiW(vh_YWMFcy?,&dH7_Z<o, l<.epg_E#.J>#ERyl=q9hw>:');
define('SECURE_AUTH_KEY',  'Sb~6e4czi3OhM#}yQ.D-4 @gdR:hJofT!!&Oly|@x#NkQ:>^_n?eMC_bV|!(wDm6');
define('LOGGED_IN_KEY',    ' m-|IB|tI|}f;3BSQOXNp/}YpLx.,g2,9>_B7Q1)HQ*kif`p>lnwy^9XDuT;^35]');
define('NONCE_KEY',        '6h[!p !vO$m:Qn9-{x#B3] AX$CNv02zvt(S-b:QY?IF0@5y%!cmJFc`%kjwMI7E');
define('AUTH_SALT',        'K86y- 2|,uzm[Hcl6A,^,.*##o;+h&S,:k)jLxJ,UP,;vQ9TQ*]-aoiJvA{#|4aM');
define('SECURE_AUTH_SALT', 'A+CgjX~0,K82_yRl|r0zKl-vwKuK%Yp(|v++h(#E `>HTtJ>/HY?P>Ia]1V&z,ZD');
define('LOGGED_IN_SALT',   'yg5^ssg2H>sd|>0P2Ed>AwPywe{:E]pKA#eM<uZX(yX%O((I4#6#:MO$>diZ1Xtg');
define('NONCE_SALT',       'STbDj]34KiZq3Rzr-Gz+Qg9%t-Vc?a5U,-+HMs_W:GjNf-d%)P>)vxY|(d-(p=ZU');

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
