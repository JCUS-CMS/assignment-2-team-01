<?php
/**
 * Template Name: BlogPage
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <div>
			<?php 
				foreach((get_the_category()) as $category){
					echo $category;
					echo $category->name."<br>";
					echo category_description($category);
					}
				?>
			</div>
			<?php echo $category -> name;?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
