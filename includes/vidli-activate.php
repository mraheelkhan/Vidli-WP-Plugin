<?php
/**
 * @package VidliPlugin
 */


 class VidliPluginActivate{

    public static function activate(){
        echo "test";
        flush_rewrite_rules();
    }
 }