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
		
		/****************************************/
		/**           Navigation                */
		/****************************************/

			Nav::register( array( 'Main', 'Top', 'Footer', 'Mobile' ) );


		/****************************************/
		/**           Scripts                   */
		/****************************************/

			//modernizr in the head:
			$modernizr = Url::theme( 'libs' ).'/modernizr-2.8.2.min.js';
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

	});



	show_admin_bar( false );

