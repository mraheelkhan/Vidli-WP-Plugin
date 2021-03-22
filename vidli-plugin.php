<?php
/**
 * @package VidliPlugin
 */
/*
Plugin Name: Vidli Plugin
Plugin URI: https://www.vidli.com
Description: Customize WordPress with powerful, professional and intuitive fields.
Version: 1.0.0
Author: Raheel Khan
Author URI: https://www.mraheelkhan.com
Text Domain: vidli
*/

if( !defined('ABSPATH')){
    die('Hey, you can\t access this file');
}

/**
 * import autoload from composer/vendor
 */
if(file_exists(dirname( __FILE__ ) . '/vendor/autoload.php')){
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/** defining global variable for path */
define('PLUGIN_PATH', plugin_dir_path( __FILE__ ));
define('PLUGIN_URL', plugin_dir_url( __FILE__ ));
define('PLUGIN', plugin_basename( __FILE__ ));


/**
 * plugin activation funciton
 */
function vidli_plugin_activate(){
    Inc\Base\Activate::activate();
}
/**
 * plugin deactivation funciton
 */
function vidli_plugin_deactivate(){
    Inc\Base\Deactivate::deactivate();
}
/**
 * plugin activation hook
 */
register_activation_hook( __FILE__ , 'vidli_plugin_activate');

/**
 * plugin deactivation hook
 */
register_deactivation_hook(__FILE__, 'vidli_plugin_deactivate');

/**
 * if class Init exists
 * register all the services (classes). 
 */
if( class_exists('Inc\\Init')){
    Inc\Init::register_services();
}
