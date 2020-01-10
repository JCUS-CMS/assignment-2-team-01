<?php 
global $disable_featured_image;
if($disable_featured_image == 0):
if ( has_post_thumbnail() ) : ?>
<div class="post-image"><?php the_post_thumbnail(); ?></div>
<?php 
endif; 
endif; 
?>