<?php 
/**
 * Detail
 *
 * @package Carte Blanche
 * @since 2015
 */

	use Cuisine\View\Template;


	Template::header();
		
	echo '<div class="detail contents itemscope itemtype="http://schema.org/Article itemprop="articleBody">';
		
		if( have_posts() ):
		
			while( have_posts() ): the_post();


				echo '<h1 itemprop="title">'.Loop::title().'</h1>';
				echo Loop::content();

				Template::share();


			endwhile;
			
		else:
			
			Template::notFound();
			
		endif;
		
	echo '</div>';
		
	Template::footer();


