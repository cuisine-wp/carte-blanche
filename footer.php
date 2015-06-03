<?php
/**
 * Footer file
 *
 * @package Carte Blanche Bourbon
 * @since 2015
 */

use Cuisine\Wrappers\Scripts;
use Cuisine\View\Template;
?>
	</div>
</div><!-- #main -->

<footer id="colophon">

</footer>

<div class="copyright">
	<div class="container">

		<?php Template::mustache();?>
	
	</div>
</div>

<?php 
    
    //scripts at the bottom
    Scripts::set(); 
    Scripts::analytics( 'UA-XXXXX-X' );


?></html>