<div class="row-fluid post" id="post-<?php the_ID();?>">

	<div class="span2">
		<div class="date">
		<?php printf('<p class="day">%1$s</p><p class="month">%2$s</p><p class="year">%3$s</p>', 
			get_the_date( 'j' ),
			get_the_date( 'M' ),
			get_the_date( 'Y' ));?>
		</div>
		<div class="meta">
			<p class="post-author">
				<i class="icon-user"></i>
				<?php the_author();?>
			</p>
			<p class="post-commets">
				<?php comments_popup_link( '<span class="leave-reply"><i class="icon-comment"></i> Reageer</span>', '<b><i class="icon-comment"></i> 1 Reactie</b>', '<b><i class="icon-comment"></i> % Reacties</b>'); ?>			</p>
			</p>

		</div>
	</div>
	<div class="post-content span10">
		<?php if( !is_single() ):?>
		<div class="post-title">
			<h2>
				<a href="<?php the_permalink(); ?>" title="<?php echo the_title_attribute( 'echo=0' ); ?>" rel="bookmark">
					<?php the_title();?>
				</a>
			</h2>
		</div>
		<?php endif;?>

		<div class="post-body">
			<?php 
			if( has_post_thumbnail() ){
	
				$class = 'alignleft post_thumb';
				if( !is_single() )
					$class .= ' overview-thumb';
					
				if( !is_single() )
					echo '<a href="'.get_permalink().'" class="post_thumb_link" title="'.the_title_attribute( 'echo=0' ).'">';
					
					the_post_thumbnail( 'blog-span', array( 'class' => $class ) );

				if( !is_single() )
					echo '</a>';
	
			}?>
			<?php if ( is_search() ) : // Only display Excerpts for Search ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
			<?php else : ?>
			<div class="entry-content<?php if( !has_post_thumbnail() ) echo ' no-img';?>">
				<?php the_content( '<a href="'.get_permalink().'" class="button read-more">Lees verder <span class="meta-nav">&rarr;</span></a>', true ); ?>
				<div class="clearfix"></div>			
				<?php wp_link_pages( array( 'before' => '<div class="page-link">Lees meer: <span>Pagina\'s:</span>', 'after' => '</div>' ) ); ?>
			</div><!-- .entry-content -->
			<?php endif; ?>
		</div>


		<?php if( is_single() ):?>
			<div class="post-footer">
		
				<?php if ( get_the_author_meta( 'description' ) && ( ! function_exists( 'is_multi_author' ) || is_multi_author() ) ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries ?>
				<div class="author-info row-fluid">
					<div class="span3">
						<div class="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), 100 ); ?>
						</div>
					</div><!-- #author-avatar -->
					<div class="author-description span8">
						<h2>Over <?php echo get_the_author(); ?></h2>
						<?php the_author_meta( 'description' ); ?>
					</div><!-- #author-description -->
					<div class="clearfix"></div>
				</div><!-- #author-info -->
				<?php endif; ?>	

				<div class="post-tags">
					<?php
						/* translators: used between list items, there is a space after the comma */
						$tags_list = get_the_tag_list( '', __( ', ', 'twentyeleven' ) );
						if ( $tags_list ):?>
							<span class="tag-links">
								<?php printf( '<span class="%1$s"><i class="icon-tags"></i> Getagged onder </span> %2$s', 'entry-utility-prep entry-utility-prep-tag-links', $tags_list );?>
							</span>
					<?php endif; // End if $tags_list ?>
				</div>
			</div>
	
		<?php else: ?>
			<div class="post-footer post-comments">
					
					<span class="author"><i class="icon-user"></i> Geschreven door <?php the_author();?></span>
				<?php if ( comments_open() && ! post_password_required() ) : ?>
					<span class="comments-link"><?php comments_popup_link( '<span class="leave-reply"><i class="icon-comment"></i> Reageer</span>', '<b><i class="icon-comment"></i> 1 Reactie</b>', '<b><i class="icon-comment"></i> % Reacties</b>'); ?></span>
				<?php endif; // End if comments_open() ?>
	
			</div>
		
		<?php endif;?>

	</div><!-- /post footer -->

</div><!-- end post -->
