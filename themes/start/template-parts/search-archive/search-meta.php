<div class="entry-meta">
	<?php
	$search_meta = get_theme_mod( 'search_posts_meta_layout', array( 'author', 'date', 'category', 'comments' ) );

	if ( ! empty( $search_meta ) && is_array( $search_meta ) ) {
	    foreach ( $search_meta as $search_metas) {
	          get_template_part( 'template-parts/meta/meta-' . $search_metas );
	    }
	}
	?>
</div>



