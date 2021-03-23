<?php
/**
 * @package VidliPlugin
 */
namespace Inc\Base;

/** Deactivate class that initiate upon plugin activation */
 class Activate{

    /**
     * initiate upon plugin activation
     */
    public static function activate(){
        flush_rewrite_rules();
    }
 }