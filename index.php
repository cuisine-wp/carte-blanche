<?php 
/**
 * Index
 *
 * @package Carte Blanche Bourbon
 * @since 2015
 */
get_header();


get_template_part( 'elements/share' );
if( have_posts() ): while( have_posts() ): the_post();?>
<div class="page-contents">

</div>
<?php

endwhile;
else:

	get_template_part( 'templates/not-found' );

endif;
get_footer();?>