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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ezyro_35542178_447' );

/** Database username */
define( 'DB_USER', '35542178_2' );

/** Database password */
define( 'DB_PASSWORD', '(-ObpIS257' );

/** Database hostname */
define( 'DB_HOST', 'sql204.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'l6xq13xgjr8tlshk9osuge8fejgoxxuqivxtp6syepgr6rfinszbllatwop0b3xl' );
define( 'SECURE_AUTH_KEY',  'nvjklpv40fogqhasrnny0junpzvaygt9669q6pynviqp6kvmeg1ry85bepxhcfgn' );
define( 'LOGGED_IN_KEY',    'dbiyqk0l0dysli3xhsbhiketz1zq6bronn0lqadt1cm7i9jehnxvz6n71nu6hqfi' );
define( 'NONCE_KEY',        'swydon00494qjvldzrzzehlmitcriqshlhpryfxshzf0mwk9fyl04hfm3cgmqdlg' );
define( 'AUTH_SALT',        '644wllc29rofov3uu1i1immqnwdo09cecswzm9ktvzsbjq2qfmgqhwccg1y5o26m' );
define( 'SECURE_AUTH_SALT', 'jgfzfqiudcryxilqg3nvwod0a2ejoupt6i4bkc9boojb0wetz0sqdvvsk5rvctpt' );
define( 'LOGGED_IN_SALT',   'yehx790vfvqy6mb043mpudz5wlvqcadxvgsi5ixau0qhhijcf59je1z4p3rwqklp' );
define( 'NONCE_SALT',       'hfyouewjlp4xejogg9q6ab77jmezc0zfljl54gn5t33ekemcmepg7pgzn8t1rnoz' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpqj_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
