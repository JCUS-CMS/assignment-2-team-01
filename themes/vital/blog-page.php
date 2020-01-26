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
				?>
				<div>
				<?php
					echo '
					<div>
					<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>
					</div>';
					$post_args = array('category_name'=>$category->name,'orderby'=>'date','posts_per_page'=>1);
					$category_posts = new WP_Query($post_args);
					if($category_posts->have_posts()):
						while($category_posts->have_posts()):
							$category_posts->the_post();
							?>
							<h1><?php the_title() ?></h1>
							<h2><?php the_category() ?></h2>
							<?php the_excerpt();?>
							<?php
						endwhile;
					else:
					?>

					<p>Oops, there are no posts.</p>
					<?php
					endif;
				?>
				</div>
				<?php
				}
			?>
										  


		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();?>