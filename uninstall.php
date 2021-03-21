<?php

/**
 * Trigger this file on plugin uninstall
 * 
 */


if(!defined('WP_UNINSTALL_PLUGIN')){
    die;
}

// Clear Database Stored Data
// $books = get_posts(['post_type' => 'book']);

// foreach($books as $book){
//     wp_delete_post($book->ID, false); // if true it will delete all drafst, publish or any status of the post. False will only delete the published. 
// }

// global $wpdb;
// $wpdb->query("DELETE FROM  wp_posts where post_type = 'book'");
// $wpdb->query("DELETE FROM wp_postmeta where post_id not in (select id from wp_posts)");
// $wpdb->query("DELETE FROM wp_term_relationships where object_id not in (select id from wp_posts)");