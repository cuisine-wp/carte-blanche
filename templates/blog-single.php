<?php 
/**
 * Blog Single
 *
 * @package Carte Blanche Bourbon
 * @since 2015
 */
get_header();
if( have_posts() ): while( have_posts() ): the_post();?>
<div class="blog-contents">

</div>
<?php

endwhile;
else:

	get_template_part( 'views/not-found' );

endif;
get_footer();?>