<?php

/**
 * @package VidliPlugin
 */
namespace Inc;

/**
 * Init or Initial class that 
 * initiate upon plugin activation
 */
 final class Init{

    /**
     * services (classes) array
     */
        public static function get_services(){
            return [
                Pages\Admin::class,
                Base\Enqueue::class,
                Base\SettingsLink::class
            ];
        }

        /**
         * iterating over each class
         * from services array
         */
        public static function register_services(){
            foreach(self::get_services() as $class){
                $service = self::instantiate($class);
                if(method_exists($service, 'register')){
                    $service->register();
                }
            }
        }

        /**
         * initiating each class from 
         * services iteration.
         */
        private static function instantiate($class){
            $service = new $class();
            return $service;
        }
 }
