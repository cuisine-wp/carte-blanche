<?php
/**
 * Footer file
 *
 * @package Carte Blanche Bourbon
 * @since 2015
 */

use Cuisine\Wrappers\Script;
use Cuisine\View\Template;
?>
	</div>
</div><!-- #main -->

<footer id="colophon">
	<?php Template::section( 'stenciltestje' );?> 
</footer>

<div class="copyright">
	<div class="container">

		<?php Template::mustache();?>
	
	</div>
</div>

<?php 
    
    //scripts at the bottom
    Script::set(); 
    Script::analytics( 'UA-XXXXX-X' );


?></html>