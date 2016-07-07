<?php 
/**
 * Overview
 *
 * @package Carte Blanche
 * @since 2015
 */

	use Cuisine\View\Template;


	Template::header();
	
	echo '<div class="overview contents">';
	
		if( have_posts() ):
	
			while( have_posts() ): the_post();




	
			endwhile;
		
		else:
		
			Template::notFound();
		
		endif;
	
	echo '</div>';
	
	Template::footer();


