<?php
/**
 *
 * @package Carte Blanche
 * @since 2014
 *
 *
 */


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
	
			
		try{

			if( class_exists( 'Cuisine' ) ){
		
				global $cuisine;
				
			
				//Register all menus with Cuisine:
				$cuisine->theme->register_menus(array('Main', 'Footer'));
			
				//add custom image sizes:
				cb_add_image_sizes();


				//scripts:
				cuisine_register_script( 'site_script', 'script.js' );	

				//locate_template filter for Cuisine ( defaults to plugin-templates/ )
				add_filter( 'cuisine_template_location', 'cb_template_location' );

	
			}else{
				throw new Exception("Cuisine isn\'t running. Check http://www.chefduweb.nl/cuisine for more information");
			}

		}catch( Exception $e ){
			//echo the error:
			echo $e->getMessage();
		
		}
	}


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
	



	/****************************************************/
	/** CUSTOM THEME FUNCTIONS **************************/
	/****************************************************/


	
	/**
	 * Generates the logo
	 *
	 * @access public
	 * @return string (html)
	 */
	function ct_theme_logo(){
	
		$options = cuisine_get_theme_style();
		$html = '<a class="logo" href="'.cuisine_site_url().'">';
		
		if( isset( $options['logo-image'] ) && $options['logo-image'] != 'none' && $options['logo-image'] != '' )
			$html .= '<img src="'.$options['logo-image'].'"/>';
		
	
		if( isset( $options['logo-show-text'] ) && $options['logo-show-text'] == '1')
			$html .= '<h1>'.get_bloginfo( 'name', 'raw' ).'</h1>';
	
		$html .= '</a>';
	
		echo $html;
	}

	show_admin_bar( false );

?>