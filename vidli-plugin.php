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

/**
 * plugin activation funciton
 */
function vidli_plugin_activate(){
    Inc\Base\Activate::activate();
}
/**
 * plugin activation hook
 */
register_activation_hook( __FILE__ , 'vidli_plugin_activate');

/**
 * plugin deactivation funciton
 */
function vidli_plugin_deactivate(){
    Inc\Base\Deactivate::deactivate();
}
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
