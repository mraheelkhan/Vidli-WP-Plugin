<?php
/**
 * @package VidliPlugin
 */
namespace Inc\Pages;
use Inc\Base\BaseController;
use Inc\Api\SettingsApi;
use Inc\Api\Callbacks\AdminCallback;
/**
 * Admin Page that register hooks on admin dashboard side. 
 */

class Admin extends BaseController
{
    public $settings;
    public $pages;
    public $subpages;
    public $callback;

    /**
     * register the menu via add_action hook
     */
    public function register(){
        // add_action( 'admin_menu', [$this,'add_admin_pages'] );
        $this->settings = new SettingsApi();
        $this->callback = new AdminCallback();

        $this->setPages();

        $this->setSubpages();

        $this->setSettings();
        $this->setSections();
        $this->setFields();

        $this->settings->addPages($this->pages)->withSubTitle('Dashboard')->addSubPages($this->subpages)->register();
    }

    public function setPages()
    {
        $this->pages = [
            [
                'page_title' => "Vidli Plugin", 
                'menu_title' => "Vidli", 
                'capability' => "manage_options", 
                'menu_slug' => 'vidli_plugin',
                'callback' => [$this->callback, 'adminDashboard'], 
                'icon_url' => 'dashicons-playlist-video', 
                'position' => null
            ]
        ];
    }
    public function setSubpages(){
        $this->subpages = [
            [
                'parent_slug' =>'vidli_plugin',
                'page_title' => "Custom Post Types", 
                'menu_title' => "CPT", 
                'capability' => "manage_options", 
                'menu_slug' => 'vidli_cpt',
                'callback' => [$this->callback, 'adminCPT']
            ], 
            [
                'parent_slug' =>'vidli_plugin',
                'page_title' => "Custom Taxonomies", 
                'menu_title' => "Taxonomies", 
                'capability' => "manage_options", 
                'menu_slug' => 'vidli_taxonomies',
                'callback' => [$this->callback, 'adminTaxonomies']
            ],
            [
                'parent_slug' =>'vidli_plugin',
                'page_title' => "Custom Widgets", 
                'menu_title' => "Widgets", 
                'capability' => "manage_options", 
                'menu_slug' => 'vidli_widgets',
                'callback' => [$this->callback, 'adminWidgets']
            ]
        ];
    }

    public function setSettings()
    {
        $args = [
                [
                'option_group' => 'vidli_options_group',
                'option_name' => 'text_example',
                'callback' => [$this->callback, 'vidliOptionsGroup']
                ]
            ];

        $this->settings->setSettings($args);
    }
    public function setSections()
    {
        $args = [
                [
                'id' => 'vidli_admin_index',
                'title' => 'Settings',
                'callback' => [$this->callback, 'vidliAdminSection'],
                'page' => 'vidli_plugin'
                ]
            ];

        $this->settings->setSections($args);
    }
    public function setFields()
    {
        $args = [
                [
                'id' => 'text_example',
                'title' => 'Text Example',
                'callback' => [$this->callback, 'vidliTextExample'],
                'page' => 'vidli_plugin',
                'section' => 'vidli_admin_index',
                'args' => [
                    'label_for' => 'text_example',
                    'class' => 'example-class'
                ]
                ]
            ];

        $this->settings->setFields($args);
    }
    
}
