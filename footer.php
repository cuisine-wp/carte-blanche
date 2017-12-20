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

<footer class="footer" id="colophon" itemscope itemtype="http://schema.org/WPFooter">

	<div itemscope itemtype="http://schema.org/WebSite" itemprop="copyrightHolder" class="copyright">
		<div class="container">		
		</div>
	</div>

</footer>

<?php 
    
    //scripts at the bottom
    Script::set(); 
    Script::analytics( 'UA-XXXXX-X' );

?></html>