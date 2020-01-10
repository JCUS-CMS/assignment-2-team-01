<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package start
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<img src="<?php echo get_theme_mod( '404_image'); ?>" class="404_image">

				<header class="page-header">
					<h1 class="page-title"><?php echo get_theme_mod( '404_title', 'Oops! That page can’t be found.'); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php echo get_theme_mod( '404_description', 'It looks like nothing was found at this location. Maybe try one of the links below or a search?'); ?></p>

					<?php 
					 if(get_theme_mod( '404_search') == 1){
					 get_search_form(); 
				     }

					 if(get_theme_mod( '404_recent_posts') == 1){
					 the_widget( 'WP_Widget_Recent_Posts' );
				     }
					  
					 $btn_text = get_theme_mod( '404_button', 'Back To Home');
					 $btn_position = get_theme_mod( '404_button_position', 'btn_left' );
					 $btn_icon_show_hide = get_theme_mod( '404_button_icon_toggle', '1' );
					 $btn_icon_position = get_theme_mod( '404_button_icon_position', 'icon_right' );
					 $btn_icon_left = get_theme_mod( '404_button_left_icon', '&#171;' );
					 $btn_icon_right = get_theme_mod( '404_button_right_icon', '&#187;' );
					 ?>

					<span><a href="<?php echo get_home_url(); ?>" class="read-more"><?php if($btn_icon_show_hide == '1' && $btn_icon_position == 'icon_left'){ echo $btn_icon_left; } ?> <?php echo $btn_text; ?> <?php if($btn_icon_show_hide == '1' && $btn_icon_position == 'icon_right'){echo $btn_icon_right; }?></a></span>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
