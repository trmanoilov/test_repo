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
define('DB_NAME', 'revisr');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '^nt8d%(12BMFI`=  O89B5E@/i7WERGim j @!q~scMAv nu3EGRL/InTX&.HTRw');
define('SECURE_AUTH_KEY',  '5j< s/(agsp[@[pp/;5WFH;</axB8Rdm hiC%93tCYy_f`DQQ7sdjC)/m{/8oD1.');
define('LOGGED_IN_KEY',    '!wdLqy4h$tm_{)R|OCeYmK72jyC!e;E0=~.DWAk_3LIQ*Fdkkptd[W 4U/>_scxy');
define('NONCE_KEY',        's{6.MHSkQb&83P1TXj)!6%5R5H}5~i{rvs>S },S.]5dW3% RA0s{P;]21{:>$8b');
define('AUTH_SALT',        '5[S>z3bglM`?h9zF(SB:gfoKHw[*L <>2BM(bEbrfsBW61G@q4|(|}M1Cl<P%H@6');
define('SECURE_AUTH_SALT', '%WJ|kNb]h]:{xT>#c@Rm6a[m~#@kE$pg |xCnOmSBR73Bk_*SimwYY?$`oi<vUke');
define('LOGGED_IN_SALT',   'C(`9{l7`?{3!9Fe:2(K)/iW;>|~R:EvitRxcLazLV3orh1Y,>vem3KofQ}sL6/-w');
define('NONCE_SALT',       'n+nDPo8,R5!XhM!(2D62k@:pHV?+XCGDaO)[PfDf1ZUil~t^>q647UjnGK[di{4p');

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

