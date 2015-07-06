<?php
/**
 * Header file
 *
 * @package Carte Blanche
 * @since 2015
 */

use Cuisine\View\Template;
use Cuisine\View\Nav;
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php Template::pageTitle();?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="HandheldFriendly" content="true">
		<meta charset="<?php bloginfo( 'charset' ); ?>"/>

		<?= Template::favicon();?>
		<?= Template::stylesheet( 'main.css' );?>
		<?php wp_head();?>
	</head>
	<body <?php body_class(); ?>>

		<header class="mainmenu">
			<div class="container">
		
				<?php Template::logo();?>
				<?php Nav::display( 'main' );?>
		
				<?php Nav::display( 'mobile' );?>
				<?php Nav::mobileToggle();?>

			</div>		
		</header>


		<div id="main" role="main">

			<div class="container">	