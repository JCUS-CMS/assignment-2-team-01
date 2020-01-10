<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package start
 */

// $global_sidebar = get_theme_mod( 'global_sidebar_col', 'right-sidebar' );
$archive_sidebar = get_theme_mod( 'global_sidebar_col', 'right-sidebar' );
$singular_sidebar = get_theme_mod( 'singular_sidebar_col', 'right-sidebar' );



if( is_singular() ) {
$id = get_the_ID();
$page_post_sidebar = get_post_meta( $id, 'selectasidebarl_57316', true );

if( $page_post_sidebar && $page_post_sidebar !== 'Customizer' ) {

		if( $page_post_sidebar == 'Disable' ) {

			return false;

		} else { 
			echo '<div id="secondary" class="widget-area" role="complementary">';
			do_action( 'swp_before_sidebar' ); 
			dynamic_sidebar( 'sidebar-1' );
			do_action( 'swp_after_sidebar' ); 
			echo '</div>';
		}

} else {

		if( $singular_sidebar == 'no-sidebar' ) {

			return false;

		} else {

			echo '<div id="secondary" class="widget-area" role="complementary">';
			do_action( 'swp_before_sidebar' ); 
			dynamic_sidebar( 'sidebar-1' );
			do_action( 'swp_after_sidebar' ); 
			echo '</div>';
		}

}

} elseif ( is_home() || is_archive() || is_search() ) {

		if( $archive_sidebar == 'no-sidebar' ) {

			return false;

		} else {

			echo '<div id="secondary" class="widget-area" role="complementary">';
			do_action( 'swp_before_sidebar' ); 
			dynamic_sidebar( 'sidebar-1' );
			do_action( 'swp_after_sidebar' ); 
			echo '</div>';
		}

} else {

			if( !$global_sidebar || $global_sidebar == 'no-sidebar' ) {

			return false;

			} else { 
				echo '<div id="secondary" class="widget-area" role="complementary">';
				do_action( 'swp_before_sidebar' ); 
				dynamic_sidebar( 'sidebar-1' );
				do_action( 'swp_after_sidebar' ); 
				echo '</div>';
			}

}
