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
define('DB_NAME', 'aromavitaewordpress_db');

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
define('AUTH_KEY',         '?[01(0UZ}lU|9C],r]>ru_nI,-)6dkt0ibEq=yUBmlpx7s:C1Q6-n$p_^i}:xT!=');
define('SECURE_AUTH_KEY',  'NhP*iy3QheNO(vu7hSBo}bix(( 53aU@.cfK _7oT ,5c6Ca8dz,`iCG`a$rmbB.');
define('LOGGED_IN_KEY',    '}U:!)SyLY7|rz_NM_xqE/x;%gcgV|NeDYv4k02xH@Y /TZz)Cp{t(uJB{:/Ti9Cd');
define('NONCE_KEY',        '0>_cudaaRy!F*HI%6%>l,;CY@C+~$;qTi8Wwz&Li#da:=>pBrMd/,Woa*{~<a&t}');
define('AUTH_SALT',        'mTi2NJ-O%PtDja8?e[v7lKk_Wfgs<zYs(@f3Wup6AWudCqOTniB#W@Fx5>s8y@/R');
define('SECURE_AUTH_SALT', '}Gr2M-3{7iX1[sDA.z`R%$j5h5U)jkm9xwiLh1Gxgw>]@!|3*5A_akp]eiJomvhs');
define('LOGGED_IN_SALT',   '#1GetY{=lG3>gy> 5|P1`tmfxbf5%c{,%7Y_!$w1TIt*fPs!>t[O|M5SD^Ropxwa');
define('NONCE_SALT',       'Ey9V1YvWJF-Kj9!t[0vnxUR$Yku[2I]0& [?Tx0&CMaVjXX5;Hst`-nch)&a+56%');

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
