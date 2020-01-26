<?php
/**
 * Template Name: BlogPage
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<div class="blog_categories">
				<!--To list all the sub categories-->
				<h1>Blog Categories</h1>
				<?php
					$args = array('parent'=>5);
					$categories = get_categories($args);
					foreach ($categories as $category){
					?>
					<div>
					<?php
						$post_args = array('category_name'=>$category->name,'orderby'=>'date','posts_per_page'=>1);
						$category_posts = new WP_Query($post_args);
						if($category_posts->have_posts()):
							while($category_posts->have_posts()):
								$category_posts->the_post();
								?>

								<div class="subcategories">

								<?php
								echo '
								<h2>
								<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>
								</h2>';
								?>
								<p class="recent-p">Recent post:</p>
								<h3><?php the_title() ?></h3>
								<?php the_excerpt();?>

								</div>

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
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();?>