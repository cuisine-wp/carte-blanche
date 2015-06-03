<?php
/**
 * Nice, modern date annotation
 *
 * @package Carte Blanche
 * @since 2015
 */

	use Cuisine\View\Loop;
	
	
	echo '<time class="date" datetime="'.Loop::date().'" itemprop="datePublished">';

		echo '<span class="day">'.Loop::date( 'j' ).'</span>';
		echo '<span class="month">'.Loop::date( 'M' ).'</span>';

	echo '</time>';


