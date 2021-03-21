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
Author URI: https://www.vidli.com
Text Domain: vidli
*/

if( !defined('ABSPATH')){
    die('Hey, you can\t access this file');
}

// if( !defined('add_action')){
//     die('Hey, something went wrong, please refresh');
// }

class Vidli{
    function __construct(){
        $this->register_post_type();
    }


    function register(){
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }

    protected function register_post_type(){
        add_action('init', [$this, 'register_movie_post_type']);
    }
    function register_movie_post_type(){

        $labels = [
            'name' => ('Movies'),
            'singular_name' => ('Movie')
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'menu_icon'   => 'dashicons-star-empty',
        ];

        register_post_type('movie', $args);
    }

    function enqueue(){
        wp_enqueue_style('vidlistyle', plugins_url('/assets/styles/style.css', __FILE__));
        wp_enqueue_script('vidliscript', plugins_url('/assets/scritps/script.js', __FILE__));
    }

    function activate(){
        require_once plugin_dir_path( __FILE__ ) . 'includes/vidli-activate.php';
        VidliPluginActivate::activate();
    }
    function deactivate(){
        flush_rewrite_rules();
    }
    function uninstall(){

    }
    
}

if(class_exists('Vidli')){
    $vidli = new Vidli();
    $vidli->register();
}

// plugin activation
register_activation_hook( __FILE__ , [$vidli, 'activate']);

// plugin deactivation
require_once plugin_dir_path( __FILE__ ) . 'includes/vidli-deactivate.php';
register_deactivation_hook(__FILE__, [$vidli, 'deactivate']);

// plugin uninstall