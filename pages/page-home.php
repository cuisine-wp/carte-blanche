<?php 
/**
 * Home Page Template
 *
 * @package Carte Blanche
 * @since 2015
 */

	use Cuisine\View\Loop;
	use Cuisine\View\Template;

	Template::header();
		
	echo '<div class="detail home-page contents" itemprop="mainContentOfPage">';
		
		if( have_posts() ):
		
			while( have_posts() ): the_post();
	

				echo '<h1 itemprop="title">'.Loop::title().'</h1>';
				echo Loop::sections();

				Template::share();

			endwhile;
			
		else:
			
			Template::notFound();
			
		endif;
		
	echo '</div>';
		
	Template::footer();



