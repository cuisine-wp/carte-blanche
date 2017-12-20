<?php
/**
 * Functions.php
 *
 * @package Carte Blanche
 * @since 2015
 */
	
namespace CarteBlanche;


/**
 * Main class that bootstraps the plugin.
 */
if (!class_exists('ThemeIgniter')) {

    class ThemeIgniter {
    
        /**
         * Plugin bootstrap instance.
         *
         * @var \CarteBlanche\ThemeIgniter
         */
        protected static $instance = null;


        /**
         * Plugin directory name.
         *
         * @var string
         */
        protected static $dirName = '';

        /**
         * Constructor
         */
        protected function __construct(){
            // Load this theme.
            $this->load();
        }


        /**
         * Load the framework classes.
         *
         * @return void
         */
        protected function load(){

            //require the language domain:
            $path = __DIR__ . DS . '/languages/';
            load_theme_textdomain( 'carteblanche', false, $path );

            //require the autoloader:
            require( __DIR__ . DS . 'autoloader.php');


            //initiate the autoloader:
            ( new \CarteBlanche\Autoloader() )->register()->load();

            //give off the loaded hook
            do_action( 'theme_loaded' );

        }

        /**
         * Init the plugin classes
         *
         * @return \Crouton\ThemeIgniter
         */
        public static function getInstance(){

            if ( is_null( static::$instance ) ){
                static::$instance = new static();
            }
            return static::$instance;
        }

    }
}

add_action( 'wp_loaded', function(){
    if( class_exists( 'Cuisine' ) ){
    
        \CarteBlanche\ThemeIgniter::getInstance();
    
    }else if( !is_admin() ){
        wp_die( sprintf( 
            'The <a href="%s">Cuisine Plugin</a> needs to be installed for this theme to work.',
            'https://get-cuisine.cooking'
        ));
    }
});