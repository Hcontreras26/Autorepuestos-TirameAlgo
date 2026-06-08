<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'reportelatino_w712' );
/** MySQL database username */
define( 'DB_USER', 'reportelatino_w712' );
/** MySQL database password */
define( 'DB_PASSWORD', '93Up6]S0e.' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('DISABLE_WP_CRON', true);
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ao4bhiyzrnkvehpobzu3xqpg8ecwl1y5s5kyyssxtbjuyij5g87eho7nsllymsw1' );
define( 'SECURE_AUTH_KEY',  'beqsfhwsf4y6diwmldjrogezszkq5pasivesfyyud34mdwts6m5331hhtlnm9un1' );
define( 'LOGGED_IN_KEY',    'ifoxpsb9svz4jrmhoc9923payccbrtmb28l8bo9jqtn5xgvydafumnto0x83smma' );
define( 'NONCE_KEY',        'gl52g7zvrii6dtmyfbokwmcr0p2uh5kgwz2x3gmyk4ym9ispkqqxujdxoz0ihko6' );
define( 'AUTH_SALT',        'gf5tutdxrgdicpv0wcje3mdhgpyuwi0mqnh21mfwxkwokpabj7pypsdaiki382cj' );
define( 'SECURE_AUTH_SALT', 'mon665kpfaexemlmg293qcg3s3zicdrgtxwvpwmbn6hpnyl34zoibojpuk0zr1rc' );
define( 'LOGGED_IN_SALT',   'svk5uxzqrdo4jpldrtzccupydeqo8a8jdtzokuvcvexdtjeb4a0ogru3nbhloysn' );
define( 'NONCE_SALT',       '0h5uzwqlco0epq7xwvmpzvscgjbudw8tfa4f6kj3crgalgprlbhpjhvavpwaezw4' );
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptj_';
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
define( 'WP_DEBUG', false );
define( 'CF_IMAGES_ACCOUNT_ID', '46c32c92860df48e337927647a8b3ca0' );
define( 'CF_IMAGES_KEY_TOKEN', '4RrdVWywG42e3Mdhlu0F7yjOkNyzSP4ubs2FjUm9' );
define( 'DISALLOW_FILE_EDIT', true );
define( 'CONCATENATE_SCRIPTS', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';