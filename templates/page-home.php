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
		
	echo '<div class="detail home-page contents" itemscope itemtype="http://schema.org/webPage" itemprop="mainContentOfPage">';
		
		if( have_posts() ):
		
			while( have_posts() ): the_post();
	

				echo '<h1 itemscope itemtype="http://schema.org/Thing" itemprop="name">'.Loop::title().'</h1>';
				echo Loop::sections();

				Template::share();

			endwhile;
			
		else:
			
			Template::notFound();
			
		endif;
		
	echo '</div>';
		
	Template::footer();



