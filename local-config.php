<?php

define('DB_NAME', 'mydb-dev');
define('DB_USER', 'root');
define('DB_PASSWORD', ''); // you can leave blank, local doesn't require this
define('DB_HOST', 'localhost');

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
define( 'WP_DEBUG', false );
// define( 'SAVEQUERIES', true );