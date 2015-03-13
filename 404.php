<?php
/**
 * 404.php
 *
 * @package Carte Blanche
 * @since 2015
 */

global $wp;
get_header();?>
<div class="row-fluid page-contents">
	<div class="row-fluid">
		<div class="span8 offset2 page-inner">
			<?php get_template_part( 'elements/title' );?>
			<div class="row-fluid textual-content not-found" itemprop="description">
				<p>We hebben de pagina "<?php echo $wp->request;?>" niet kunnen vinden... Wellicht heb je een vergissing gemaakt?</p>
				<a href="<?php echo cuisine_site_url();?>" class="button bigbutton"><i class="fa fa-home icon-home"></i> ga naar de home pagina</a>
			</div>
		</div>
	</div>	
</div>
<?php get_footer();?>