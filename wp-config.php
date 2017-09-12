<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'southerngroundhub');

/** MySQL database username */
define('DB_USER', 'sgroundhub');

/** MySQL database password */
define('DB_PASSWORD', 'SGhubD3v');

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
define('AUTH_KEY',         'Zm4d2aHomjRcpUY3XzwLjORpgGnZY9IL2Q1VF8VOEbP6amLqG6eU7fXX6MkM4hrT');

define('SECURE_AUTH_KEY',  'UvuTmWlPRTiZcbWtWptFQzfvyPVHWhQMuZxXAzdbqSuvBJjaTMxdBFbydNIZgAlW');

define('LOGGED_IN_KEY',    '4F0usIju9shhOIIPRLZtz4DIRsWa7zArEPSmv8NSdp2dYDXZWgNcH0p6WcdDJiGX');

define('NONCE_KEY',        'yekSVzPKYBvXsrgiQ7ugsmVq98tKpZX02FKa0MmQ83goIUbQTNGKt1fg8Yae7ELW');

define('AUTH_SALT',        'YJvyP9MH7bB8M3VtiKDWmMsCs8VxDO6LJTsteBngf5OIXYwbxhlSaBcY8vdJJTIm');

define('SECURE_AUTH_SALT', 'qtCXXYmPmHqLQu2BLIkbLJt9OVgUl3QSDeUgqS7FXO3mlPrvimLIs5XUitubJ6Zb');

define('LOGGED_IN_SALT',   'AZV0HtVNj85SBaW7Ubrfqcb7vjKRz9NfGcKQ4OOejTXftTAkGONak1Bt8QUlSUWv');

define('NONCE_SALT',       'ofYtYQdPkBKJuf56M3opPrmFt4NjlPWmNlS0bjWgwOa47aOYOflw5urvCU2HFKav');



/**

 * Other customizations.

 */

define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');



/**

 * Turn off automatic updates since these are managed upstream.

 */

define('AUTOMATIC_UPDATER_DISABLED', true);



/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
