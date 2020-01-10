<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php do_action( 'swp_inside_content_container_before' ); ?><!-- Content Container Before Hook -->

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('swp_edd_single'); ?>>
			 	<?php do_action( 'swp_before_content' ); ?>
				<?php
				$swp_edd_single_layout  = get_theme_mod( 'swp_edd_single_layout', array( 'image', 'title', 'description', 'cart' ) );

				if ( ! empty( $swp_edd_single_layout  ) && is_array( $swp_edd_single_layout  ) ) {
				    foreach ( $swp_edd_single_layout  as $swp_edd_single_part ) {
				          get_template_part( 'edd_templates/edd-single/single-' . $swp_edd_single_part );
				    }
				}
				?>
				<?php do_action( 'swp_after_content' ); ?>
			</article>


			<?php start_the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		<?php do_action( 'swp_inside_content_container_after' ); ?> <!-- Content Container After Hook -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
