<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package start
 */
?>
	</div><!-- #content -->
	</div><!-- #content -->
	


	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php 
		global $disable_footer;
		if($disable_footer == 0):
		do_action( 'swp_before_footer' ); 
		$footercol = get_theme_mod( 'footer_layout' );
		if($footercol !== "footer-no"): ?>
		    <div class="footer-area <?php echo footer_notstretched(); ?>">
				<div class="<?php echo footer_stretched(); ?> <?php echo get_theme_mod( 'footer_layout', 'footer-no' ); ?>">

				<?php
				switch ($footercol) {
				    case "footer-one": ?>
					 			<div class="swp-footer-1"><?php dynamic_sidebar( 'footer-1' );?></div>
					 			<?php
				        break;
				    case "footer-two": ?>
					 			<div class="swp-footer-1"><?php dynamic_sidebar( 'footer-1' );?></div>
					 			<div class="swp-footer-2"><?php dynamic_sidebar( 'footer-2' );?></div>
					 			<?php
				        break;
				    case "footer-three": ?>
					 			<div class="swp-footer-1"><?php dynamic_sidebar( 'footer-1' );?></div>
					 			<div class="swp-footer-2"><?php dynamic_sidebar( 'footer-2' );?></div>
					 			<div class="swp-footer-3"><?php dynamic_sidebar( 'footer-3' );?></div>
					 			<?php
				        break;
				     case "footer-four": ?>
					 			<div class="swp-footer-1"><?php dynamic_sidebar( 'footer-1' );?></div>
					 			<div class="swp-footer-2"><?php dynamic_sidebar( 'footer-2' );?></div>
					 			<div class="swp-footer-3"><?php dynamic_sidebar( 'footer-3' );?></div>
					 			<div class="swp-footer-4"><?php dynamic_sidebar( 'footer-4' );?></div>
					 			<?php
				        break;
				         default:
				        	
				}
				?>
				
				</div>
			</div>
		<?php endif; endif; ?>

		<?php 
		global $disable_copyright;
		if($disable_copyright == 0): ?>
		<?php do_action( 'swp_after_footer_widgets' );  ?>
			<div class="site-info <?php echo copyright_notstretched(); ?>">
				<div class="<?php echo copyright_stretched(); ?>">
				<?php echo get_theme_mod( 'footer_copyright', 'Copyright &copy; 2017 | Powered by StartWP' ); ?>
				</div>
			</div><!-- .site-info -->
		<?php do_action( 'swp_after_footer' );  ?>	
		<?php endif; ?>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
