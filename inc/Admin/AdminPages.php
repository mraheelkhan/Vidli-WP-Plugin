<?php

namespace Inc\Admin;

class AdminPages
{
    public $plugin;
    function __construct(){
        $this->plugin = plugin_basename( __FILE__ );
    }
    public function add_admin_pages()
    {
        add_menu_page( "Vidli Plugin", "Vidli", "manage_options", 'vidli_plugin', [$this, 'admin_index'], 'dashicons-playlist-video', null );
        
        add_filter( 'plugin_action_links_' . $this->plugin, [$this, 'admin_settings_link']);
    }

    public function admin_index(){
        require_once plugin_dir_path( __FILE__ ) . 'templates/admin.php';
    }
    public function admin_settings_link($links){
        $settings_link = '<a href="admin.php?page=vidli_plugin">Settings</a>';
        array_push($links, $settings_link);
        return $links;
    }
}
