<?php if ( true == get_theme_mod( 'blog_archive_thumbnail_linkable', true ) ) : ?>
	<div class="post-image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
<?php else : ?>
	<div class="post-image"><?php the_post_thumbnail(); ?></div>
<?php endif; ?>