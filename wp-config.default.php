<?php
/**
 * Default config settings
 *
 * Enter any WordPress config settings that are default to all environments
 * in this file. These can then be overridden in the environment config files.
 *
 * Please note if you add constants in this file (i.e. define statements)
 * these cannot be overridden in environment config files.
 *
 */

define( 'WP_AUTO_UPDATE_CORE', false ); // stops WP auto updates
define( 'DISALLOW_FILE_EDIT', true );   // disable file editor

$table_prefix  = 'mag_';

define( 'DB_CHARSET',          'utf8'   );
define( 'DB_COLLATE',          ''       );
define( 'WP_DEFAULT_THEME',    ''     );
define( 'WPLANG',              'en_EN'  );
define( 'EMPTY_TRASH_DAYS',    30       );
define( 'WP_POST_REVISIONS',   false    );
define( 'AUTOSAVE_INTERVAL',   240      );
define( 'WP_MEMORY_LIMIT',     '64M'    );
define( 'WP_MAX_MEMORY_LIMIT', '256M'   );

/**#@+
* SALT KEY : {@link https://api.wordpress.org/secret-key/1.1/salt/}
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');