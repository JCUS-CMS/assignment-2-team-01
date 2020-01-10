<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package start
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php do_action( 'swp_inside_content_container_before' ); ?><!-- Content Container Before Hook -->
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					start_the_archive_title( '<h1 class="page-title">', '</h1>' );
					start_the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php if ( get_post_type() == 'post' ) : ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('start_blog blog_and_archive'); ?>>
					<?php do_action( 'swp_before_content' ); ?>
					<?php
					$blog_template_parts = get_theme_mod( 'blog_posts_layout', array( 'thumbnail', 'title', 'meta', 'content' ) );

					if ( ! empty( $blog_template_parts ) && is_array( $blog_template_parts ) ) {
					    foreach ( $blog_template_parts as $blog_part ) {
					          get_template_part( 'template-parts/blog-archive/blog-' . $blog_part );
					    }
					}
					?>
				<?php do_action( 'swp_after_content' ); ?>
				</article>
				<?php endif; ?>

				<?php if ( get_post_type() != 'post' ) : ?>
				<?php get_template_part( 'template-parts/content', get_post_format() );	?>
				<?php endif; ?>

			<?php endwhile; ?>

			<?php start_the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		<?php do_action( 'swp_inside_content_container_after' ); ?><!-- Content Container After Hook -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
