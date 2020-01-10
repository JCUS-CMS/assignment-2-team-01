<?php
/**
 * start functions and definitions
 *
 * @package start
 */


/**
 * Assign the StartWP version to a var
 */
$theme           = wp_get_theme( 'start' );
$startwp_version = $theme['Version'];


/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'start_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function start_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on start, use a find and replace
	 * to change 'start' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'start', get_template_directory() . '/languages' );

	// Add woocommerce support
	$start_extended_woo = get_option( 'swp_woo' );
	if( $start_extended_woo[0] == 'Enable' ){
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_action( 'init', 'woo_remove_wc_breadcrumbs' );
	function woo_remove_wc_breadcrumbs() {
	    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
	}
	}


	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */

	add_theme_support( 'title-tag' );

	// Site Logo
	add_theme_support( 'custom-logo', array(
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'start' ),
	) );


	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	// Add support for default block styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	add_theme_support( 'responsive-embeds' );

}
endif; // start_setup
add_action( 'after_setup_theme', 'start_setup' );

/**
 * Register widget area.
 */
function start_widgets_init() {
	// Sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'start' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	// Footer 1
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area 1', 'start' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	// Footer 2
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area 2', 'start' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	// Footer 3
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area 3', 'start' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	// Footer 4
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area 4', 'start' ),
		'id'            => 'footer-4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );	

}
add_action( 'widgets_init', 'start_widgets_init' );

/*
 * Enqueue scripts and styles.
 */
function start_scripts() {
	wp_enqueue_style( 'start-style', get_stylesheet_uri() );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'start_scripts' );


/*
 * Include Kirki
 */
include_once( dirname( __FILE__ ) . '/inc/customizer/kirki/kirki.php' );

/*
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/*
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/*
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/*
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';



//Include Admin Page & Plugin Install classes.
if ( file_exists( get_template_directory() . '/inc/admin/class-startwp-admin-page.php' ) ) {
    require_once( get_template_directory() . '/inc/admin/class-startwp-admin-page.php' );
}
if ( file_exists( get_template_directory() . '/inc/admin/class-startwp-plugin-install.php' ) ) {
    require_once( get_template_directory() . '/inc/admin/class-startwp-plugin-install.php' );
}


/**
 * Activates the welcome page.
 *
 * Adds transient to manage the welcome page.
 */
function swp_welcome_activate() {
 
    // Transient max age is 60 seconds.
    set_transient( '_welcome_redirect_swp', true, 60 );
 
}
 
add_action("after_switch_theme", "swp_welcome_activate", 10 ,  2);
 
/**
 * Deactivates welcome page
 *
 * Deletes the welcome page transient.
 */
function swp_welcome_deactivate() {
 
  delete_transient( '_welcome_redirect_swp' );
 
}
 
add_action("switch_theme", "swp_welcome_deactivate", 10 , 2);

/**
 * Welcome page redirect.
 *
 * Only happens once and if the site is not a network or multisite.
 */
function swp_safe_welcome_redirect() {
 
    // Bail if no activation redirect transient is present.
    if ( ! get_transient( '_welcome_redirect_swp' ) ) {
 
        return;
 
    }
 
  // Delete the redirect transient.
  delete_transient( '_welcome_redirect_swp' );
 
  // Bail if activating from network or bulk sites.
  if ( is_network_admin() || isset( $_GET['activate-multi'] ) ) {
 
    return;
 
  }
 
  // Redirect to Welcome Page.
  wp_safe_redirect( add_query_arg( array( 'page' => 'startwp' ), admin_url( 'themes.php' ) ) );
 
}
 
add_action( 'admin_init', 'swp_safe_welcome_redirect' );