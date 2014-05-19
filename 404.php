<?php get_header();?>
<div class="fullwidth content">
	<h1>Pagina niet gevonden.. </h1>
	
	<div class="navigation searchresults">
		<strong>Geen resultaten gevonden.</strong><br/>
		probeer een andere zoekopdracht:
		<form role="search" method="get" id="searchform" action="<?php echo $cuisine->site_url?>">
			<input type="text" name="s" id="s" class="searchfield" value="">
		</form>
		
	</div>	
</div>
<?php get_footer();?>