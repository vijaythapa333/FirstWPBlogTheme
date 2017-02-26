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
define('DB_NAME', 'wpblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '/{&rY9%>e)9I/VRO`+x7mGWZ3VN;?ZU3/?!ChTb;KRrm>T|5VQ^WM:mCB`fh+8~:');
define('SECURE_AUTH_KEY',  '$>gT4vC+C~$|SK`vv@M*W=1]DQN<`<M!E&U<q7(5TXq(YN9s*LjvEB1P$8?y#J~/');
define('LOGGED_IN_KEY',    '2e(#F#F)=~E(?/mg+F9vU4PaWTp-I(M^ F/%e(CTH3[wm5*#}qR#A?>U&t4}?g=h');
define('NONCE_KEY',        '.J-nWoDnoQSI7{.n-8)~E1$xST*S<a|R$s:Y3B>]!v+z|R]Pj;1B?8?CIhEAm@O_');
define('AUTH_SALT',        'Mh]fQ()_8V|K$Pl{y]yi|sm3GO/7)V+#kI5+squ60D!q8h!tw9OHtj[? SV}Px9F');
define('SECURE_AUTH_SALT', '5TPP|d>3BtyXIH)vU/VgOQ%eKoBF@}HiL,p>?e%:d_ _C$&Hu7,OX}(qCd48%<fG');
define('LOGGED_IN_SALT',   'Y5p+va^MGA9S[Dq(yKP,c+A&VWT<zXU> lM/lojhL^E|^h?E#W8!wU~{|;L ?FI}');
define('NONCE_SALT',       'J9tfdmc/X9`#CdbCPmY{<L7=9Kl59OQ9OeSxH6)z6r-8wFS19O--KGg@3m&NKTul');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_blog';

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
