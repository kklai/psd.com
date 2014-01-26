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
define('DB_NAME', 'psd.com');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '@h0:xTVgk~w&9n`HNdZrpI)O1Uja`9BJRO&hc79g7^[0QsB ;viQc5.h3-jI])DM');
define('SECURE_AUTH_KEY',  '7&+oin(d/*<=Fp:|lxi9~hTt|l7?>L*`Zker{0de<qnNnJDa]M|l#7c~-_a5*-u>');
define('LOGGED_IN_KEY',    'w71PoupE*#_(??iaZo06:ziA 5y}fA8@x3+R<fv dGFrm>6_^oCdwqb;Go-+e+.K');
define('NONCE_KEY',        'B.R;&p.-i^}m9SF.POAY>ejpuk6[ULYGpj(eAwda3?1-U:Km{}|PF,,iDlDgC &E');
define('AUTH_SALT',        '7H|[zpp-t:?*0~J }7i+Qm}>s4r;DLP_skAj9MO~#N+|5`Wz5($Z_I(nN+.8nz#j');
define('SECURE_AUTH_SALT', 'hb+*?t~7|Ba1b<Y<R6YQa7HU=fz1gt[71Kn[I,LX=QxG%av_KXZPXc!+jj&2Wb&|');
define('LOGGED_IN_SALT',   '%u!)5HL7+^$m-|jta{vx(-PV-2^?k[Fl2DCw4[+1H6D;8bh4>.nl&)u7JZdMW?iI');
define('NONCE_SALT',       'Fms&^*$->u#hPA@$$x%t- %t]o3%SWhrG6t#~PDj?|qA&1x4%go=)0>t*x3WQ>Z~');

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
