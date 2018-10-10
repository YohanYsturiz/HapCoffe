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
define('DB_NAME', 'CoffePage');

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
define('AUTH_KEY',         'l/{KG$IY%L@oL-E?otfA:B^bus=WA`Nd0um+q^s(?<1;4oLi,bz_CPs=wMOn,!l:');
define('SECURE_AUTH_KEY',  '25G4[oi!LEpst[N#PcoDn]ns>0O5I#6;}2{gaC`8|9g<@Tr`q]`!z_|/Hv,S%&|8');
define('LOGGED_IN_KEY',    '^&%<0t!{z%&Y81oGRG8tR*$Z qQDhWJ-_>F<+Yz?LF54Pt],@>Qv.F?pAQ7YE]WK');
define('NONCE_KEY',        'pt5Y}wV;f^{ A258h]Zj7$YvY1na_2]DqJ_BK.6{M4Gap2.cKPTj37rC&>?Qnn%S');
define('AUTH_SALT',        '7)S#@uOM^uNr]&H%= MX`[^eOH~)<.41_qv0,)NeI6,~cp6AELQ$&TCY%D(k!aU9');
define('SECURE_AUTH_SALT', '8svM,ML?9-ejJY9^:4,n5w >!@~3jJQH{#W (=*9UhGBsVq,>-PIJ^Lhx{hT5 Az');
define('LOGGED_IN_SALT',   '|6kGNkDNx.3l2-n2/718s|w+_%idW<l-+nN5$UD@<>rR+bd:OItF`5t|b<1rG#Mo');
define('NONCE_SALT',       'za!)3FFCPd{s6%J$]^du&A5k?wW1-|x@#?!71:+$Bq]}IJ#1HrU.>QC[u86LRc)o');


define('WP_MEMORY_LIMIT', '256M');
@ini_set('upload_max_size' , '256M' );

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
