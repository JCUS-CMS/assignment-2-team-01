<?php

/****************************************************
* General Section
****************************************************/

// General Tabs
start_tabs('general_setting', 'general');

// Content Layout
Kirki::add_field( 'start', array(
    'type'        => 'select',
    'settings'    => 'global_content_layout',
    'label'       => __( 'Content Layout', 'start' ),
    'section'     => 'general',
    'transport' => 'auto',
    'default'     => 'bg-stretched',
    'choices'     => array(
        'container'         => esc_attr__( 'Boxed', 'start' ),
        'bg-stretched'   => esc_attr__( 'BG Stretched', 'start' ),
        'full-width'         => esc_attr__( 'Full Width', 'start' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );


// Site Width
Kirki::add_field( 'start', array(
    'type'        => 'slider',
    'settings'    => 'site_width',
    'label'       => __( 'Container Width', 'start' ),
    'section'     => 'general',
    'default'     => 1170,
    'transport' => 'postMessage',
    'choices'     => array(
        'min'  => '700',
        'max'  => '2000',
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
    'output' => array(
        array(
            'element'  => '.container',
            'property' => 'max-width',
            'units'    => 'px',
        ),
    ),
    'js_vars'   => array(
        array(
            'element'  => '.container',
            'function' => 'css',
            'property' => 'max-width',
            'units'    => 'px',
        ),
    ),
) );


/* General Styles Fields */

// Base Styles
start_headlines('base_styles', 'general', 'general_setting', 'style', 'Base', '10px');

// Body Text Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'body_text_color',
    'label'       => __( 'Text', 'start' ),
    'section'     => 'general',
    'transport' => 'postMessage',
    'default'     => '#3a3a3a',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles, .editor-styles-wrapper .editor-writing-flow',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles, .editor-styles-wrapper .editor-writing-flow',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Link Color / Link Visited
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'link_color',
    'label'       => __( 'Link', 'start' ),
    'section'     => 'general',
    'transport' => 'postMessage',
    'default'     => '#1e73be',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles a:not(.wp-block-button__link), body.startwp-frontend-styles a:not(.wp-block-button__link):visited, .editor-styles-wrapper .editor-writing-flow a:not(.wp-block-button__link), .editor-styles-wrapper .editor-writing-flow a:not(.wp-block-button__link):visited',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles a:not(.wp-block-button__link), body.startwp-frontend-styles a:not(.wp-block-button__link):visited, .editor-styles-wrapper .editor-writing-flow a:not(.wp-block-button__link), .editor-styles-wrapper .editor-writing-flow a:not(.wp-block-button__link):visited',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Link Hover Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'link_hover_color',
    'label'       => __( 'Link Hover', 'start' ),
    'section'     => 'general',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles a:hover:not(.wp-block-button__link), .editor-styles-wrapper .editor-writing-flow a:hover:not(.wp-block-button__link)',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles a:hover:not(.wp-block-button__link), .editor-styles-wrapper .editor-writing-flow a:hover:not(.wp-block-button__link)',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Body Typography
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'body_typography',
    'section'     => 'general',
    'transport' => 'auto',
    'default'     => array(
        'font-family'    => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
        'variant'        => 'regular',
        'font-size'      => '17px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'subsets'        => array( 'latin-ext' ),
    ),
    'output'      => array(
        array(
            'element' => 'body.startwp-frontend-styles, .editor-styles-wrapper .editor-writing-flow',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );



// Headlines Styles
start_headlines('heading_styles', 'general', 'general_setting', 'style', 'Headings', '35px');

// Headings Typography
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'headings_typography',
    'section'     => 'general',
    'transport' => 'auto',
    'default'     => array(
        'font-family'    => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
        'variant'        => 'regular',
    ),
    'output'      => array(
        array(
            'element' => array( 'body.startwp-frontend-styles h1', 'body.startwp-frontend-styles h2', 'body.startwp-frontend-styles h3', 'body.startwp-frontend-styles h4', 'body.startwp-frontend-styles h5', 'body.startwp-frontend-styles h6', '.editor-styles-wrapper .editor-writing-flow h1', '.editor-styles-wrapper .editor-writing-flow h2', '.editor-styles-wrapper .editor-writing-flow h3', '.editor-styles-wrapper .editor-writing-flow h4', '.editor-styles-wrapper .editor-writing-flow h5', '.editor-styles-wrapper .editor-writing-flow h6', '.editor-styles-wrapper .editor-writing-flow .editor-post-title__input' ),
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

Kirki::add_field( 'start', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'headings_setting',
    'section'     => 'general',
    'default'     => 'h1',
    'transport'   => 'postMessage',
    'choices'     => array(
        'h1'   => esc_attr__( 'H1', 'start' ),
        'h2'   => esc_attr__( 'H2', 'start' ),
        'h3'   => esc_attr__( 'H3', 'start' ),
        'h4'   => esc_attr__( 'H4', 'start' ),
        'h5'   => esc_attr__( 'H5', 'start' ),
        'h6'   => esc_attr__( 'H6', 'start' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// H1 Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'h1_color',
    'section'     => 'general',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles h1, .editor-styles-wrapper .editor-writing-flow h1, .editor-styles-wrapper .editor-writing-flow .editor-post-title__input',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles h1, .editor-styles-wrapper .editor-writing-flow h1, .editor-styles-wrapper .editor-writing-flow .editor-post-title__input',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
        array(
            'setting'  => 'headings_setting',
            'operator' => '==',
            'value'    => 'h1',
        ),
    ),
) );

// H2 Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'h2_color',
    'section'     => 'general',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles h2, .editor-styles-wrapper .editor-writing-flow h2',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles h2, .editor-styles-wrapper .editor-writing-flow h2',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
        array(
            'setting'  => 'headings_setting',
            'operator' => '==',
            'value'    => 'h2',
        ),
    ),
) );

// H3 Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'h3_color',
    'section'     => 'general',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles h3, .editor-styles-wrapper .editor-writing-flow h3',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles h3, .editor-styles-wrapper .editor-writing-flow h3',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
        array(
            'setting'  => 'headings_setting',
            'operator' => '==',
            'value'    => 'h3',
        ),
    ),
) );

// H4 Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'h4_color',
    'section'     => 'general',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles h4, .editor-styles-wrapper .editor-writing-flow h4',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles h4, .editor-styles-wrapper .editor-writing-flow h4',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
        array(
            'setting'  => 'headings_setting',
            'operator' => '==',
            'value'    => 'h4',
        ),
    ),
) );

// H5 Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'h5_color',
    'section'     => 'general',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles h5, .editor-styles-wrapper .editor-writing-flow h5',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles h5, .editor-styles-wrapper .editor-writing-flow h5',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
        array(
            'setting'  => 'headings_setting',
            'operator' => '==',
            'value'    => 'h5',
        ),
    ),
) );

// H6 Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'h6_color',
    'section'     => 'general',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles h6, .editor-styles-wrapper .editor-writing-flow h6',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles h6, .editor-styles-wrapper .editor-writing-flow h6',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
        array(
            'setting'  => 'headings_setting',
            'operator' => '==',
            'value'    => 'h6',
        ),
    ),
) );

// Heading H1
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'h1_typography',
    'section'     => 'general',
    'transport' => 'auto',
    'default'     => array(
        'font-size'      => '48px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
    ),
    'output'      => array(
        array(
            'element' => 'body.startwp-frontend-styles h1, .editor-styles-wrapper .editor-writing-flow h1, .editor-styles-wrapper .editor-writing-flow .editor-post-title__input',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
        array(
            'setting'  => 'headings_setting',
            'operator' => '==',
            'value'    => 'h1',
        ),
    ),
) );

// Heading H2
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'h2_typography',
    'section'     => 'general',
    'transport' => 'auto',
    'default'     => array(
        'font-size'      => '42px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
    ),
    'output'      => array(
        array(
            'element' => 'body.startwp-frontend-styles h2, .editor-styles-wrapper .editor-writing-flow h2',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
        array(
            'setting'  => 'headings_setting',
            'operator' => '==',
            'value'    => 'h2',
        ),
    ),
) );

// Heading H3
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'h3_typography',
    'section'     => 'general',
    'transport' => 'auto',
    'default'     => array(
        'font-size'      => '30px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
    ),
    'output'      => array(
        array(
            'element' => 'body.startwp-frontend-styles h3, .editor-styles-wrapper .editor-writing-flow h3',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
        array(
            'setting'  => 'headings_setting',
            'operator' => '==',
            'value'    => 'h3',
        ),
    ),
) );

// Heading H4
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'h4_typography',
    'section'     => 'general',
    'transport' => 'auto',
    'default'     => array(
        'font-size'      => '20px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
    ),
    'output'      => array(
        array(
            'element' => 'body.startwp-frontend-styles h4, .editor-styles-wrapper .editor-writing-flow h4',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
        array(
            'setting'  => 'headings_setting',
            'operator' => '==',
            'value'    => 'h4',
        ),
    ),
) );

// Heading H5
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'h5_typography',
    'section'     => 'general',
    'transport' => 'auto',
    'default'     => array(
        'font-size'      => '18px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
    ),
    'output'      => array(
        array(
            'element' => 'body.startwp-frontend-styles h5, .editor-styles-wrapper .editor-writing-flow h5',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
        array(
            'setting'  => 'headings_setting',
            'operator' => '==',
            'value'    => 'h5',
        ),
    ),
) );

// Heading H6
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'h6_typography',
    'section'     => 'general',
    'transport' => 'auto',
    'default'     => array(
        'font-size'      => '15px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
    ),
    'output'      => array(
        array(
            'element' => 'body.startwp-frontend-styles h6, .editor-styles-wrapper .editor-writing-flow h6',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
        array(
            'setting'  => 'headings_setting',
            'operator' => '==',
            'value'    => 'h6',
        ),
    ),
) );

// General backgrounds Styles
start_headlines('background_styles', 'general', 'general_setting', 'style', 'Backgrounds', '35px');

// Body BG Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'body_bg',
    'label'       => __( 'Body', 'start' ),
    'section'     => 'general',
    'transport' => 'postMessage',
    'default'     => '#ffffff',
    'choices'     => array(
        'alpha' => true,
    ),
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles',
            'property' => 'background-color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles',
        'function' => 'css',
        'property' => 'background-color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Container BG Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'container_bg',
    'label'       => __( 'Content', 'start' ),
    'section'     => 'general',
    'transport' => 'postMessage',
    'default'     => 'transparent',
    'choices'     => array(
        'alpha' => true,
    ),
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .site-content, .editor-styles-wrapper',
            'property' => 'background-color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .site-content, .editor-styles-wrapper',
        'function' => 'css',
        'property' => 'background-color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );


/* General advance Fields */
Kirki::add_field( 'start', array(
  'settings'  => 'content_spacing',
  'section'   => 'general',
  'label'     => esc_html__( 'Container Padding', 'start' ),
  'type'      => 'spacing',
  'default'   => array(
    'top'    => '40px',
    'right'  => '15px',
    'bottom' => '40px',
    'left'   => '15px',
  ),
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => 'body.startwp-frontend-styles .site-content',
      'property' => 'padding',
    ),
  ),
  'active_callback'  => array(
        array(
            'setting'  => 'general_setting',
            'operator' => '==',
            'value'    => 'advanced',
        ),
    ),
) );