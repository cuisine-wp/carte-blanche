<?php

    namespace CarteBlanche;

	use CarteBlanche\Nav;
	use CarteBlanche\Image;
	use Cuisine\Utilities\Url;
    use Cuisine\Wrappers\Script;
    use Cuisine\Wrappers\StaticInstance;


    class Events extends StaticInstance{

        /**
         * Constructor
         */
        public function __construct()
        {
            $this->register();
        }

 

        /**
         * Register various items (navs, widget-area's, etc. )
         *
         * @return void
         */
        public function register()
        {
            
            /****************************************/
            /**           Navigation                */
            /****************************************/

            Nav::register( array( 'Main', 'Top', 'Footer', 'Mobile' ) );

            //set blog and nieuws menu-items as active
            $args = array( 'type' => 'single', 'query' => 'post' );
            Nav::setActive( 'Nieuws', $args );
            Nav::setActive( 'Blog', $args );


            /****************************************/
            /**           Scripts                   */
            /****************************************/

                    
            //register the scripts
            Script::register( 'jquery', Url::wp( 'jquery/jquery' ), true );
            Script::register( 'theme', Url::theme( 'js' ).'/script', true );


            /****************************************/
            /**           Image Sizes               */
            /****************************************/

            Image::addSupport();

            //add custom image sizes:
            Image::addSize( 'tile', 350, 350 );
            Image::addSize( 'billboard', 265, 460 );

    

        	show_admin_bar( false );


        }

    }