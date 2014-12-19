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
define('DB_NAME', 'my_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'QuangTu');

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
define('AUTH_KEY',         '(f&p!I+`|!LJ.=)}AGX+2Ut*Kk0rN ASjYp?uJf8+;}H|7B07PLVE~pIre(|BgA1');
define('SECURE_AUTH_KEY',  'WF_FHb5#n3^AC+[o!P9>BWeVdI%B?Oa;Q~SjRrM;[]T!-T.W27qMi:OrXxa&u;A>');
define('LOGGED_IN_KEY',    'IS:}7m#+xz}c6vBd:ns>hQ,~Cw[]Q>06~L{ZyRq2!d*uIGfZ_w8tssy;>Wpny`yL');
define('NONCE_KEY',        'k~fB^FK-7AK-*,XTHf*W6lUu1<jnyMNj=h2wG*E%Vp#h;rJ.W0bCQ}G1!2}v9)]`');
define('AUTH_SALT',        'J*]@1NfK{bO=RdJ:X ?9($H- blp-;rQrDrA^|(u/6&P[!a#g@F~4hBR#2aVH&:-');
define('SECURE_AUTH_SALT', 'Z3+XCF>mTY[Ad|cHA#9~W`E-aR>V*d.WIs&Rt(QHw;Dh2v:|O!)X#a4 IohDv^T/');
define('LOGGED_IN_SALT',   'A9d]Us*mf^@>8vEd=4vO4`:j52{xH]T&oxr=|q=[_(PvCOF_Ium86d_`;DV,UO?B');
define('NONCE_SALT',       'lqd9^r`3:V_lKO1sq5lg~nj,1QeHGF)>v&x3^aXkhW-;v:GHe<Q~KOuDc>c?9x :');

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
