<?php 
/**
 *	Contentarea.php
 *
 *	handles a flex contentarea 
 *
 */


global $item;

$content = $item['content'];
$content = cuisine_no_inline_styles_dangit( $content );
echo $content;
?>
