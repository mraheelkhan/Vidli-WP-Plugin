<?php

namespace Inc\Base;

/**
 * Enqueue class that will attach the styles and scripts to plugin
 */

class Enqueue{
    
    /**
     * register and enqueue the styles and scripts. 
     */
    public function register(){
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }

    /**
     * enqueue to initiate the styles and scripts
     */
    function enqueue(){
        wp_enqueue_style('vidlistyle', PLUGIN_URL . 'assets/styles/style.css');
        wp_enqueue_script('vidliscript', PLUGIN_URL . 'assets/scripts/script.js');
    }
}