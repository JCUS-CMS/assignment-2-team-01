<?php


/****************************************************
* 404 Fields
****************************************************/

// 404 Tabs
start_tabs('404_setting', '404');

start_shortcuts('404_shortcut', '404', 'partial_404', '.page_404 .error-404');

// 404 Image
Kirki::add_field( 'start', array(
	'type'        => 'image',
	'settings'    => '404_image',
	'section'     => '404',
	'active_callback'  => array(
        array(
            'setting'  => '404_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
   ),
) );

// 404 Title
Kirki::add_field( 'start', array(
    'type'     => 'text',
    'settings' => '404_title',
    'label'    => __( 'Title', 'start' ),
    'section'  => '404',
    'transport' => 'auto',
    'default'  => __( 'Oops! That page can’t be found.', 'start' ),
    'active_callback'  => array(
        array(
            'setting'  => '404_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
   ),
) );


// 404 Description
Kirki::add_field( 'start', array(
    'type'     => 'textarea',
    'settings' => '404_description',
    'label'    => __( 'Description', 'start' ),
    'section'  => '404',
    'transport' => 'auto',
    'default'  => __( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'start' ),
    'active_callback'  => array(
        array(
            'setting'  => '404_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
   ),
) );

// Button Text
Kirki::add_field( 'start', array(
    'type'     => 'text',
    'settings' => '404_button',
    'label'    => __( 'Button Text', 'start' ),
    'section'  => '404',
    'transport' => 'auto',
    'default'  => __( 'Back To Home', 'start' ),
    'active_callback'  => array(
        array(
            'setting'  => '404_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
   ),
) );


// Button Icon Show / Hide
Kirki::add_field( 'start', array(
    'type'        => 'toggle',
    'settings'    => '404_button_icon_toggle',
    'label'       => __( 'Use Button Icon', 'start' ),
    'section'     => '404',
    'default'     => '1',
    'active_callback'  => array(
        array(
            'setting'  => '404_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Button Icon Left / Right
Kirki::add_field( 'start', array(
    'type'        => 'radio-buttonset',
    'settings'    => '404_button_icon_position',
    'label'       => __( 'Button Icon Position', 'start' ),
    'section'     => '404',
    'transport' => 'auto',
    'default'     => 'icon_right',
    'choices'     => array(
        'icon_left'   => esc_attr__( 'Icon Left', 'start' ),
        'icon_right' => esc_attr__( 'Icon Right', 'start' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => '404_button_icon_toggle',
            'operator' => '==',
            'value'    => '1',
        ),
        array(
            'setting'  => '404_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Button Icon Left
Kirki::add_field( 'start', array(
    'type'        => 'radio-buttonset',
    'settings'    => '404_button_left_icon',
    'label'       => __( 'Left Icon', 'start' ),
    'section'     => '404',
    'transport' => 'auto',
    'default'     => '&#171;',
    'choices'     => array(
        '&#171;'   => esc_attr__( '«', 'start' ),
        '&#8249;' => esc_attr__( '‹', 'start' ),
        '&#8592;' => esc_attr__( '←', 'start' ),
        '&#9668;' => esc_attr__( '◄', 'start' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => '404_button_icon_position',
            'operator' => '==',
            'value'    => 'icon_left',
        ),
         array(
            'setting'  => '404_button_icon_toggle',
            'operator' => '==',
            'value'    => '1',
        ),
        array(
            'setting'  => '404_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Button Icon Right
Kirki::add_field( 'start', array(
    'type'        => 'radio-buttonset',
    'settings'    => '404_button_right_icon',
    'label'       => __( 'Right Icon', 'start' ),
    'section'     => '404',
    'transport' => 'auto',
    'default'     => '&#187;',
    'choices'     => array(
        '&#187;'   => esc_attr__( '»', 'start' ),
        '&#8250;' => esc_attr__( '›', 'start' ),
        '&#8594;' => esc_attr__( '→', 'start' ),
        '&#9658;' => esc_attr__( '►', 'start' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => '404_button_icon_position',
            'operator' => '==',
            'value'    => 'icon_right',
        ),
        array(
            'setting'  => '404_button_icon_toggle',
            'operator' => '==',
            'value'    => '1',
        ),
        array(
            'setting'  => '404_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );


/*********** Style Fields ***********/

// Title Styles
start_headlines('404_title_styles', '404', '404_setting', 'style', 'Title', '10px');

// 404 Title Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => '404_title_color',
    'label'       => __( 'Title', 'start' ),
    'section'     => '404',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .error-404 .page-header .page-title',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .error-404 .page-header .page-title',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => '404_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// 404 Title Typography
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => '404_title_typography',
    'section'     => '404',
    'transport' => 'auto',
    'default'     => array(
        'font-family'    => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
        'font-size'      => '48px',
        'line-height'    => '1',
        'letter-spacing' => '0',
        'text-transform' => 'none',
    ),
    'output'      => array(
        array(
            'element' => 'body.startwp-frontend-styles .error-404 .page-header .page-title',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => '404_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );


// Description Styles
start_headlines('404_desc_styles', '404', '404_setting', 'style', 'Description', '10px');


// 404 Description Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => '404_desc_color',
    'label'       => __( 'Description', 'start' ),
    'section'     => '404',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .error-404 .page-content',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .error-404 .page-content',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => '404_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// 404 Description Typography
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => '404_desc_typography',
    'section'     => '404',
    'transport' => 'auto',
    'default'     => array(
        'font-family'    => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
        'font-size'      => '17px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
    ),
    'output'      => array(
        array(
            'element' => 'body.startwp-frontend-styles .error-404 .page-content',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => '404_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

	
// 404 Button Styles
start_headlines('404_btn_styles', '404', '404_setting', 'style', 'Button', '35px');

// 404 Button BG Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => '404_btn_bg_color',
    'label'       => __( 'Background', 'start' ),
    'section'     => '404',
    'transport' => 'postMessage',
    'default'     => '#e5e8e8',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .error-404 .page-content .read-more',
            'property' => 'background',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .error-404 .page-content .read-more',
        'function' => 'css',
        'property' => 'background',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => '404_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// 404 Button Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => '404_btn_color',
    'label'       => __( 'Text', 'start' ),
    'section'     => '404',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .error-404 .page-content .read-more',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .error-404 .page-content .read-more',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => '404_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// 404 Button Hover BG Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => '404_btn_hover_bg_color',
    'label'       => __( 'Hover Background', 'start' ),
    'section'     => '404',
    'transport' => 'postMessage',
    'default'     => '#cfd7cf',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .error-404 .page-content .read-more:hover',
            'property' => 'background',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .error-404 .page-content .read-more:hover',
        'function' => 'css',
        'property' => 'background',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => '404_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// 404 Button Hover Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => '404_btn_hover_color',
    'label'       => __( 'Hover Text', 'start' ),
    'section'     => '404',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .error-404 .page-content .read-more:hover',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .error-404 .page-content .read-more:hover',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => '404_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// 404 Button Typography
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => '404_btn_typography',
    'section'     => '404',
    'transport' => 'auto',
    'default'     => array(
        'font-family'    => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
        'font-size'      => '16px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
    ),
    'output'      => array(
        array(
            'element' => 'body.startwp-frontend-styles .error-404 .page-content .read-more',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => '404_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );


// Backgrounds
start_headlines('404_backgrounds', '404', '404_setting', 'style', 'Backgrounds', '35px');

Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => '404_bg',
    'label'       => __( 'Background', 'start' ),
    'section'     => '404',
    'transport' => 'postMessage',
    'choices'     => array(
        'alpha' => true,
    ),
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .error404',
            'property' => 'background-color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .error404',
        'function' => 'css',
        'property' => 'background-color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => '404_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
   ),
) );


/* General Fields */
start_no_options('404_advanced_no_options', '404', '404_setting', 'advanced');