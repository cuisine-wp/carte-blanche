<?php 

global $item;
$content = $item['content'];
$content = cuisine_no_inline_styles_dangit( $content );

?>
<div class="intro" role="introduction">
	<?php echo $content;?>
</div>
