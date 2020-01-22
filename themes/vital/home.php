<?php
/*
*
* Template Name: HomePage
*
*
*/

	get_header(); ?>
	
	<div class="section sectionWhite">
		<div class="container">
			<div class="tickerBox">
			
				<div class="width25">
					<div class="tickerInnerContent">
						<h3 class="tickerUp">5</h3>
						<p>Regular Villages Adopted</p> 
					</div><!-- .tickerInnerContent -->
				</div><!-- .width25 -->
				
				<div class="width25">
					<div class="tickerInnerContent">
						<h3 class="tickerUp">497</h3>
						<p>Patients seen till date with regular follow up camps</p> 
					</div><!-- .tickerInnerContent -->
				</div><!-- .width25 -->
				
				<div class="width25">
					<div class="tickerInnerContent">
						<h3 class="tickerUp">110</h3>
						<p>Average patients screened per medical camp</p> 
					</div><!-- .tickerInnerContent -->
				</div><!-- .width25 -->
				
				<div class="width25">
					<div class="tickerInnerContent">
						<h3 class="tickerUp">6</h3>
						<p>Specialities offered</p> 
					</div><!-- .tickerInnerContent -->
				</div><!-- .width25 -->
				
				<div class="clear"></div><!-- .clear -->
				
			</div><!-- .tickerBox -->
		</div><!-- .container -->
	</div><!-- .sectionWhite -->
	
	<div class="section sectionWhite">
		<div class="container">
		
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</div><!-- .container -->
	</div><!-- .sectionWhite -->
	
	<?php get_footer(); ?>