<?php
/**
 * start Theme Customizer
 *
 * @package start
 */

/****************************************************
* Customizer controls
****************************************************/

// Configuration
Kirki::add_config( 'start', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/****************************************************
* Panels
****************************************************/

Kirki::add_panel( 'theme_styles', array(
    'priority'    => 10,
    'title'       => __( 'Theme Options', 'start' ),
    'description' => __( 'Theme Options', 'start' ),
) );

/****************************************************
* Sections
****************************************************/

// General Section
Kirki::add_section( 'general', array(
    'title'          => __( 'General', 'start' ),
    'panel'          => 'theme_styles',
    'capability'     => 'edit_theme_options',
) );

// Header Section
Kirki::add_section( 'header', array(
    'title'          => __( 'Header', 'start' ),
    'panel'          => 'theme_styles',
    'capability'     => 'edit_theme_options',
) );

// Menu Section
Kirki::add_section( 'start_menu', array(
    'title'          => __( 'Menu', 'start' ),
    'panel'          => 'theme_styles',
    'capability'     => 'edit_theme_options',
) );

// Blog Section
Kirki::add_section( 'blog_archive', array(
    'title'          => __( 'Blog / Archive / Single', 'start' ),
    'panel'          => 'theme_styles',
    'capability'     => 'edit_theme_options',
) );

// Sidebar Section
Kirki::add_section( 'sidebar', array(
    'title'          => __( 'Sidebar', 'start' ),
    'panel'          => 'theme_styles',
    'capability'     => 'edit_theme_options',
) );

// 404
Kirki::add_section( '404', array(
    'title'          => __( '404', 'start'  ),
    'panel'          => 'theme_styles',
    'capability'     => 'edit_theme_options',
) );

// Search
Kirki::add_section( 'search_archive', array(
    'title'          => __( 'Search', 'start'  ),
    'panel'          => 'theme_styles',
    'capability'     => 'edit_theme_options',
) );

// Footer Section
Kirki::add_section( 'footer', array(
    'title'          => __( 'Footer', 'start'  ),
    'panel'          => 'theme_styles',
    'capability'     => 'edit_theme_options',
) );

// Footer Copyright
Kirki::add_section( 'copyright', array(
    'title'          => __( 'Copyright', 'start'  ),
    'panel'          => 'theme_styles',
    'capability'     => 'edit_theme_options',
) );

// Hooks
Kirki::add_section( 'hooks', array(
    'title'          => __( 'Hooks', 'start'  ),
    'panel'          => 'theme_styles',
    'capability'     => 'edit_theme_options',
) );


/******************************************************************************************
* Fields
*******************************************************************************************/

// Global Start Tabs
function start_tabs($setting, $section){
  Kirki::add_field( 'start', array(
    'type'        => 'radio-buttonset',
    'settings'    => $setting,
    'section'     => $section,
    'default'     => 'general',
    'transport'   => 'postMessage',
    'choices'     => array(
        'general'   => __( 'General', 'start' ),
        'style' => __( 'Style', 'start' ),
        'advanced'  => esc_attr__( 'Advanced', 'start' ),
    ),
) );  
}

// Shortcuts
function start_shortcuts($setting, $section, $partial_id, $partial_selector){
Kirki::add_field( 'start', array(
    'type'        => 'custom',
    'settings'    => $setting,
    'section'     => $section,
    'partial_refresh' => array(
        $partial_id => array(
            'selector'        => $partial_selector,
            'render_callback' => '__return_false',
        ),
     ),
) );
}


// Global Customizer Headlines
function start_headlines($setting, $section, $radio_setting, $tab, $text, $margin){
Kirki::add_field( 'start', array(
    'type'        => 'custom',
    'settings'    => $setting,
    'section'     => $section,
    'default'     => '<div style="border-bottom: 2px solid #00a0d2; line-height: 2em; font-size: 16px; background: #d6d6d6; color: #555d66; padding: 0 10px; cursor: auto; margin-top: ' . $margin .'">' . esc_html__( $text, 'start' ) . '</div>',
    'active_callback'  => array(
        array(
            'setting'  => $radio_setting,
            'operator' => '==',
            'value'    => $tab,
        ),
    ),
) );
}


// No Options Text
function start_no_options($setting, $section, $radio_setting, $tab){
Kirki::add_field( 'start', array(
    'type'        => 'custom',
    'settings'    => $setting,
    'section'     => $section,
    'default'     => '<div style="padding: 20px;background-color: #333; color: #fff;">' . esc_html__( 'There are currently no options here.', 'start' ) . '</div>',
    'active_callback'  => array(
        array(
            'setting'  => $radio_setting,
            'operator' => '==',
            'value'    => $tab,
        ),
   ),
) );
}

// Custom Logo Width
Kirki::add_field( 'start', array(
    'type'        => 'slider',
    'settings'    => 'swp_logo_width',
    'label'       => __( 'Logo Width', 'start' ),
    'section'     => 'title_tagline',
    'transport' => 'postMessage',
    'default'     => 50,
    'choices'     => array(
        'min'  => '50',
        'max'  => '600',
    ),
    'priority'    => 8,
    'output' => array(
        array(
            'element'  => '.site-header .site-branding .custom-logo',
            'property' => 'max-width',
            'units'    => 'px',
        ),
    ),
    'js_vars'   => array(
        array(
            'element'  => '.site-header .site-branding .custom-logo',
            'function' => 'css',
            'property' => 'max-width',
            'units'    => 'px',
        ),
    ),
) );


// Include files
require get_template_directory() . '/inc/customizer/customizer-sections/general-customizer.php';
require get_template_directory() . '/inc/customizer/customizer-sections/header-customizer.php';
require get_template_directory() . '/inc/customizer/customizer-sections/menu-customizer.php';
require get_template_directory() . '/inc/customizer/customizer-sections/blog-customizer.php';
require get_template_directory() . '/inc/customizer/customizer-sections/sidebar-customizer.php';
require get_template_directory() . '/inc/customizer/customizer-sections/footer-customizer.php';
require get_template_directory() . '/inc/customizer/customizer-sections/copyright-customizer.php';
require get_template_directory() . '/inc/customizer/customizer-sections/hooks-customizer.php';
require get_template_directory() . '/inc/customizer/customizer-sections/404-customizer.php';
require get_template_directory() . '/inc/customizer/customizer-sections/search-customizer.php';


// Compiles the CSS to a file instead of adding inline.
function kirki_css_infile( ) {}
add_filter( 'kirki_output_inline_styles', 'kirki_css_infile' );


// add class on body frontend
add_filter( 'body_class', 'frontend_class' );
function frontend_class( $classes ) {
    $classes[] = 'startwp-frontend-styles';
    return $classes;
}

// Disable Telemetry
add_filter( 'kirki_telemetry', '__return_false' );
