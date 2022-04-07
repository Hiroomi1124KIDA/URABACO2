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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9gzW40qrVQhc/aGZQ0Mp8kpqeAQnMzO4JND6eKByW+f04mAA3eb4mdIAO6ytwLK4uFBOMHXHo1azaRpnMAIpPA==');
define('SECURE_AUTH_KEY',  'k/UlEMtG7FDFZDRKLo2z3ppDWgHiDqGKbeAuJ3RP8tpfvWh1u6/eM9JKGgvOC+W592DgSHt2pG67uwryvwhzoA==');
define('LOGGED_IN_KEY',    'M/U8mZ9Uo2dENb3G3Wc0rNJV5UW5GyvCMb64rQjj3gVThB5+nHzivnHiwrBvxkafi3of5XQY5YawNsKo8RBFGQ==');
define('NONCE_KEY',        'z1ieeKFgxqTJtQni0aqtPQYEuVL0dW2K7S6lyeNQeZghqJHC+weXPNplCPNK3Qvr51Ff+wtK5KbDDNfQWsPI9g==');
define('AUTH_SALT',        'j9WTMsPvTYGyojcKC+dtXedEep++n/DPx0ZMc0ZWcaUYdR7bgvDMjae42AowOkih8/oWTdqmYb5FBFzee3HMyQ==');
define('SECURE_AUTH_SALT', '7iwu7a/XZJ9di15yM8zLIW1y6+lkbflwecLau98XZAJS+fvXWLIOfQV/XB0T+jcQ6d0Pf6WyPgaEiQwUBo4d5w==');
define('LOGGED_IN_SALT',   'cka7QhiorlW5hKmlBQbiIOtYqCyxDgw7Kje7XXg5sJIr2ZK4Ycic5CIUegh3YXfLlCwPpWVcauruzWpwfA9o2A==');
define('NONCE_SALT',       '3Gt8CO21ESTr3p/S/CjvckbVJeGT9Tyl7S3TtB3+y1gUmuKoJuXa98ejFf5CKRi2zAUgknAc5JK0FOwCuvGB1A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
