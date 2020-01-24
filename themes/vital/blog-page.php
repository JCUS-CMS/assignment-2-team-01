<?php
/**
 * Template Name: BlogPage
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <?php 
            // Check if there are any posts to display
            if ( have_posts() ) : ?>
 
            <header class="archive-header">
            <h1 class="archive-title">Category: <?php single_cat_title( '', false ); ?></h1>
 
 
            <?php
            // Display optional category description
             if ( category_description() ) : ?>
            <div class="archive-meta"><?php echo category_description(); ?></div>
            <?php endif; ?>
            </header>
 
            <?php
 
            // The Loop
            while ( have_posts() ) : the_post(); ?>
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
 
            <div class="entry">
            <?php the_content(); ?>
 
             <p class="postmetadata"><?php
              comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
            ?></p>
            </div>
 
            <?php endwhile; 
 
            else: ?>
            <p>Sorry, no posts matched your criteria.</p>
 
 
            <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
