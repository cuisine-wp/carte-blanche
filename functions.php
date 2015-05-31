<?php
/**
 * Functions.php
 *
 * @package Carte Blanche Bourbon
 * @since 2015
 */


use Cuisine\Wrappers\Scripts;
use Cuisine\Wrappers\Route;
use Cuisine\Utilities\Url;

	//The init function is necesary to add the capabilities + compatibilities
	//And register menu's, and widgetareas:

	/**
	 * Hooked 'init' function whichs starts this theme. 
	 *
	 * @access public
	 * @return void
	 */
	add_action( 'init', 'cb_init' );
	function cb_init(){
			
		$locations = array(
							'main'		=> 'Main',
							'top'		=> 'Top',
							'footer'	=> 'Footer',
		);

		//register the menu's with WP:
		register_nav_menus( $locations );

	
		//add custom image sizes:
		cb_add_image_sizes();

		//modernizr in the head:
		$modernizr = Url::theme( 'libs' ).'/modernizr-2.8.2.min.js';
		wp_enqueue_script( 'modernizr', $modernizr );

		
		//register the scripts
		Scripts::register( 'jquery', Url::wp( 'jquery/jquery' ), true );
		Scripts::register( 'theme', Url::theme( 'js' ).'/script', true );
	}


	/**
	 * Include all extra files
	 *
	 * @access public
	 * @return void
	 */
	function cb_includes(){

		require_once( 'includes/ajax.php' );

	}

	cb_includes();



	/**
	 * Add the image sizes for this theme 
	 *
	 * @access public
	 * @return void
	 */
	function cb_add_image_sizes(){

		add_theme_support( 'post-thumbnails' );		
		add_image_size( 'tile', 350, 350, true );
		add_image_size( 'billboard', 265, 460, true );


	}


	/**
	 * return 'templates/' as the default plugin-template folder. 
	 *
	 * @access public
	 * @return string
	 */
	function cb_template_location(){
		return 'templates/';
	}
	

	/**
	 * Shorthand to the Carte Blanche url
	 *
	 * @access public
	 * @return String (url)
	 */
	function cb_url( $type = 'base', $echo = false, $slash = true ){

		$url = get_stylesheet_directory_uri();

		switch( $type ){

			case 'scripts':

				$url .= '/js';
				break;

			case 'css':

				$url .= '/css';
				break;

			case 'images':

				$url .= '/images';
				break;
		}

		if( $slash )
			$url = trailingslashit( $url );

		if( $echo )
			echo $url;

		return $url;
	}


	/****************************************************/
	/** CUSTOM THEME FUNCTIONS **************************/
	/****************************************************/


	
	/**
	 * Generates the logo
	 *
	 * @access public
	 * @return string (html)
	 */
	function cb_theme_logo(){
	
		$html = '<a class="logo" href="'.get_site_url().'">';
			$html .= '<h1>'.get_bloginfo( 'name', 'raw' ).'</h1>';	
		$html .= '</a>';
	
		echo $html;
	}



	show_admin_bar( false );

?>