<?php
/**
 * Yoast Breadcrumb inclusion
 *
 * @package Carte Blanche Bourbon
 * @since 2015
 */

if ( function_exists('yoast_breadcrumb') ) {

	echo '<div class="row breadcrumbs" id="breadcrumbs">';

		yoast_breadcrumb('<p itemprop="breadcrumb">','</p>');

	echo '</div>';

}?>