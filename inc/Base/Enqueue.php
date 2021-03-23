<?php
/**
 * @package VidliPlugin
 */
namespace Inc\Base;
use Inc\Base\BaseController;

/**
 * Enqueue class that will attach the styles and scripts to plugin
 */
class Enqueue extends BaseController{
    
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
        wp_enqueue_style('vidlistyle', $this->plugin_url . 'assets/styles/style.css');
        wp_enqueue_script('vidliscript', $this->plugin_url . 'assets/scripts/script.js');
    }
}