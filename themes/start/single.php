<?php
/**
 * The template for displaying all single posts.
 *
 * @package start
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php do_action( 'swp_inside_content_container_before' ); ?><!-- Content Container Before Hook -->
		<?php while ( have_posts() ) : the_post(); ?>

			 <?php if ( get_post_type() == 'post' ) : ?>
			 	<article id="post-<?php the_ID(); ?>" <?php post_class('start_blog blog_single'); ?>>
			 	<?php do_action( 'swp_before_content' ); ?>
				<?php
				$single_template_parts = get_theme_mod( 'single_post_layout', array( 'thumbnail', 'title', 'meta', 'content' ) );

				if ( ! empty( $single_template_parts ) && is_array( $single_template_parts ) ) {
				    foreach ( $single_template_parts as $single_part ) {
				          get_template_part( 'template-parts/single/single-' . $single_part );
				    }
				}
				?>
				<?php do_action( 'swp_after_content' ); ?>
			 </article>
			 <?php endif; ?>


			 <?php if ( get_post_type() != 'post' ) : ?>
			 <?php get_template_part( 'template-parts/content', 'single' ); ?>
			 <?php endif; ?>

			<?php start_the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>
		<?php do_action( 'swp_inside_content_container_after' ); ?><!-- Content Container After Hook -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
