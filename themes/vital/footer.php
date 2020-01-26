<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vital
 */

?>

	</div><!-- #content -->
	
	<div id= "footerSection" class="section sectionThemeColor">
		<div class="container">

			<footer id="colophon" class="site-footer">
	
		<div id="footer-sidebar" class="secondary">
		<div id="footer-sidebar1">
		<?php
		if(is_active_sidebar('footer-sidebar-1')){
		dynamic_sidebar('footer-sidebar-1');
		}
		?>
		</div>
		<div id="footer-sidebar2">
		<?php
		if(is_active_sidebar('footer-sidebar-2')){
		dynamic_sidebar('footer-sidebar-2');
		}
		?>
		</div>
		<div id="footer-sidebar3">
		<?php
		if(is_active_sidebar('footer-sidebar-3')){
		dynamic_sidebar('footer-sidebar-3');
		}
		?>
		</div>
		<div id="footer-sidebar4">
		<?php
		if(is_active_sidebar('footer-sidebar-4')){
		dynamic_sidebar('footer-sidebar-4');
		}
		?>
		</div>
	</div>

	
		
	</footer><!-- #colophon -->


<div class="clear"></div><!-- .clear -->

		</div><!-- .container -->
		
	</div><!-- .sectionThemeColor -->
	
	<div class="site-info">
		<p>Copyright © 2020, <?php bloginfo( 'name' );?></p>
	</div><!-- .site-info -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
