<?php 
/**
 * Share buttons
 *
 * @package Carte Blanche Bourbon
 * @since 2015
 */

$socials = get_post_meta( get_the_ID(), 'social_counts', true );
if( empty( $socials['tw'] ) ) $socials['tw'] = 0;
if( empty( $socials['fb'] ) ) $socials['fb'] = 0;
if( empty( $socials['in'] ) ) $socials['in'] = 0;
if( empty( $socials['pin'] ) ) $socials['pin'] = 0;

$title = urlencode( get_the_title() );
$link = urlencode( get_permalink() );

$twlink = 'https://www.twitter.com/home?status='.$title.' - '.$link;
$fblink = 'https://www.facebook.com/share.php?u='.$link;
$inlink = 'http://www.linkedin.com/shareArticle?mini=true&url='.$link.'&title='.$title;
$pinlink = 'http://pinterest.com/pin/create/link/?url='.$link;


?>
<div class="row share-buttons">
	<a class="post-counter button tweets" data-type="twitter" data-href="<?php echo $twlink;?>" target="_blank" data-postid="<?php the_ID();?>" data-count="<?php echo $socials['tw'];?>"> 
		<i class="fa fa-twitter icon-twitter"></i>
		<p class="count">
			<?php echo $socials['tw'];?>
		</p>
	</a>
		
	<a class="post-counter button fb" data-type="facebook" data-href="<?php echo $fblink;?>" target="_blank" data-postid="<?php the_ID();?>" data-count="<?php echo $socials['fb'];?>">
		<i class="fa fa-facebook icon-facebook"></i>
		<p class="count">
			<?php echo $socials['fb'];?>
		</p>
	</a>

	<a class="post-counter button in" data-type="linkedin" data-href="<?php echo $inlink;?>" target="_blank" data-postid="<?php the_ID();?>" data-count="<?php echo $socials['in'];?>">
		<i class="fa fa-linkedin icon-linkedin"></i>
		<p class="count">
			<?php echo $socials['in'];?>
		</p>
	</a>

	<a class="post-counter button pin" data-type="pinterest" data-href="<?php echo $pinlink;?>" target="_blank" data-postid="<?php the_ID();?>" data-count="<?php echo $socials['pin'];?>">
		<i class="fa fa-pinterest icon-pinterest"></i>
		<p class="count">
			<?php echo $socials['pin'];?>
		</p>
	</a>
</div>