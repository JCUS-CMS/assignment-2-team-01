<?php
/**
 * The template for displaying search results pages.
 *
 * @package start
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php do_action( 'swp_inside_content_container_before' ); ?><!-- Content Container Before Hook -->
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title search_title"><?php printf( esc_html__( get_theme_mod( 'search_headline', 'Search Results for' ) . ': %s', 'start' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('search_blog'); ?>>
					<?php do_action( 'swp_before_content' ); ?>
					<?php
					$search_template_parts = get_theme_mod( 'search_posts_layout', array( 'thumbnail', 'title', 'meta', 'content' ) );

					if ( ! empty( $search_template_parts ) && is_array( $search_template_parts ) ) {
					    foreach ( $search_template_parts as $search_part ) {
					          get_template_part( 'template-parts/search-archive/search-' . $search_part );
					    }
					}
					?>
					<?php do_action( 'swp_after_content' ); ?>					
				</article>

			<?php endwhile; ?>

			<?php start_the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		<?php do_action( 'swp_inside_content_container_after' ); ?><!-- Content Container After Hook -->
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>