<?php 
/**
 * Page
 *
 * @package Carte Blanche
 * @since 2015
 */

	use Cuisine\View\Template;
	use Cuisine\View\Loop;

	Template::header();
		
	echo '<div class="detail page contents" itemprop="mainContentOfPage">';
	

		if( have_posts() ):
		
			while( have_posts() ): the_post();


				echo '<h1 itemprop="title">'.Loop::title().'</h1>';
				the_sections();

		
			endwhile;
			
		else:
			
			Template::notFound();
			
		endif;
		
	echo '</div>';
		
	Template::footer();


