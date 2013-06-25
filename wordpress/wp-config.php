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
define('DB_NAME', 'segundo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'Pp+QD<sWNdMH_!Qau&~plU/`=w%cO9r#yC&hxC>pq1dpLN $ i`{C? (,F+S-u-J');
define('SECURE_AUTH_KEY',  'o[-t1Exi9XJ,1o1%t]>w7/<;d@@jwI!~H7wC8}rg(Y9Y?fh:+y3Dr 3V`d|F]SxZ');
define('LOGGED_IN_KEY',    'FwQvnQ<S^~BlGJB:p^5su:fwUU]Z|T){F_o0FyOxWoAOk,FTc^6v>LoL+q`yNS#.');
define('NONCE_KEY',        '-+j=fIG>92oz{rA.SR!OUurH,rjM]N#8@/c!I}Ba<@%!9&6(Sd(P)=uQ0&#cbMG*');
define('AUTH_SALT',        '3JH!(7mp{vE%15[{=b[_k@NT%J= A/.P]a_59*8a>G%g_?eR,_Ym_Iy3eR;+gJds');
define('SECURE_AUTH_SALT', '.5B>ChyB&DDJz{@$1E[pPL9>,P3/w|/XQ.k[v7lI]kjWM+D~+eW>m(|L4oJH.(uk');
define('LOGGED_IN_SALT',   '>rL3r.t<5@;JSh$TLavaW#:1kEYnm:9n? BQ>b7`3UWVkU{#AMW|drFg!-V041$e');
define('NONCE_SALT',       ')`y)Ez9iQdX{_a{+YV-j+$pt%jd@N,TG}wt]EnJr^_CV1-dp@sw#iBDvoS7S|Y)a');

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
