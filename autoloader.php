<?php
namespace CarteBlanche;

class Autoloader
{

    /**
     * Load the initial static files:
     *
     * @return void
     */
    public function load()
    {
        Events::getInstance();
    }


    /**
     * Register the autoloader
     *
     * @return CarteBlanche\Autoloader
     */
    public function register()
    {
        spl_autoload_register(function ($class) {

            if ( stripos( $class, __NAMESPACE__ ) === 0 ) {

                $filePath = str_replace( '\\', DS, substr( $class, strlen( __NAMESPACE__ ) ) );
                include( __DIR__ . DS . 'classes' . $filePath . '.php' );

            }

        });

        return $this;
    }
}