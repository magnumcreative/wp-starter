<?php
/**
 * Development environment config settings
 *
 * Enter any WordPress config settings that are specific to this environment
 * in this file.
 *
 */

define('WP_SITEURL',     'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
define('WP_HOME',        'http://' . $_SERVER['SERVER_NAME']);
define('WP_CONTENT_DIR',  $_SERVER['DOCUMENT_ROOT'] .          '/wrk');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wrk');

// ===========
// Staging Database
// ===========
define( 'DB_NAME',     '');
define( 'DB_USER',     '');
define( 'DB_PASSWORD', '');
define( 'DB_HOST',     'localhost');

// ===========
// Errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG', false );