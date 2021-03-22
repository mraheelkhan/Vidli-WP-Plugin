<?php

namespace Inc\Pages;
/**
 * Admin Page that register hooks on admin dashboard side. 
 */

class Admin
{

    /** constructor */
    function __construct(){
        
    }

    /**
     * register the menu via add_action hook
     */
    function register(){
        add_action( 'admin_menu', [$this,'add_admin_pages'] );
    }

    /**
     *  add menu page on admin side 
     */
    public function add_admin_pages()
    {
        add_menu_page( "Vidli Plugin", "Vidli", "manage_options", 'vidli_plugin', [$this, 'admin_index'], 'dashicons-playlist-video', null );
        
        add_filter( 'plugin_action_links_' . $this->plugin, [$this, 'admin_settings_link']);
    }

    /**
     * load admin side template
     */
    public function admin_index(){
        require_once PLUGIN_PATH . 'templates/admin.php';
    }
    
}
