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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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


define('AUTH_KEY',         'oIwE0EUdM0YAgmhveFsVftbpY7uqYpsIfdwFBjgxk8oTigni42kQfxs5XwasPvMmlOpchD/yWowDZUOX4EZlUA==');
define('SECURE_AUTH_KEY',  'hTI2UKzbL1JmQS3EhNKmZAu1hJ7mzjxVo0etnqqrA7BGSMGl5rikkXYIvgnAukf/RTS82rcGF7gyllRyvm5Ckw==');
define('LOGGED_IN_KEY',    'SMMQupfai3+6/WTm40b3YjMFRWVrv7k3OkH3yaZLqtFS2kuC2kx458hM4nXQP3vLf2JZ/SOMvzfdWxry4K0n4w==');
define('NONCE_KEY',        'jl3AR6XbzjbS/N646TQf4ojLSd01duB5C5lapTbKrxkeOdNXIOuIJuyfB7LXjkfDx27l2ux3/IuLdXDwXvJYxA==');
define('AUTH_SALT',        'bLO7oUviWO5GGUI86oosAJi6IZF2SelhgST2iUUY4QB2K3KAOoQVypmmAggTm0LdHiAVs/V33qMkjTiHKjNWPQ==');
define('SECURE_AUTH_SALT', 'kaFG6Zz5U9XJxSt440RoaaZKghbfwBF8i9ch7+ojYS7TDg2vTx873NCFXRlhGiPHcpk3mpDMC6BqL1h47gooUQ==');
define('LOGGED_IN_SALT',   '+Rtn6RE8zz+GraGnvcnpwMuZhD7ABMwgk/R+sXwjOpvHjjLBB4b8Oy4qcTStMY9lTtd2ogAQvvHuuv5MKHaD1w==');
define('NONCE_SALT',       'q6sMQkI10Qb726+UtSs+s/y6gPiXSwPVVYw/WbZcg8eSWq1sQ29jQexlXWeCKjy2KIiuA7KK6IWcsAb3PM3P7g==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
