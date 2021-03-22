<?php
//  use Inc\Activate;
// use Inc\Deactivate;
// use Inc\Admin\AdminPages;

// class Vidli{
//     public $plugin;
//     function __construct(){
//         $this->register_post_type();
//         $this->plugin = plugin_basename( __FILE__ );
//     }


//     function register(){
//         add_action('admin_enqueue_scripts', array($this, 'enqueue'));
//         // add_action( 'admin_menu', [$this, 'add_admin_pages']);
//         add_action( 'admin_menu', [$this,'add_admin_pages'] );
//     }

    
//     protected function register_post_type(){
//         add_action('init', [$this, 'register_movie_post_type']);
//     }
//     function register_movie_post_type(){

//         $labels = [
//             'name' => ('Movies'),
//             'singular_name' => ('Movie')
//         ];

//         $args = [
//             'labels' => $labels,
//             'public' => true,
//             'has_archive' => true,
//             'menu_icon'   => 'dashicons-star-empty',
//         ];

//         register_post_type('movie', $args);
//     }

//     function enqueue(){
//         wp_enqueue_style('vidlistyle', plugins_url('/assets/styles/style.css', __FILE__));
//         wp_enqueue_script('vidliscript', plugins_url('/assets/scritps/script.js', __FILE__));
//     }

//     public function add_admin_pages()
//     {
//         add_menu_page( "Vidli Plugin", "Vidli", "manage_options", 'vidli_plugin', [$this, 'admin_index'], 'dashicons-playlist-video', null );
        
//         add_filter( 'plugin_action_links_' . $this->plugin, [$this, 'admin_settings_link']);
//     }

//     public function admin_index(){
//         require_once plugin_dir_path( __FILE__ ) . 'templates/admin.php';
//     }
//     public function admin_settings_link($links){
//         $settings_link = '<a href="admin.php?page=vidli_plugin">Settings</a>';
//         array_push($links, $settings_link);
//         return $links;
//     }
//     function activate(){
//         // require_once plugin_dir_path( __FILE__ ) . 'includes/vidli-activate.php';
//         // VidliPluginActivate::activate();
//         Activate::activate();
//     }
//     function deactivate(){

//         Deactivate::deactivate();
//         // flush_rewrite_rules();
//     }
//     function uninstall(){

//     }
    
// }

// if(class_exists('Vidli')){
//     $vidli = new Vidli();
//     $vidli->register();
// }

// // plugin activation
// register_activation_hook( __FILE__ , [$vidli, 'activate']);

// // plugin deactivation
// // require_once plugin_dir_path( __FILE__ ) . 'includes/vidli-deactivate.php';
// register_deactivation_hook(__FILE__, [$vidli, 'deactivate']);

// // plugin uninstall