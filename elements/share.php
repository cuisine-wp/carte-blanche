<?php 
/**
 * Share buttons
 *
 * @package Carte Blanche
 * @since 2015
 */

	use Cuisine\Wrappers\Share;


	echo '<div itemscope itemtype="http://schema.org/SocialMediaPosting" class="share-buttons">';

		echo Share::twitter();
		echo Share::facebook();
		echo Share::linkedin();
		echo Share::pinterest();

	echo '</div>';


