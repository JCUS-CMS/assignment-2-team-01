<?php
/**
 * Template Name: BlogPage
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!--To list all the sub categories-->
			<?php
				$args = array('parent'=>5);
				$categories = get_categories($args);
				foreach ($categories as $category){
					echo '<div><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
				}
			?>
			
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();?>