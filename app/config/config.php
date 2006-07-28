<?php
set_include_path( get_include_path() . ':./app/lib' . ':./app/models' . ':./app/filters' );
define( 'DS', DIRECTORY_SEPARATOR );

/**
	DB connection
*/
/*
define( 'KEA_MYSQLI_HOST',		'localhost' );
define( 'KEA_MYSQLI_USERNAME',	'root' );
define( 'KEA_MYSQLI_PASSWORD',	'' );
define( 'KEA_MYSQLI_DBNAME',	'jwa2' );
*/
define( 'KEA_MYSQLI_HOST',		'mysql.localdomain' );
define( 'KEA_MYSQLI_USERNAME',	'nagrin' );
define( 'KEA_MYSQLI_PASSWORD',	'dudeman' );
define( 'KEA_MYSQLI_DBNAME',	'nagrin_jwa_production' );

define( 'KEA_MYSQLI_PORT',		null );
define( 'KEA_MYSQLI_SOCKET',	null );


/**
	Dir names
*/
define( 'APP_DIR_NAME',			'app' );
define( 'CONTENT_DIR_NAME',		'content' );
define( 'CONTROLLER_DIR_NAME',	'controllers' );
define( 'VAULT_DIR_NAME',		'vault' );
define( 'THUMBNAIL_DIR_NAME',	'thumbnails' );
define( 'LOG_DIR_NAME',			'logs' );

/*
	Absolute directory locations
*/
define( 'ABS_APP_DIR',			ABS_ROOT.DS.APP_DIR_NAME );
define( 'ABS_CONTROLLER_DIR',	ABS_APP_DIR.DS.CONTROLLER_DIR_NAME );

define( 'ABS_CONTENT_DIR',		ABS_ROOT.DS.CONTENT_DIR_NAME );
define( 'ABS_VAULT_DIR',		ABS_CONTENT_DIR.DS.VAULT_DIR_NAME );
define( 'ABS_THUMBNAIL_DIR',	ABS_CONTENT_DIR.DS.THUMBNAIL_DIR_NAME );

/*
	Google Maps key
*/
define( 'GMAPS_KEY',			'ABQIAAAAD-SKaHlA87rO8jrVjT7SHBTRyUU76wBWMZxo-KQapL3-cBQ2IxRCNWSJRK6NhN-YdcMkoYZCCD9bUQ' );

/*
	Global 404 file for the application
*/
define( 'GLOBAL_404',			ABS_CONTENT_DIR.DS.'404.php' );

/**
	Logging
*/
define( 'ABS_LOG_DIR',			ABS_APP_DIR.DS.LOG_DIR_NAME );
define( 'KEA_SQL_LOG',			ABS_LOG_DIR.DS.'sql.log' );
define( 'KEA_ERRORS_LOG',		ABS_LOG_DIR.DS.'errors.log' );
define( 'KEA_LOGINS_LOG',		ABS_LOG_DIR.DS.'logins.log' );
define( 'KEA_LOG_SQL',			false );
define( 'KEA_LOG_ERRORS',		false );
define( 'KEA_LOG_LOGINS',		false );

/*
	Web specific settings for use in linking in files, link generation, etc.
*/
define( 'WEB_ROOT',				dirname( $_SERVER['PHP_SELF'] ) );
define( 'WEB_CONTENT_DIR',		WEB_ROOT.DS.CONTENT_DIR_NAME );
define( 'WEB_VAULT_DIR', 		WEB_CONTENT_DIR.DS.VAULT_DIR_NAME );
define( 'WEB_THUMBNAIL_DIR',	WEB_CONTENT_DIR.DS.THUMBNAIL_DIR_NAME );

/*
	Theme directives, these will become dynamic
*/
define( 'PUBLIC_THEME_DIR',		DS.'jwa' );
define( 'ADMIN_THEME_DIR',		DS.'admin' );

/*
	Router settings
*/
define( 'ADMIN_URI', 'admin' );	// The uri which designates the route to the admin interface

/*
	Debug levels
*/
define( 'KEA_DEBUG_ERRORS',		1 );
define( 'KEA_DEBUG_TIMER',		false );
define( 'KEA_DEBUG_SQL',		false );
define( 'KEA_DEBUG_TEMPLATE',	true );

switch( KEA_DEBUG_ERRORS ) {
	case( 1 ): error_reporting( E_ALL | E_STRICT );		break;
	case( 2 ): error_reporting( E_ALL );				break;
	case( 3 ): error_reporting( E_ALL  ^  E_NOTICE );	break;
	case( 4 ): error_reporting( E_WARNING );			break;
}

/**
 * These should be loaded in a specific order
 * 'env' -> 'stdlib' -> 'routes'
 */
require_once('env.php');
require_once('stdlib.php');
require_once('routes.php');

?>