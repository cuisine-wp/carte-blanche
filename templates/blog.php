<?php 
/**
 *
 * @package Chef Standaard
 * @since 2012
 */

	get_header();

	global $wp_query, $style;
?>

<!-- Chef_shop also creates the fluid row -->
<?php chef_shop_sidebar_before( $style['sidebar-pos'], 'blog', 'sidebar-area' ); ?>


	<h1 class="pagetitle">Blog</h1>


	<?php if( have_posts() ) while( have_posts() ) : the_post();?>

		<?php get_template_part('plugin-templates/post', get_post_format() );?>

	<?php endwhile; ?>
	
	<?php if( cuisine_has_plugin( 'chef-navigation' ) ):?>
	<div class="row-fluid">
		<?php chef_navigation();?>
	</div>
	<?php endif;?>

<?php chef_shop_sidebar_after( $style['sidebar-pos'], 'blog', 'sidebar-area' );?>

<?php get_footer();?>