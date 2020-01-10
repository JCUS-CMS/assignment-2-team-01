<?php

/****************************************************
* Footer Section
****************************************************/

// Footer Tabs
start_tabs('footer_setting', 'footer');

start_shortcuts('footer_shortcut', 'footer', 'partial_footer', '.site-footer .footer-area .container');

/* Footer general Fields */

Kirki::add_field( 'start', array(
    'type'        => 'select',
    'settings'    => 'global_footer_content_layout',
    'label'       => __( 'Footer Layout', 'start' ),
    'section'     => 'footer',
    'transport' => 'auto',
    'default'     => 'bg-stretched',
    'choices'     => array(
        'container'         => esc_attr__( 'Boxed', 'start' ),
        'bg-stretched'   => esc_attr__( 'BG Stretched', 'start' ),
        'full-width'         => esc_attr__( 'Full Width', 'start' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'footer_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
   ),
) );

// Footer Layout
Kirki::add_field( 'start', array(
    'type'        => 'select',
    'settings'    => 'footer_layout',
    'label'       => __( 'Footer Widgets', 'start' ),
    'section'     => 'footer',
    'transport' => 'auto',
    'default'     => 'footer-no',
    'choices'     => array(
        'footer-no'   => esc_attr__( 'Disable', 'start' ),
        'footer-one' => esc_attr__( 'One', 'start' ),
        'footer-two'  => esc_attr__( 'Two', 'start' ),
        'footer-three'  => esc_attr__( 'Three', 'start' ),
        'footer-four'  => esc_attr__( 'Four', 'start' ),

    ),
    'active_callback'  => array(
        array(
            'setting'  => 'footer_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
   ),
) );

// Footer Gutter Spacing
Kirki::add_field( 'start', array(
    'type'        => 'slider',
    'settings'    => 'footer_gutter',
    'label'       => __( 'Gutter Spacing', 'start' ),
    'section'     => 'footer',
    'transport' => 'postMessage',
    'default'     => 15,
    'choices'     => array(
        'min'  => '0',
        'max'  => '100',
        'step' => '1',
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'footer_layout',
            'operator' => '!=',
            'value'    => 'footer-no',
        ),
        array(
            'setting'  => 'footer_layout',
            'operator' => '!=',
            'value'    => 'footer-one',
        ),
        array(
            'setting'  => 'footer_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .site-footer .footer-area .footer-two, body.startwp-frontend-styles .site-footer .footer-area .footer-three, body.startwp-frontend-styles .site-footer .footer-area .footer-four',
            'property' => 'grid-column-gap',
            'units'    => 'px',
        ),
    ),
    'js_vars'   => array(
        array(
            'element'  => 'body.startwp-frontend-styles .site-footer .footer-area .footer-two, body.startwp-frontend-styles .site-footer .footer-area .footer-three, body.startwp-frontend-styles .site-footer .footer-area .footer-four',
            'function' => 'css',
            'property' => 'grid-column-gap',
            'units'    => 'px',
        ),
    )
) );


/* Footer Style Fields */

// Footer Title Styles
start_headlines('footer_title_styles', 'footer', 'footer_setting', 'style', 'Widget Title', '10px');

// Footer Title Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'footer_title_color',
    'label'       => __( 'Title', 'start' ),
    'section'     => 'footer',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .site-footer .widget-title',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .site-footer .widget-title',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'footer_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
   ),
) );

// Footer Widgets Titles
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'widgets_title_typography',
    'section'     => 'footer',
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
            'element' => 'body.startwp-frontend-styles .site-footer .widget-title',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'footer_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
   ),
) );

// Footer Text Styles
start_headlines('footer_text_styles', 'footer', 'footer_setting', 'style', 'Widget Text', '35px');

// Footer Text Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'footer_text_color',
    'label'       => __( 'Text', 'start' ),
    'section'     => 'footer',
    'transport' => 'postMessage',
    'default'     => '#3a3a3a',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .site-footer .widget',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .site-footer .widget',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'footer_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
   ),
) );

// Footer Widgets Text 
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'widgets_text_typography',
    'section'     => 'footer',
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
            'element' => 'body.startwp-frontend-styles .site-footer .widget',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'footer_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
   ),
) );

// Footer Backgrounds Styles
start_headlines('footer_backgrounds_styles', 'footer', 'footer_setting', 'style', 'Backgrounds', '35px');

// Footer BG Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'footer_bg',
    'label'       => __( 'Footer', 'start' ),
    'section'     => 'footer',
    'transport' => 'postMessage',
    'default'     => '#E5E8E8',
    'choices'     => array(
        'alpha' => true,
    ),
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .site-footer .footer-area',
            'property' => 'background-color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .site-footer .footer-area',
        'function' => 'css',
        'property' => 'background-color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'footer_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
   ),
) );


/* Footer Advanced Fields */

// Footer Padding
Kirki::add_field( 'start', array(
  'settings'  => 'footer_spacing',
  'section'   => 'footer',
  'label'     => esc_html__( 'Footer Padding', 'start' ),
  'type'      => 'spacing',
  'default'   => array(
    'top'    => '30px',
    'right'  => '15px',
    'bottom' => '30px',
    'left'   => '15px',
  ),
  'transport' => 'auto',
  'active_callback'  => array(
    array(
        'setting'  => 'footer_setting',
        'operator' => '==',
        'value'    => 'advanced',
    ),
  ),
  'output'    => array(
    array(
      'element'  => 'body.startwp-frontend-styles .site-footer .footer-area .footer-one, body.startwp-frontend-styles .site-footer .footer-area .footer-two, body.startwp-frontend-styles .site-footer .footer-area .footer-three, body.startwp-frontend-styles .site-footer .footer-area .footer-four',
      'property' => 'padding',
    ),
  ),
) );