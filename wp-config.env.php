<?php
/**
 * Setup environments
 *
 * Set environment based on the current server hostname, this is stored
 * in the $hostname variable
 *
 * You can define the current environment via:
 *     define('WP_ENV', 'production');
 */


// Set environment based on hostname
switch ($hostname) {
    case 'devurl.dev':
        define('WP_ENV', 'development');
        break;

    case 'dev.url.com':
        define('WP_ENV', 'staging');
        break;

    case 'url.com':
    default:
        define('WP_ENV', 'production');
}
