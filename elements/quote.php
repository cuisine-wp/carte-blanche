<?php 

global $item;

$quote = rtrim( strip_tags( $item['quote'] ) );
$quote = '&ldquo;'.$quote.'&rdquo;';
$quote = apply_filters( 'the_content', $quote );
echo '<blockquote>';
	echo $quote;
	echo '<cite>'.$item['cite'].'</cite>';
echo '</blockquote>';

?>
