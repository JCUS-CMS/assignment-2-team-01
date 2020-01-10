<?php if ( true == get_theme_mod( 'blog_archive_title_linkable', true ) ) : ?>
	<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php else : ?>
	<h1 class="entry-title"><?php the_title(); ?></h1>
<?php endif; ?>
<?php do_action( 'swp_after_content_title' ); ?>