<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package start
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php do_action( 'swp_before_content' ); ?>
	<?php
	global $disable_featured_image;
	if($disable_featured_image == 0):
	if ( has_post_thumbnail() ) : ?>
	<div class="post-image"><?php the_post_thumbnail(); ?></div>
	<?php 
	endif; 
	endif; 

	global $disable_title;
    if($disable_title == 0):?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<?php endif; ?>
	<?php do_action( 'swp_after_content_title' ); ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'start' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
<?php do_action( 'swp_after_content' ); ?>
</article><!-- #post-## -->
