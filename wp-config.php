<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_vhlel');

/** Database username */
define('DB_USER', 'wp_dtknk');

/** Database password */
define('DB_PASSWORD', 'jw9p%_bE7Lr1$fV^');

/** Database hostname */
define('DB_HOST', 'localhost:3306');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'beW~9ea!Y;;B(-xVX/;2k1J+es~01H54@51Pouj5w%*1#5RuE&o#R7t+6I-L%4QO');
define('SECURE_AUTH_KEY', ')7#W_OYTWr*Fk5ph+5V_sHZHJ_GCJ]C!z*~USWM;B&(3t5aQ:TCb+69)0w8X9|B-');
define('LOGGED_IN_KEY', 'C5[2T|djq!(||R+#r7Q/wEc4l5df44l-Q19D1-wR~AbbS5:fK-5H|f/fmFn%-]52');
define('NONCE_KEY', 'Z23Q%5~64Q7~t&5j(xxwFfTz08P_@]|*CD6:OWv*vKyPU/45%[/Y653_293:O-:8');
define('AUTH_SALT', ']goA![ZQXhxQU#ntvjBZM[*&)8V6O7G#7wdXj~3I43rM)+7905y2:65jgg6;561_');
define('SECURE_AUTH_SALT', 'BW&2~ewSB;jr0K_*4-knk586zA_8KY7H4-T*D;MZ6RS*[z6n9)K24_W7]g7K/5o0');
define('LOGGED_IN_SALT', 'H7fQBG~9Twyy_Qmi70fk9QB)L7@g])2pA/laVZ+)@P42!_p(wo6|5D%#oiOdg|%G');
define('NONCE_SALT', '8uZpmM;GPvt]:-[k6/8Bfn9t[!8#8(4@-Q0YN54)900P6)-pnW)CIW1t4qQw1:S:');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'UFzSF65_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_CACHE_KEY_SALT', '15b9a532e1a92fcfc72d2b09d5e06407' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
