<?php
/**
 * Footer template file
 *
 * @package Carte Blanche Bourbon
 * @since 2015
 */

use Cuisine\Wrappers\Scripts;
?>
	</div>
</div><!-- #main -->
<footer id="colophon">

</footer>
<div class="copyright">
	<div class="container">
		<a href="http://www.chefduweb.nl" title="Website door Chef du Web" class="mustache"></a>
	</div>
</div>

<?php 
    
    //scripts at the bottom
    Scripts::set(); 
    Scripts::analytics( 'UA-XXXXX-X' );

?>
</html>