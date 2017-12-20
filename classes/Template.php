<?php

	namespace CarteBlanche;
	
	use Cuisine\Utilities\Url;

	class Template{

		/*=============================================================*/
		/**             Template parts                                 */
		/*=============================================================*/


		/**
		 * Get the header 
		 * 
		 * @return php file
		 */
		public static function header(){

			return get_header();

		}


		/**
		 * Get the footer 
		 * 
		 * @return php file
		 */
		public static function footer(){

			return get_footer();

		}


		/**
		 * Get a template part
		 * 
		 * @param  string $name
		 * @return php file 
		 */
		public static function part( $name ){

			return get_template_part( $name );

		}


		/**
		 * Get the date template
		 * 
		 * @return php field
		 */
		public static function date(){

			return static::part( 'elements/date' );

		}


		/**
		 * Get the share template
		 * 
		 * @return php field
		 */
		public static function share(){

			return static::part( 'elements/share' );

		}


		/**
		 * Get the breadcrumb template
		 * 
		 * @return mixed - php field / boolean
		 */
		public static function breadcrumbs(){

			if( function_exists( 'yoast_breadcrumb' ) ){

				return static::part( 'elements/breadcrumbs' );

			}

			return false;
		}


		/**
		 * Return the not found template
		 * 
		 * @return php field
		 */
		public static function notFound(){

			return static::part( 'views/not-found' );

		}


		/**
		 * Return a loader template
		 * 
		 * @return php field
		 */
		public static function loader(){

			return static::part( 'elements/loader' );

		}

		/**
		 * Return a templated-section
		 * 
		 * @param  string $name
		 * @param  string $path
		 * 
		 * @return  string (html, echoed)
		 */
		public static function section( $name, $path = null ){

			if( function_exists( 'get_section_template' ) )
				return get_section_template( $name, $path );

		}


		/*=============================================================*/
		/**             Header & Footer functions                      */
		/*=============================================================*/


		/**
		 * Show the page title
		 * 
		 * @return php function
		 */
		public static function pageTitle(){

			wp_title();
		
		}


		/**
		 * Return the favicon 
		 * 
		 * @return string
		 */
		public static function favicon(){

			$url = get_site_url();
			return '<link rel="shortcut icon" href="'.$url.'/favicon.ico">';

		}

		/**
		 * Return the stylesheet
		 *
		 * @param string $file
		 * @return string
		 */
		public static function stylesheet( $file = 'main.min.css' ){

			$url = Url::theme( 'css/'.$file, false );
			return '<link rel="stylesheet" href="'.$url.'">';

		}
		
		
		/**
		 * Return the fontawesome stylesheet
		 *
		 * @return string
		 */
		public static function fontawesome(){

			$url = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';
			return '<link rel="stylesheet" href="'.$url.'">';

		}
		

		/**
		 * Return the logo with link
		 *
		 * @param  string $file
		 * @return string
		 */
		public static function logo( $file = 'logo.png', $echo = true ){

			$html = '';
			$url = Url::theme( 'images', true ) . $file;
			$site = get_site_url();
			$title = get_bloginfo( 'name' );

			$html .= '<a href="'.$site.'" class="logo" title="'.$title.'">';
			$html .= '<img src="'.$url.'">';
			$html .= '</a>';

			if( $echo )
				echo $html;

			return $html;
		}

	}
