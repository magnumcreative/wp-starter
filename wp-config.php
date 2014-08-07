<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

/**#@+
// ====
// stop Wordpress core from auto updating because we have it under version control
// enabeling this may result in local and live environments becoming different
*/
// http://codex.wordpress.org/Configuring_Automatic_Background_Updates
define( 'WP_AUTO_UPDATE_CORE', false );

/**#@+
// ====
// security settings
*/
define( 'DISALLOW_FILE_EDIT', true );

// =====================================================================

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'WP_SITEURL',     'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
define( 'WP_HOME',        'http://' . $_SERVER['SERVER_NAME']);
define( 'WP_CONTENT_DIR',  $_SERVER['DOCUMENT_ROOT'] .          '/wrk');
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wrk');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
if ($_SERVER['REMOTE_ADDR']=='127.0.0.1') {
    define('WP_ENV', 'development');
} else {
    define('WP_ENV', 'production');
}

// MySQL settings - You can get this info from your web host //
if (WP_ENV == 'development') {
    //ensure this file is not under version control
    include( 'local-config.php' );
} else {
    //ensure this file is not under version control
    include( 'prod-config.php' );
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
define( 'DB_COLLATE', '' );

/** Sets the default theme to load */
define('WP_DEFAULT_THEME', 'mytheme'); // < --- change this to your theme name

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xyz_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'en_EN');

/**
* How often WordPress empties trash.
*/
define('EMPTY_TRASH_DAYS', 30 );  // once every 30 days

/**
* Enable post revisions and how many are kept.
* Reduces the load of the server (lower num is better) when turned off.
*/
define('WP_POST_REVISIONS', false );
/*define('WP_POST_REVISIONS', 3);*/

/**
* How often does autosave fire.
*/
define('AUTOSAVE_INTERVAL', 240 );  // in seconds

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
* Increased memory limits
* http://codex.wordpress.org/Editing_wp-config.php#Increasing_memory_allocated_to_PHP
*/
define( 'WP_MEMORY_LIMIT', '64M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );

// ======================================
// Load a Memcached config if we have one
// Require for this to be installed and running on your server, see http://memcached.org/
// http://stackoverflow.com/questions/14329520/is-memcached-worth-running-on-only-one-server
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
    $memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
