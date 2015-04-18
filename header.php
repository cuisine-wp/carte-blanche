<?php
/**
 * Header template file
 *
 * @package Carte Blanche Bourbon
 * @since 2015
 */
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php wp_title();?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="HandheldFriendly" content="true">
	
		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	
		<link rel="shortcut icon" href="<?php echo get_site_url();?>/favicon.ico"/>
		<link rel="stylesheet" href="<?php cb_url( 'css', true, false );?>/main.css">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<header class="mainmenu">
			<div class="container">
				<?php cb_theme_logo();?>
				<?php if(has_nav_menu( 'main' ) ):?>
					<?php wp_nav_menu( array( 
								'theme_location' => 'main',
								'depth' => 2,
								'menu_class' => 'pull-right',
								'items_wrap' => '<nav id="%1$s" class="%2$s"><ul>%3$s</ul></nav>	'
	
					)); ?>
				<?php endif;?>
			</div>
		</header>
	

		<div id="main" role="main">
			<div class="container">	