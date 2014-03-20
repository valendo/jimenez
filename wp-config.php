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
define('DB_NAME', 'jimenez');

/** MySQL database username */
define('DB_USER', 'jimenez');

/** MySQL database password */
define('DB_PASSWORD', 'buzz3k');

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
define('AUTH_KEY',         ':B)4Vz=L/}}d8`+IFzKS^JoST* iEeF(D[+RkL+*V=oD,5d=S)eurvS/c+KgTj)7');
define('SECURE_AUTH_KEY',  '- D>:`]-wu|*+)b+_sW0e%!9TK~V$+3bRGAbAA[;uU~+Xc7#X$+@+4;gKul!,Ufr');
define('LOGGED_IN_KEY',    '8KL?A[CXKRa2vFp6[2vEpQqLuz<05w+/W9#k,(u[9Kh#dT *_p0TCOH:}t;#Hs+m');
define('NONCE_KEY',        '3^^qI{E1yOe+FsBoe4|:u|c?y`.c($Ko%kI3hbO^k+JoWaF9P8}6o)3$GS`VNr.I');
define('AUTH_SALT',        'QG<9aVa1<&6,-]gNROv-CYT39#LWe#(+0s7H5KG<Qt,L~Z.b%zQi*=&W!9zw4NN-');
define('SECURE_AUTH_SALT', 'Q`F},-nk9h[ni*^{<Nr!>k`Np&-BFd+vg/]|$,Ec4gjZO)wqJAyfn/q|g6BtA kS');
define('LOGGED_IN_SALT',   'R4ae+3d=hZo+lP<Ri|_7+29?{fXyydBPwJ6bm.b7]}<y6<1EImR:D)hyw<aGc9~7');
define('NONCE_SALT',       '8+{yLw<SUNG>[K6D18hfwe1BX~M(P0q_lIic8rx3|$pzMHPIYd(7A&A/khSew[:$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
