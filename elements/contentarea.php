<?php 

global $item;

$content = $item['content'];
$content = cuisine_no_inline_styles_dangit( $content );
echo $content;
?>
