<?php

/****************************************************
* Sidebar Section
****************************************************/

// Menu Tabs
start_tabs('sidebar_setting', 'sidebar');

start_shortcuts('sidebar_shortcut', 'sidebar', 'partial_sidebar', '#content #secondary');

/* Sidebar General Fields */

// Archive Sidebar
Kirki::add_field( 'start', array(
    'type'        => 'select',
    'settings'    => 'global_sidebar_col',
    'label'       => __( 'Archive Sidebar', 'start' ),
    'description' => 'Applied to all the archive pages. Such as Blog, Category, Tag, Author, Date, Search, etc.',
    'section'     => 'sidebar',
    'transport' => 'auto',
    'default'     => 'right-sidebar',
    'choices'     => array(
        'no-sidebar'   => esc_attr__( 'Disable', 'start' ),
        'left-sidebar' => esc_attr__( 'Left', 'start' ),
        'right-sidebar'  => esc_attr__( 'Right', 'start' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'sidebar_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
   ),
) );

// Singular 
Kirki::add_field( 'start', array(
    'type'        => 'select',
    'settings'    => 'singular_sidebar_col',
    'label'       => __( 'Singular Sidebar', 'start' ),
    'description' => 'Applied to all the single posts/pages. Will get override by the page/post meta options for specific page/post.',
    'section'     => 'sidebar',
    'transport' => 'auto',
    'default'     => 'right-sidebar',
    'choices'     => array(
        'no-sidebar'   => esc_attr__( 'Disable', 'start' ),
        'left-sidebar' => esc_attr__( 'Left', 'start' ),
        'right-sidebar'  => esc_attr__( 'Right', 'start' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'sidebar_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
   ),
) );


// Sidebar Padding
Kirki::add_field( 'start', array(
    'type'        => 'slider',
    'settings'    => 'content_sidebar_spacing',
    'label'       => esc_attr__( 'Content Sidebar Spacing', 'start' ),
    'section'     => 'sidebar',
    'transport'   => 'postMessage',
    'default'     => 25,
    'output'      => array(
    array(
            'element'  => 'body.startwp-frontend-styles .right-sidebar, body.startwp-frontend-styles .left-sidebar',
            'property' => 'grid-column-gap',
            'units' => 'px'
        ),
    ),
    'active_callback'  => array(
    array(
        'setting'  => 'sidebar_col',
        'operator' => '!=',
        'value'    => 'no-sidebar',
    ),
    array(
        'setting'  => 'sidebar_setting',
        'operator' => '==',
        'value'    => 'general',
    ),
    ),
    'js_vars'     => array(
        array(
            'element'  => 'body.startwp-frontend-styles .right-sidebar, body.startwp-frontend-styles .left-sidebar',
            'property' => 'grid-column-gap',
            'function' => 'css',
            'units'    => 'px',
        ),
    ),
    'choices'     => array(
        'min'  => '0',
        'max'  => '300',
        'step' => '1',
    ),
) );

/* Sidebar Style Fields */

// Sidebar title Styles
start_headlines('sidebar_title_styles', 'sidebar', 'sidebar_setting', 'style', 'Widget Title', '10px');

// Sidebar Title Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'sidebar_title_color',
    'label'       => __( 'Title', 'start' ),
    'section'     => 'sidebar',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles #secondary .widget-title',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles #secondary .widget-title',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'sidebar_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
   ),
) );

// Sidebar Widgets Titles
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'sidebar_widgets_title_typography',
    'section'     => 'sidebar',
    'transport' => 'auto',
    'default'     => array(
        'font-family'    => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
        'variant'        => 'regular',
        'font-size'      => '30px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
        'text-align'     => 'left',
    ),
    'output'      => array(
        array(
            'element' => 'body.startwp-frontend-styles #secondary .widget-title',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'sidebar_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
   ),
) );

// Sidebar Text Styles
start_headlines('sidebar_text_styles', 'sidebar', 'sidebar_setting', 'style', 'Widget Text', '35px');

// Sidebar Text Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'sidebar_text_color',
    'label'       => __( 'Text', 'start' ),
    'section'     => 'sidebar',
    'transport' => 'postMessage',
    'default'     => '#3a3a3a',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles #secondary .widget',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles #secondary .widget',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'sidebar_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
   ),
) );

// Sidebar Widgets Text 
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'sidebar_widgets_text_typography',
    'section'     => 'sidebar',
    'transport' => 'auto',
    'default'     => array(
        'font-family'    => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
        'variant'        => 'regular',
        'font-size'      => '17px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
        'text-align'     => 'left',
    ),
    'output'      => array(
        array(
            'element' => 'body.startwp-frontend-styles #secondary .widget',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'sidebar_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
   ),
) );


// Sidebar Bakcground Styles
start_headlines('sidebar_widgets_backgrounds', 'sidebar', 'sidebar_setting', 'style', 'Backgrounds', '35px');


Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'sidebar_wid_bg',
    'label'       => __( 'Widgets', 'start' ),
    'section'     => 'sidebar',
    'transport' => 'postMessage',
    'default'     => 'transparent',
    'choices'     => array(
        'alpha' => true,
    ),
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles #secondary .widget',
            'property' => 'background-color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles #secondary .widget',
        'function' => 'css',
        'property' => 'background-color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'sidebar_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );



/* Advanced Field */
start_no_options('sidebar_no_options', 'sidebar', 'sidebar_setting', 'advanced');

