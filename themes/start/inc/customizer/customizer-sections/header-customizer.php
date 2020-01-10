<?php

/****************************************************
* Header Fields
****************************************************/

// Header Tabs
start_tabs('header_setting', 'header');

start_shortcuts('header_shortcut', 'header', 'partial_header', '.site-header .container');

Kirki::add_field( 'start', array(
    'type'        => 'select',
    'settings'    => 'global_header_content_layout',
    'label'       => __( 'Header Layout', 'start' ),
    'section'     => 'header',
    'transport' => 'auto',
    'default'     => 'bg-stretched',
    'choices'     => array(
        'container'         => esc_attr__( 'Boxed', 'start' ),
        'bg-stretched'   => esc_attr__( 'BG Stretched', 'start' ),
        'full-width'         => esc_attr__( 'Full Width', 'start' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'header_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

Kirki::add_field( 'start', array(
    'type'        => 'select',
    'settings'    => 'header_layout',
    'label'       => __( 'Header Style', 'start' ),
    'section'     => 'header',
    'transport' => 'auto',
    'default'     => 'header-left',
    'choices'     => array(
        'header-left'   => esc_attr__( 'Logo Left - Menu Right', 'start' ),
        'header-center' => esc_attr__( 'All Center', 'start' ),
        'header-right'  => esc_attr__( 'Logo Right - Menu Left', 'start' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'header_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );


// Transparent Header
Kirki::add_field( 'start', array(
    'type'        => 'toggle',
    'settings'    => 'transparent_header',
    'label'       => esc_attr__( 'Overlap Header', 'start' ),
    'help' => 'Hint: Enable this to make a transparent header effect. Adjust the header opacity via header background option under design tab.',
    'section'     => 'header',
    'default'     => '0',
    'active_callback'  => array(
        array(
            'setting'  => 'header_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
    'output'  => array(
        array(
            'element'          => 'body.startwp-frontend-styles .site-header',
            'property'         => 'position',
            'value_pattern'    => 'absolute',
            // 'suffix'          => ' !important',
            'exclude' => array( false ),
        ),
        array(
            'element'          => 'body.startwp-frontend-styles .site-header',
            'property'         => 'width',
            'value_pattern'    => '100%',
            'exclude' => array( false ),
        ),
        array(
            'element'          => 'body.startwp-frontend-styles .site-header',
            'property'         => 'left',
            'value_pattern'    => '0 ',
            'exclude' => array( false ),
        ),
        array(
            'element'          => 'body.startwp-frontend-styles .site-header',
            'property'         => 'right',
            'value_pattern'    => '0 ',
            'exclude' => array( false ),
        ),
    ),


) );

// Sticky Header
Kirki::add_field( 'start', array(
    'type'        => 'toggle',
    'settings'    => 'sticky_header',
    'label'       => esc_attr__( 'Make Header Sticky', 'start' ),
    'section'     => 'header',
    'default'     => '0',
    'active_callback'  => array(
        array(
            'setting'  => 'header_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Select Stickey Header
Kirki::add_field( 'start', array(
    'type'        => 'select',
    'settings'    => 'select_sticky_header',
    'label'       => __( 'Sticky Header Styles', 'start' ),
    'section'     => 'header',
    'transport' => 'auto',
    'default'     => 'always_visible',
    'choices'     => array(
        'always_visible' => esc_attr__( 'Always Visible', 'start' ),
        'visible_scroll_up'   => esc_attr__( 'Visible on Scroll Up', 'start' ),
        'visible_scroll_down'  => esc_attr__( 'Visible on Scroll Down', 'start' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'header_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
        array(
            'setting'  => 'sticky_header',
            'operator' => '==',
            'value'    => '1',
        ),
    ),
) );


// Site Title Styles
start_headlines('site_title_styles', 'header', 'header_setting', 'style', 'Site Title', '10px');

// Site Title Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'site_title_color',
    'label'       => __( 'Title', 'start' ),
    'section'     => 'header',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .site-header .site-title a',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .site-header .site-title a',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'header_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Site Title Hover Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'site_title_hover_color',
    'label'       => __( 'Title Hover', 'start' ),
    'section'     => 'header',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .site-header .site-title a:hover',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .site-header .site-title a:hover',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'header_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Site Title Typography
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'header_site_title',
    'section'     => 'header',
    'transport' => 'auto',
    'default'     => array(
        'font-family'    => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
        'variant'        => '700',
        'font-size'      => '45px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
    ),
    'output'      => array(
        array(
            'element' => 'body.startwp-frontend-styles .site-header .site-title a',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'header_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Site Description Styles
start_headlines('site_desc_styles', 'header', 'header_setting', 'style', 'Site Description', '35px');

// Site Description Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'site_description_color',
    'label'       => __( 'Description', 'start' ),
    'section'     => 'header',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .site-description',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .site-description',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'header_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Site Description Typography
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'header_site_description',
    'section'     => 'header',
    'transport' => 'auto',
    'default'     => array(
        'font-family'    => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
        'font-size'      => '14px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
    ),
    'output'      => array(
        array(
            'element' => 'body.startwp-frontend-styles .site-description',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'header_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Header Backgrounds
start_headlines('header_backgrounds', 'header', 'header_setting', 'style', 'Backgrounds', '35px');

Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'header_bg',
    'label'       => __( 'Header', 'start' ),
    'section'     => 'header',
    'transport' => 'postMessage',
    'default'     => '#E5E8E8',
    'choices'     => array(
        'alpha' => true,
    ),
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .site-header',
            'property' => 'background-color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .site-header',
        'function' => 'css',
        'property' => 'background-color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'header_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

Kirki::add_field( 'start', array(
  'settings'  => 'header_spacing',
  'section'   => 'header',
  'label'     => esc_html__( 'Header Padding', 'start' ),
  'type'      => 'spacing',
  'default'   => array(
    'top'    => '20px',
    'right'  => '15px',
    'bottom' => '20px',
    'left'   => '15px',
  ),
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => 'body.startwp-frontend-styles .site-header .header-left, body.startwp-frontend-styles .site-header .header-center, body.startwp-frontend-styles .site-header .header-right',
      'property' => 'padding',
    ),
  ),
  'active_callback'  => array(
        array(
            'setting'  => 'header_setting',
            'operator' => '==',
            'value'    => 'advanced',
        ),
    ),
) );