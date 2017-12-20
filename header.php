<?php
/**
 * Header file
 *
 * @package Carte Blanche
 * @since 2015
 */

use CarteBlanche\Template;
use CarteBlanche\Nav;
?>
<!doctype html>
<html itemscope itemtype="http://schema.org/WebSite" lang="en_EN">
	<head>
		<meta charset="utf-8">

		<title><?php Template::pageTitle();?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="HandheldFriendly" content="true">
		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<span itemscope itemtype="http://schema.org/Organization">
			<meta itemprop="name" content="<?php echo get_bloginfo( 'name' );?>">
			<meta itemprop="url" content="<?php echo get_bloginfo( 'url' );?>">
			<meta itemprop="logo" content="<?php echo get_stylesheet_directory_uri();?>/images/logo.png">
		</span>
		
		<?= Template::favicon();?>
		<?= Template::stylesheet( 'main.css' );?>
		<?php wp_head();?>
	</head>
	<body <?php body_class(); ?>>

		<header class="mainmenu" itemscope itemtype="http://schema.org/WPHeader">
			<div class="container">

				<?php Template::logo();?>
				<?php Nav::display( 'main' );?>
		
				<?php Nav::display( 'mobile' );?>
				<?php Nav::mobileToggle();?>

			</div>		
		</header>


		<div id="main" role="main">

			<div class="container">	