<a itemscope itemtype="http://schema.org/Thing" itemprop="url" href="<?php the_permalink();?>" class="block block-<?php echo get_post_type();?>">
	<?php Template::part('elements/date'); ?>
	<?php echo '<div itemprop="image" class="thumbnail">'. get_the_post_thumbnail( 'medium' ).'</div>'; ?>
	<h2  itemprop="name"><?php the_title();?></h2>
	<div itemprop="about"><?php the_excerpt();?></div>
</a>