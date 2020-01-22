<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vital
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vital' ); ?></a>

	<header id="masthead" class="site-header">
		
		<div class="coverImage">
		
			<div class="container">
			
		
			<div class="site-branding">
				<div class="navSiteName">
					<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				</div><!-- .navSiteName -->
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
			
			<div class="clear"></div><!-- .clear -->
			
			<?php
			
			if ( is_front_page() && is_home() ) :
				?>
				<div class="coverImageContent">
				<div class="backgroundBox">
					<?php
					the_custom_logo();?>
					<h1><?php bloginfo( 'name' );?></h1>
					<h3><?php echo get_bloginfo( 'description', 'display' ); /* WPCS: xss ok. */ ?></h3>
					<p>Enter you site's eye catching message here to draw in people</p>

					<a href="#" title="coverImageButton" class="button buttonCoverImage">Find out more</a>
					</div><!-- .backgroundBox -->
				</div><!-- .coverImageContent -->
				<?php
			else :
				?>
				
				
			<?php endif; ?>
			
			
				
			</div><!-- .container -->
			
		</div><!-- .coverImage -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
