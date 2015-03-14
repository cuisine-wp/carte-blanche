<?php 
/**
 * Blog overview
 *
 * @package Carte Blanche Bourbon
 * @since 2015
 */
get_header();


	echo '<div class="overview blog">';

		if( have_posts() ):

			while( have_posts() ): the_post();
?>



<?php 

			endwhile;
	
		else:
	
			get_template_part( 'views/not-found' );	
	
		endif;

	echo '</div>';


get_footer();?>