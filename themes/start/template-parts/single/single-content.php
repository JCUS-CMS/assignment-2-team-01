<?php if( ! empty( $post->post_content ) ) : ?>
<div class="entry-content">
<?php the_content(); ?>
<?php
	wp_link_pages( array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'start' ),
		'after'  => '</div>',
	) );
?>
</div>
<?php endif; ?>