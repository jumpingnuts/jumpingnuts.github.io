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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'jumpingnuts');

/** MySQL database password */
define('DB_PASSWORD', '4nuts@Ajou');

/** MySQL hostname */
define('DB_HOST', 'master-db.jumpingnuts.com');

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
define('AUTH_KEY',         'x.(iPZl]gg%W4F)%zNoj[N(-t%XrfmCg&|o2Qo=m(,6oX|2{dG*y7^J=ii!6_EN`');
define('SECURE_AUTH_KEY',  '9:jTTx%a8S6y|SuFO*S!yYJL<HH2crG?XQBcYkWHQHzx*47Q)|WFCt=||#9-!3l&');
define('LOGGED_IN_KEY',    'VtCnA~.<m#*@b6R->AD]p#fA>98T<v5>g/;[! =b!:&Z~(f*|o9X]9*)Plj6[H 0');
define('NONCE_KEY',        'R!J>B5nj#k>cBq`C3cVnX$J}Bn6c=,!.%Ff|=FmRklE=LZIt!%v{|NKK9(oCsbO)');
define('AUTH_SALT',        'P8_#djMQsolBJvI]/Pn*5liO|*`WFc rt(D})+57y$QI(g1DU8oVa36-=G@)7db]');
define('SECURE_AUTH_SALT', ';|M9?5V]v-!%9@G;W}13J=`&0&XqiWEi(.S,-ZG][jmy.F(V,q1*1NO+5O3~ni4D');
define('LOGGED_IN_SALT',   'eICWp_BRYe=KDerE]1f[{t=X?TA$-dmyLilL&Y7,N|nl|mr8ClONujs3BU@Og-z-');
define('NONCE_SALT',       '+$$&Cek$Y=ykl*-8a/|A5~/*QVkJ&<]VTA$= c<|V*c}:h;B[w0!_s+H|4VJnX6D');

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

