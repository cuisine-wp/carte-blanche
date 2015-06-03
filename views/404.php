<?php 
/**
 * 404
 *
 * @package Carte Blanche
 * @since 2015
 */
	
	global $wp;
	use Cuisine\View\Template;
	use Cuisine\View\Loop;


	Template::header();
		
	echo '<div class="detail page-not-found contents">';
		
		echo '<h1>404 - Niet gevonden</h1>';

		echo '<p>We hebben de pagina "'.$wp->request.'" niet kunnen vinden...';
		echo 'Wellicht heb je een vergissing gemaakt?</p>';

		$txt = '<i class="fa fa-home icon-home"></i> ga naar de home pagina';
		Loop::button( get_site_url(), $txt );
		
	echo '</div>';
		
	Template::footer();

