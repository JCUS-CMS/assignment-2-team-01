<?php

/****************************************************
* Copyright Section
****************************************************/

// Copyright Tabs
start_tabs('copyright_setting', 'copyright');

start_shortcuts('copyright_shortcut', 'copyright', 'partial_copyright', '.site-footer .site-info .container');

/* Copyright General Fields */

Kirki::add_field( 'start', array(
    'type'        => 'select',
    'settings'    => 'global_copyright_content_layout',
    'label'       => __( 'Copyright Layout', 'start' ),
    'section'     => 'copyright',
    'transport' => 'auto',
    'default'     => 'bg-stretched',
    'choices'     => array(
        'container'         => esc_attr__( 'Boxed', 'start' ),
        'bg-stretched'   => esc_attr__( 'BG Stretched', 'start' ),
        'full-width'         => esc_attr__( 'Full Width', 'start' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'copyright_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
   ),
) );


// Footer Bar
Kirki::add_field( 'start', array(
    'type'     => 'textarea',
    'settings' => 'footer_copyright',
    'label'    => __( 'Copyright', 'start' ),
    'section'  => 'copyright',
    'transport' => 'auto',
    'default'  => __( 'Copyright &copy; 2017 | Powered by StartWP', 'start' ),
    'active_callback'  => array(
        array(
            'setting'  => 'copyright_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
   ),
) );


/* Copyright Style Fields */

// Copyright Text Styles
start_headlines('copyright_text_styles', 'copyright', 'copyright_setting', 'style', 'Content', '10px');

// Copyright Text Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'copyright_text_color',
    'label'       => __( 'Text', 'start' ),
    'section'     => 'copyright',
    'transport' => 'postMessage',
    'default'     => '#3a3a3a',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .site-footer .site-info',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .site-footer .site-info',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'copyright_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
   ),
) );

// Copyright Typography 
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'copyright_text_typography',
    'section'     => 'copyright',
    'transport' => 'auto',
    'default'     => array(
        'font-size'      => '17px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
        'text-align'     => 'center'
    ),
    'output'      => array(
        array(
            'element' => 'body.startwp-frontend-styles .site-footer .site-info',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'copyright_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
   ),
) );

// Copyright Backgrounds Styles
start_headlines('copyright_backgrounds_styles', 'copyright', 'copyright_setting', 'style', 'Backgrounds', '35px');

// Copyright BG Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'copyright_bg',
    'label'       => __( 'Copyright', 'start' ),
    'section'     => 'copyright',
    'transport' => 'postMessage',
    'default'     => '#D5D8DC',
    'choices'     => array(
        'alpha' => true,
    ),
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .site-info',
            'property' => 'background-color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .site-info',
        'function' => 'css',
        'property' => 'background-color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'copyright_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
   ),
) );

/* Copyright Advanced Fields */

// Copyright Padding
Kirki::add_field( 'start', array(
  'settings'  => 'copyright_spacing',
  'section'   => 'copyright',
  'label'     => esc_html__( 'Copyright Padding', 'start' ),
  'type'      => 'spacing',
  'default'   => array(
    'top'    => '10px',
    'right'  => '15px',
    'bottom' => '10px',
    'left'   => '15px',
  ),
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => 'body.startwp-frontend-styles .site-footer .site-info, body.startwp-frontend-styles .site-footer .site-info .container',
      'property' => 'padding',
    ),
  ),
  'active_callback'  => array(
        array(
            'setting'  => 'copyright_setting',
            'operator' => '==',
            'value'    => 'advanced',
        ),
   ),
) );