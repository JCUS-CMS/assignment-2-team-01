<?php
$blog_single_meta = get_theme_mod( 'single_posts_meta_layout', array( 'author', 'date', 'category', 'comments' ) );
if(!$blog_single_meta == ''):
?>

<div class="entry-meta">
	<?php
	if ( ! empty( $blog_single_meta ) && is_array( $blog_single_meta ) ) {
	    foreach ( $blog_single_meta as $blog_single_metas) {
	          get_template_part( 'template-parts/meta/meta-' . $blog_single_metas );
	    }
	}
	?>
</div>
<?php endif; ?>