<div class="entry-meta">
	<?php
	$blog_meta = get_theme_mod( 'blog_posts_meta_layout', array( 'author', 'date', 'category', 'comments' ) );

	if ( ! empty( $blog_meta ) && is_array( $blog_meta ) ) {
	    foreach ( $blog_meta as $blog_metas) {
	          get_template_part( 'template-parts/meta/meta-' . $blog_metas );
	    }
	}
	?>
</div>



