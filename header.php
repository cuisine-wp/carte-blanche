<?php
/**
 * The header template file.
 *
 * @package Carte Blanche
 * @since 2014
 */
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="HandheldFriendly" content="true">

	<title><?php wp_title(); ?></title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11"/>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
	<link rel="shortcut icon" href="<?php echo cuisine_site_url();?>/favicon.ico"/>
	<link rel="stylesheet" href="<?php echo cuisine_stylesheet_url( 'css' );?>">
	
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
							'items_wrap' => '<nav id="%1$s" class="%2$s"><ul>%3$s</ul></nav>'

				)); ?>
			<?php endif;?>
		</div>
	</header>
	

	<div id="main" role="main">
		<div class="container">