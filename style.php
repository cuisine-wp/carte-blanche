<?php
/** 
 *
 * Style.php
 * A file which acts like a css file. In production it generates a static css file.
 * 
 * @package Chef du Web
 * @category Plugin
 * @author Chef du Web
 */

header( "Content-type: text/css" );
require_once( '../../../wp-load.php' );

$style = cuisine_get_theme_style( true );
$gfonts = cuisine_get_google_font_url();


ob_start();

    echo "@import url('css/main.min.css');";
    
    do_action( 'cuisine_before_stylesheet' );

	
	do_action( 'cuisine_stylesheet' );
    

    do_action( 'cuisine_after_stylesheet' );



$css = ob_get_clean();

if( $cuisine->production_mode )
	$css = trim_css( $css );
    
echo $css;?>