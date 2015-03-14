<?php
/**
 * Nice, modern date annotation
 *
 * @package Carte Blanche Bourbon
 * @since 2015
 */

?>
<time class="date" datetime="<?php echo get_the_date( 'j-M-Y' );?>" itemprop="datePublished">
	<span class="day"><?php echo get_the_date( 'j' );?></span>
	<span class="month"><?php echo get_the_date( 'M' );?></span>
</time>