<?php
/**
 * Page titles
 *
 * @package Carte Blanche
 * @since 2015
 */

use Cuisine\View\Loop;
use Cuisine\View\Template;


echo '<h1 class="title" itemprop="name">';

	if( is_single() || is_page() ){

		echo Loop::title();

		if( Loop::type() == 'post' )
			Template::date();

	}else if( is_404() ){

		echo 'Pagina niet gevonden...';
			
	}else{

	
	}

echo '</h1>';


