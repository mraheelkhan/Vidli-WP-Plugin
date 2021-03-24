<?php
/**
 * @package VidliPlugin
 */
namespace Inc\Pages;
use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;
/**
 * Admin Page that register hooks on admin dashboard side. 
 */

class Admin extends BaseController
{
    public $settings;
    public $pages;
    public $subpages;
    /**
     * 
     */
    public function __construct()
    {
        $this->settings = new SettingsApi();
        $this->pages = [
            [
                'page_title' => "Vidli Plugin", 
                'menu_title' => "Vidli", 
                'capability' => "manage_options", 
                'menu_slug' => 'vidli_plugin',
                'callback' => function(){ echo "<h1> Vidli2 Plugin</h1>";},// [$this, 'admin_index'], 
                'icon_url' => 'dashicons-playlist-video', 
                'position' => null
            ]
        ];
        $this->subpages = [
            [
                'parent_slug' =>'vidli_plugin',
                'page_title' => "Custom Post Types", 
                'menu_title' => "CPT", 
                'capability' => "manage_options", 
                'menu_slug' => 'vidli_cpt',
                'callback' => function() { echo '<h1>CPT Manager</h1>'; }
            ], 
            [
                'parent_slug' =>'vidli_plugin',
                'page_title' => "Custom Taxonomies", 
                'menu_title' => "Taxonomies", 
                'capability' => "manage_options", 
                'menu_slug' => 'vidli_taxonomies',
                'callback' => function(){ echo "<h1>Taxonomies Manager</h1>";}
            ],
            [
                'parent_slug' =>'vidli_plugin',
                'page_title' => "Custom Widgets", 
                'menu_title' => "Widgets", 
                'capability' => "manage_options", 
                'menu_slug' => 'vidli_widgets',
                'callback' => function(){ echo "<h1>Widgets Manager</h1>";}
            ]
        ];
    }
    /**
     * register the menu via add_action hook
     */
    public function register(){
        // add_action( 'admin_menu', [$this,'add_admin_pages'] );
        
        $this->settings->addPages($this->pages)->withSubTitle('Dashboard')->addSubPages($this->subpages)->register();
    }

    /**
     *  add menu page on admin side 
     */
    // public function add_admin_pages()
    // {
    //     add_menu_page( "Vidli Plugin", "Vidli", "manage_options", 'vidli_plugin', [$this, 'admin_index'], 'dashicons-playlist-video', null );
        
    //     // add_filter( 'plugin_action_links_' . $this->plugin, [$this, 'admin_settings_link']);
    // }

    /**
     * load admin side template
     */
    // public function admin_index(){
    //     require_once  $this->plugin_path . 'templates/admin.php';
    // }
    
}
