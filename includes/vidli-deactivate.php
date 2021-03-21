<?php
/**
 * @package VidliPlugin
 */


 class VidliPluginDeactivate{

    public static function deactivate(){
        flush_rewrite_rules();
    }
 }