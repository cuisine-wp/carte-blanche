<?php
/**
 * Functions.php
 *
 * @package Carte Blanche
 * @since 2015
 */
	
	namespace CarteBlanche;

	use Cuisine\Wrappers\Script;
	use Cuisine\Utilities\Url;
	use Cuisine\View\Image;
	use Cuisine\View\Nav;

	/**
	 * Hooked 'init' function whichs starts this theme. 
	 *
	 * @access public
	 * @return void
	 */
	add_action( 'init', function(){
		
		if( class_exists( 'Cuisine' ) ){

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

			//modernizr in the head:
			$modernizr = Url::theme( 'vendors' ).'/modernizr-2.8.2.min.js';
			wp_enqueue_script( 'modernizr', $modernizr );
				
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

		}

	});






	/**
	 * Overwrite your JS files here;
	 *
	 * @access public
	 * @return void
	 */
	add_filter( 'cuisine_scripts', function( $scripts ){

		

		return $scripts;
	
	});


	show_admin_bar( false );

