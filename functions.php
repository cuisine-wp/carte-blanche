<?php
/**
 * Functions.php
 *
 * @package Carte Blanche Bourbon
 * @since 2015
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
		$modernizr = cb_url( 'scripts' ).'libs/modernizr-2.8.2.min.js';
		wp_enqueue_script( 'modernizr', $modernizr );

		//all the other scripts in the footer:
		add_action( 'wp_footer', 'cb_add_scripts' );

		//find the appropriate template files:
		add_filter( 'template_include', 'cb_template_include' );

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
	 * Add scripts in the footer:
	 *
	 * @access public
	 * @return void
	 */
	function cb_add_scripts(){

		//ajaxurl:
		echo '<script>var ajaxurl = "'.admin_url('admin-ajax.php').'";</script>';
		
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'script', cb_url('scripts').'script.js' );

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
	


	/**
	 * Return files in templates/ in stead of the root folder.
	 *
	 * @access public
	 * @param  String $template
	 * @return String $template (altered)
	 */
	function cb_template_include( $include ){

		global $wp_query, $post, $cuisine;
		$folder = apply_filters( 'cuisine_template_location', 'templates/' );
		$templates = array();


		if( is_page() ){


			$templates = array(

							$folder.'page-'.$post->post_name.'.php',
							$folder.'page.php'
			);


		}else if( is_404() ){

			$templates = array(
							'views/404.php',
							$folder.'404.php'
			);

		}

		//Loop through the templates and return it when found:
		if( !empty( $templates ) ){
			
			$new_include = locate_template( $templates );
			if( $new_include != '' )
				$include = $new_include;

		}


		return $include;
	
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