<?php 
global $disable_title;
if($disable_title == 0):
if( ! empty( $post->post_title ) ) : ?>
<h1 class="entry-title"><?php the_title(); ?></h1>
<?php 
endif; 
endif; 
?>
<?php do_action( 'swp_after_content_title' ); ?>