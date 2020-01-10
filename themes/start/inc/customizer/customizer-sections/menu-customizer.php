<?php

/****************************************************
* Menu Section
****************************************************/

// Menu Tabs
start_tabs('menu_setting', 'start_menu');

/* General Fields */
start_no_options('menu_general_no_options', 'start_menu', 'menu_setting', 'general');


// Top Menu Styles
start_headlines('top_menu_styles', 'start_menu', 'menu_setting', 'style', 'Top Level Menu', '10px');


// Menu BG Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'menu_bg',
    'label'       => __( 'Background', 'start' ),
    'section'     => 'start_menu',
    'transport' => 'postMessage',
    'default'     => 'transparent',
    'choices'     => array(
        'alpha' => true,
    ),
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_nav ul li a',
            'property' => 'background-color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_nav ul li a',
        'function' => 'css',
        'property' => 'background-color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'menu_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Menu Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'menu_color',
    'label'       => __( 'Text', 'start' ),
    'section'     => 'start_menu',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output'      => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_nav ul li a',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_nav ul li a',
            'function' => 'css',
            'property' => 'color',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'menu_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Menu BG Hover Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'menu_hover_bg',
    'label'       => __( 'Hover Background', 'start' ),
    'section'     => 'start_menu',
    'transport' => 'postMessage',
    'default'     => '#d5d8dc',
    'choices'     => array(
        'alpha' => true,
    ),
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_nav ul li a:hover, body.startwp-frontend-styles .start_nav ul li:hover a',
            'property' => 'background-color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_nav ul li a:hover, body.startwp-frontend-styles .start_nav ul li:hover a',
        'function' => 'css',
        'property' => 'background-color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'menu_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Menu Hover Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'menu_hover_color',
    'label'       => __( 'Hover Text', 'start' ),
    'section'     => 'start_menu',
    'transport' => 'postMessage',
    'default'     => '#0088CC',
    'output'      => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_nav ul li a:hover',
        'property' => 'color',
    ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_nav ul li a:hover',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'menu_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Menu BG Active Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'menu_active_bg',
    'label'       => __( 'Active Background', 'start' ),
    'section'     => 'start_menu',
    'transport' => 'postMessage',
    'default'     => '#d5d8dc',
    'choices'     => array(
        'alpha' => true,
    ),
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_nav ul li.current-menu-item a, body.startwp-frontend-styles .start_nav ul li.current_page_ancestor a',
            'property' => 'background-color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_nav ul li.current-menu-item a, body.startwp-frontend-styles .start_nav ul li.current_page_ancestor a',
        'function' => 'css',
        'property' => 'background-color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'menu_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Menu Active Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'menu_active_color',
    'label'       => __( 'Active Text', 'start' ),
    'section'     => 'start_menu',
    'transport' => 'postMessage',
    'default'     => '#0088CC',
    'output'      => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_nav ul li.current-menu-item a, body.startwp-frontend-styles .start_nav ul li.current_page_ancestor a',
        'property' => 'color',
    ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_nav ul li.current-menu-item a, body.startwp-frontend-styles .start_nav ul li.current_page_ancestor a',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'menu_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Menu Icon Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'menu_icon_color',
    'label'       => __( 'Icon Color', 'start' ),
    'section'     => 'start_menu',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_nav li a:after, body.startwp-frontend-styles .start_nav .sub_toggle',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_nav li a:after, body.startwp-frontend-styles .start_nav .sub_toggle',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'menu_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Top Level Menu Typography 
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'primary_menu_typography',
    'section'     => 'start_menu',
    'transport' => 'auto',
    'default'     => array(
        'font-family'    => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
        'variant'        => 'regular',
        'font-size'      => '16px',
        'line-height'    => '3.8',
        'letter-spacing' => '0',
        'text-transform' => 'none',
    ),
    'output'      => array(
        array(
            'element' => 'body.startwp-frontend-styles .start_nav ul li a',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'menu_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );


// Sub Menu Styles
start_headlines('submenu_styles', 'start_menu', 'menu_setting', 'style', 'Sub Menu', '35px');

// Menu Dropdown BG Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'menu_dropdown_bg',
    'label'       => __( 'Background', 'start' ),
    'section'     => 'start_menu',
    'transport' => 'postMessage',
    'default'     => '#d5d8dc',
    'choices'     => array(
        'alpha' => true,
    ),
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_nav ul.sub-menu li a',
            'property' => 'background-color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_nav ul.sub-menu li a',
        'function' => 'css',
        'property' => 'background-color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'menu_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Menu Dropdown Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'menu_dropdown_color',
    'label'       => __( 'Text', 'start' ),
    'section'     => 'start_menu',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output'      => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_nav ul.sub-menu li a',
        'property' => 'color',
    ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_nav ul.sub-menu li a',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'menu_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Menu Dropdown BG Hover Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'menu_dropdown_bg_hover',
    'label'       => __( 'Hover Background', 'start' ),
    'section'     => 'start_menu',
    'transport' => 'postMessage',
    'default'     => '#c7ccd0',
    'choices'     => array(
        'alpha' => true,
    ),
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_nav .sub-menu li a:hover',
            'property' => 'background-color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_nav .sub-menu li a:hover',
        'function' => 'css',
        'property' => 'background-color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'menu_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Menu Dropdown Hover Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'menu_dropdown_hover_color',
    'label'       => __( 'Hover Text', 'start' ),
    'section'     => 'start_menu',
    'transport' => 'postMessage',
    'default'     => '#0088CC',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_nav .sub-menu li a:hover',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_nav .sub-menu li a:hover',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'menu_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Menu Dropdown Active BG
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'menu_dropdown_active_bg',
    'label'       => __( 'Active Background', 'start' ),
    'section'     => 'start_menu',
    'transport' => 'postMessage',
    'default'     => '#c7ccd0',
    'choices'     => array(
        'alpha' => true,
    ),
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_nav .sub-menu li.current-menu-ancestor > a, body.startwp-frontend-styles .start_nav .sub-menu li.current_page_item > a',
            'property' => 'background-color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_nav .sub-menu li.current-menu-ancestor > a, body.startwp-frontend-styles .start_nav .sub-menu li.current_page_item > a',
        'function' => 'css',
        'property' => 'background-color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'menu_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Menu Dropdown Active Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'menu_dropdown_active_color',
    'label'       => __( 'Active Text', 'start' ),
    'section'     => 'start_menu',
    'transport' => 'postMessage',
    'default'     => '#0088CC',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_nav .sub-menu  li.current-menu-ancestor > a, body.startwp-frontend-styles .start_nav .sub-menu li.current_page_item > a',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_nav .sub-menu  li.current-menu-ancestor > a, body.startwp-frontend-styles .start_nav .sub-menu  li.current_page_item > a',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'menu_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Submenu Typography
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'submenu_typography',
    'section'     => 'start_menu',
    'transport' => 'auto',
    'default'     => array(
        'font-family'    => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
        'variant'        => 'regular',
        'font-size'      => '16px',
        'line-height'    => '3.8',
        'letter-spacing' => '0',
        'text-transform' => 'none',
    ),
    'output'      => array(
        array(
            'element' => 'body.startwp-frontend-styles .start_nav ul ul li a',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'menu_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );



// Mobile Menu Styles
start_headlines('mobilemenu_styles', 'start_menu', 'menu_setting', 'style', 'Mobile Menu', '35px');

// Mobile Menu Toggle Bg Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'mobile_menu_toggle_bg_color',
    'label'       => __( 'Menu Background', 'start' ),
    'section'     => 'start_menu',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'choices'     => array(
        'alpha' => true,
    ),
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_nav .menu_toggle',
            'property' => 'background-color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_nav .menu_toggle',
        'function' => 'css',
        'property' => 'background-color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'menu_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Mobile Menu Toggle Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'mobile_menu_toggle_color',
    'label'       => __( 'Menu Color', 'start' ),
    'section'     => 'start_menu',
    'transport' => 'postMessage',
    'default'     => '#ffffff',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_nav .menu_toggle',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_nav .menu_toggle',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'menu_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Mobile Menu Submenu Toggle Icon BG Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'mobile_menu_open_bg_color',
    'label'       => __( 'Toggle Icon Background', 'start' ),
    'section'     => 'start_menu',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'choices'     => array(
        'alpha' => true,
    ),
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_nav .sub_toggle',
            'property' => 'background-color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_nav .sub_toggle',
        'function' => 'css',
        'property' => 'background-color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'menu_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Mobile Menu Submenu Toggle Icon Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'mobile_menu_toggle_text_color',
    'label'       => __( 'Toggle Icon Color', 'start' ),
    'section'     => 'start_menu',
    'transport' => 'postMessage',
    'default'     => '#ffffff',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_nav .sub_toggle',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_nav .sub_toggle',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'menu_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );



/* General Fields */
start_no_options('menu_advance_no_options', 'start_menu', 'menu_setting', 'advanced');