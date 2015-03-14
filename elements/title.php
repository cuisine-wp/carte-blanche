<?php
/**
 * Page titles
 *
 * @package Carte Blanche Bourbon
 * @since 2015
 */


echo '<h1 class="title" itemprop="name">';


	if( is_single() || is_page() ){
		the_title();

		if( get_post_type() == 'post' )
			get_template_part( 'elements/date' );

			
	}else if( get_post_type() == 'agenda' ){
		echo 'Agenda';

	}else if( is_404() ){
		echo 'Pagina niet gevonden...';
			
	}else{
	
	}


echo '</h1>';?>