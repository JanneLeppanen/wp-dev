<?php
$root_dir = dirname(__FILE__);
$webroot_dir = $root_dir . '/wp';
$table_prefix  = 'wp_';

define('DB_NAME', 'database name');
define('DB_USER', 'database user');
define('DB_PASSWORD', 'database pass');
define('DB_HOST', 'database host');

define('WP_HOME', 'wp home url');
define('WP_SITEURL', 'wp core url');

define('CONTENT_DIR', '/content');
define('WP_CONTENT_DIR', $root_dir . CONTENT_DIR);
define('WP_CONTENT_URL', WP_HOME . CONTENT_DIR);

define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

define('AUTOMATIC_UPDATER_DISABLED', true);
define('DISABLE_WP_CRON', true);
define('DISALLOW_FILE_EDIT', true);

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wp/');

require_once(ABSPATH . 'wp-settings.php');