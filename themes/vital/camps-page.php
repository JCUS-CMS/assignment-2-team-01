<?php
/**
 * Template Name: CampsPage
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<div>
				<!--To list all the categories-->
				<h1>Camps</h1>
				<?php
					
					$camps_post_args = array('category_name'=>'our-camps','orderby'=>'date','posts_per_page'=>5);
					$camps_posts = new WP_Query($camps_post_args);
					if($camps_posts->have_posts()):
						while($camps_posts->have_posts()):
							$camps_posts->the_post();
				?>
							<div>

							<?php
							echo '
							<h2>
							<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>
							</h2>';
							?>
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
					
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();?>