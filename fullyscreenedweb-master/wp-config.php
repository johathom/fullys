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
define('DB_NAME', 'Wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'wxjW(+y7:DI$Q6*{`saAwwV2Y8[L|RVXm{+Bb5HG8@dr;+Z F<aw7R2x!+>4ms`O');
define('SECURE_AUTH_KEY',  '=t}2nfF8X;%sUkW`voWT.Qk{=j}`%gXFhe@-R[DoZl.:W:$]M$hHr;x7Vup`:Gk0');
define('LOGGED_IN_KEY',    'e&yHqt}qRmQxIGD=QLh{)!^|;d|&5+Hre43w!>imk#~~;Q@;K~|9>c6:O^UeSDE|');
define('NONCE_KEY',        '#NFGjQrO[7%ff&RL:Ky*WY]QJ!j6AlZ)-_ C`s^Dsq;Ap&KMFSqfJK?,M4[hbEjt');
define('AUTH_SALT',        '}SgT7iL#^>U6!b`Rnms.#Nq,^R^MpDle-gGh,BXY+N*$]E^}P*`e`m5Vj2I-HUe9');
define('SECURE_AUTH_SALT', '1}Lb#rfoUst?D2ZlZ^A1XYL}19k-7ht`qNAXLz5BS{/f<m[A.!/4rwWBV}I/kt]F');
define('LOGGED_IN_SALT',   'h4sqe`KURrIL=x?7qFU6/5M5Gg;^YO+5bfOI~pa?(P_2zNx%ryzYtjEoPm|V6u{M');
define('NONCE_SALT',       'FTG_-=A2:oQ<fDTXogn|G!*w>0Rk:?TM?Y&(}yY9JbMi(,`%=%$L-|f*;BGM|vMV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
