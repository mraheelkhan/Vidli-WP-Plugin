<?php
/**
 * @package VidliPlugin
 */
namespace Inc\Base;

/** Deactivate class that initiate upon plugin deactivation */
 class Deactivate{

    /**
     * initiate upon plugin deactivation
     */
    public static function deactivate(){
        flush_rewrite_rules();
    }
 }