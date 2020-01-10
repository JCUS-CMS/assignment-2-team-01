<?php

/****************************************************
* Hooks Fields
****************************************************/

// Before Header
Kirki::add_field( 'start', array(
	'type'     => 'textarea',
	'settings' => 'swp_before_header',
	'label'    => __( 'Before Header', 'start' ),
	'description' => 'swp_before_header',
	'section'  => 'hooks',
) );

// Before Header contant
Kirki::add_field( 'start', array(
	'type'     => 'textarea',
	'settings' => 'swp_before_header_content',
	'label'    => __( 'Before Header Content', 'start' ),
	'description' => 'swp_before_header_content',
	'section'  => 'hooks',
) );

// After Header contant
Kirki::add_field( 'start', array(
	'type'     => 'textarea',
	'settings' => 'swp_after_header_content',
	'label'    => __( 'After Header Content', 'start' ),
	'description' => 'swp_after_header_content',
	'section'  => 'hooks',
) );

// After Header
Kirki::add_field( 'start', array(
	'type'     => 'textarea',
	'settings' => 'swp_after_header',
	'label'    => __( 'After Header', 'start' ),
	'description' => 'swp_after_header',
	'section'  => 'hooks',
) );

// Content Container Before
Kirki::add_field( 'start', array(
	'type'     => 'textarea',
	'settings' => 'swp_inside_content_container_before',
	'label'    => __( 'Inside Content Container Before', 'start' ),
	'description' => 'swp_inside_content_container_before',
	'section'  => 'hooks',
) );

// Before Content
Kirki::add_field( 'start', array(
	'type'     => 'textarea',
	'settings' => 'swp_before_content',
	'label'    => __( 'Before Content', 'start' ),
	'description' => 'swp_before_content',
	'section'  => 'hooks',
) );

// After Content Title
Kirki::add_field( 'start', array(
	'type'     => 'textarea',
	'settings' => 'swp_after_content_title',
	'label'    => __( 'After Content Title', 'start' ),
	'description' => 'swp_after_content_title',
	'section'  => 'hooks',
) );

// After Content
Kirki::add_field( 'start', array(
	'type'     => 'textarea',
	'settings' => 'swp_after_content',
	'label'    => __( 'After Content', 'start' ),
	'description' => 'swp_after_content',
	'section'  => 'hooks',
) );

// Content Container After
Kirki::add_field( 'start', array(
	'type'     => 'textarea',
	'settings' => 'swp_inside_content_container_after',
	'label'    => __( 'Inside Content Container After', 'start' ),
	'description' => 'swp_inside_content_container_after',
	'section'  => 'hooks',
) );

// Before Right Sidebar
Kirki::add_field( 'start', array(
	'type'     => 'textarea',
	'settings' => 'swp_before_sidebar',
	'label'    => __( 'Before Sidebar', 'start' ),
	'description' => 'swp_before_sidebar',
	'section'  => 'hooks',
) );

// After Right Sidebar
Kirki::add_field( 'start', array(
	'type'     => 'textarea',
	'settings' => 'swp_after_sidebar',
	'label'    => __( 'After Sidebar', 'start' ),
	'description' => 'swp_after_sidebar',
	'section'  => 'hooks',
) );

// Before Footer
Kirki::add_field( 'start', array(
	'type'     => 'textarea',
	'settings' => 'swp_before_footer',
	'label'    => __( 'Before Footer', 'start' ),
	'description' => 'swp_before_footer',
	'section'  => 'hooks',
) );

// After Footer Widgets
Kirki::add_field( 'start', array(
	'type'     => 'textarea',
	'settings' => 'swp_after_footer_widgets',
	'label'    => __( 'After Footer Widgets', 'start' ),
	'description' => 'swp_after_footer_widgets',
	'section'  => 'hooks',
) );

// After Footer
Kirki::add_field( 'start', array(
	'type'     => 'textarea',
	'settings' => 'swp_after_footer',
	'label'    => __( 'After Footer', 'start' ),
	'description' => 'swp_after_footer',
	'section'  => 'hooks',
) );






// Hooks

/****************************************
 * Before Header
 ******************************************/
function hook_swp_before_header(){
	 echo get_theme_mod( 'swp_before_header');
}
add_action('swp_before_header', 'hook_swp_before_header');


/****************************************
 * Before Header Content
 ******************************************/
function hook_swp_before_header_content(){
	 echo get_theme_mod( 'swp_before_header_content');
}
add_action('swp_before_header_content', 'hook_swp_before_header_content');


/****************************************
 * After Header Content
 ******************************************/
function hook_swp_after_header_content(){
	 echo get_theme_mod( 'swp_after_header_content');
}
add_action('swp_after_header_content', 'hook_swp_after_header_content');


/******************************************
 * After Header
 ******************************************/
function hook_swp_after_header(){
	 echo get_theme_mod( 'swp_after_header');
}
add_action('swp_after_header', 'hook_swp_after_header');


/******************************************
 * Content Container Before
 ******************************************/
function hook_swp_inside_content_container_before(){
	 echo get_theme_mod( 'swp_inside_content_container_before');
}
add_action('swp_inside_content_container_before', 'hook_swp_inside_content_container_before');


/****************************************
 * Before Content
 ******************************************/
function hook_swp_before_content(){
	 echo get_theme_mod( 'swp_before_content');
}
add_action('swp_before_content', 'hook_swp_before_content');


/****************************************
 * Content Title After
 ******************************************/
function hook_swp_content_title_after(){
	 echo get_theme_mod( 'swp_after_content_title');
}
add_action('swp_after_content_title', 'hook_swp_content_title_after');


/****************************************
 * After Content
 ******************************************/
function hook_swp_after_content(){
	 echo get_theme_mod( 'swp_after_content');
}
add_action('swp_after_content', 'hook_swp_after_content');


/****************************************
 * Content Container After
 ******************************************/
function hook_swp_inside_content_container_after(){
	 echo get_theme_mod( 'swp_inside_content_container_after');
}
add_action('swp_inside_content_container_after', 'hook_swp_inside_content_container_after');


/****************************************
 * Before Sidebar
 ******************************************/
function hook_swp_before_sidebar(){
	 echo get_theme_mod( 'swp_before_sidebar');
}
add_action('swp_before_sidebar', 'hook_swp_before_sidebar');


/****************************************
 * After Sidebar
 ******************************************/
function hook_swp_after_sidebar(){
	 echo get_theme_mod( 'swp_after_sidebar');
}
add_action('swp_after_sidebar', 'hook_swp_after_sidebar');


/****************************************
 * Before Footer
 ******************************************/
function hook_swp_before_footer(){
	 echo get_theme_mod( 'swp_before_footer');
}
add_action('swp_before_footer', 'hook_swp_before_footer');


/****************************************
 * After Footer Widgets
 ******************************************/
function hook_swp_after_footer_widgets(){
	 echo get_theme_mod( 'swp_after_footer_widgets');
}
add_action('swp_after_footer_widgets', 'hook_swp_after_footer_widgets');


/****************************************
 * After Footer
 ******************************************/
function hook_swp_after_footer(){
	 echo get_theme_mod( 'swp_after_footer');
}
add_action('swp_after_footer', 'hook_swp_after_footer');




