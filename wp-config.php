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
define('DB_NAME', 'ssalois_wordpress_0813');

/** MySQL database username */
define('DB_USER', 'scotty_wp_0813');

/** MySQL database password */
define('DB_PASSWORD', 'wNRLVjEUKb5epvVT');

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
define('AUTH_KEY',         'N66NQh+PB<~3_-ve(Yke*&E>5]}YI<(dQtM+!ud5nCN_/f~>jqS|V|-7#;^Lo+*8');
define('SECURE_AUTH_KEY',  '/1,/{h*GD4P1;CEbJ-$[Dy }umB<x^9:FtR|8^V2wE0F>RzZY)DGmq(4vT/^De)|');
define('LOGGED_IN_KEY',    ':*YtDJh@|j]vSy2`|&?RR./LJiPqE^|jJ7i|zI=&6wDM*N[&^bvU-z`^*,`-Se1|');
define('NONCE_KEY',        'QIkItA]g]rQ 2,rcT;uew~}b#n#l(ns[=w--L[M}dB{$kOuZ+p: +aUhX!Uq}oK%');
define('AUTH_SALT',        '}<#4r{zXq} t?Nj*@Oe[dL?8n8xt%5Mx,?2rH.?jru]ufgq#+&`sj1#KeiJFbqzP');
define('SECURE_AUTH_SALT', 'gcVdCG,F0uMQ>v&j]p&gdVDnkK-{%~bOS?n7Bk?Q;)i@^f$^`MpY5;>}]GvX|f:Q');
define('LOGGED_IN_SALT',   'VuRM!>RO.$x0K*fu@q1I&%n_yPAQ=+l+KKc0swtGi|!.4G4[yGGEd!4{R|RwI3x;');
define('NONCE_SALT',       '>_S [=J,{y8PG}1vN,/5s +65WHf|(<X@= e2&PJ&VAEngdl!eGIH:j|E$7)cP s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ss_';

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
