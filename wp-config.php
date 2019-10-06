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
// define('DB_NAME', 'epiz_24523210_seminars');

/** MySQL database username */
// define('DB_USER', 'epiz_24523210');

/** MySQL database password */
// define('DB_PASSWORD', '6sVr80iYfJXXhM');

/** MySQL hostname */
// define('DB_HOST', 'sql306.epizy.com');

/** Database Charset to use in creating database tables. */
// define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
// define('DB_COLLATE', '');

/**WORDPRESS ADMIN */

define('DB_NAME', 'Seminarai');

/** MySQL database username */
define('DB_USER', 'Seminarai');

/** MySQL database password */
define('DB_PASSWORD', 'gBiW3U3yBjsLG3rY');

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
define('AUTH_KEY',         'e~1j`Y@wAMl!1nm6Zb-C6ZTtmS!D)iO9*rR&:Z:l$7j:}(0AC[eE2H^V#7Z:ekIX');
define('SECURE_AUTH_KEY',  '1rtiaCdVQtx)l$|5oH (J78~a_|9g*<Rk0LxXUb4;JhX3IR5N<*U 8i/([1VzcA>');
define('LOGGED_IN_KEY',    'Y#Kw?T@IoVhj0icnEf`g5JjdfYI*P9a;}gkI`P.1dOS1]<Atk?:KlV:_X:sT.PXl');
define('NONCE_KEY',        'M^{X5NuJ8X/0Bw2ft;8H>L+YE}[HN+V~FY@5Baix<%0gS;K$Kd20W9fPDK#Ws:}`');
define('AUTH_SALT',        'h#8?f8r@REP;j#SbM.^1c]?j*C{8R)7&7rs&N~WNdx2.[0P<[B1QvJeI#Vm,e03p');
define('SECURE_AUTH_SALT', 'Mz+fi$<Ltjj+]HW9~6ymu=dfd1sz7FdU)xP_;~Gdb;NBI%nS-=!X49TzF2DAhmgD');
define('LOGGED_IN_SALT',   '8~*4Cr$+;y*mOT-YyMO.bYq6mrb90*o!)&,D>xO!`o{rI*[Ln8.hho#t&7=uiwV$');
define('NONCE_SALT',       'Pe,o%.hx! 8Lg&Ad5(ebCEZrJ:p_5[9Z[ !SL%[<$AWI</:Lp+5=1.Ovzn[)V.rI');

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
