<?php

/****************************************************
* Search Fields
****************************************************/

// Search Tabs
start_tabs('search_archive_setting', 'search_archive');

start_shortcuts('search_shortcut', 'search_archive', 'partial_404', '.page_404 .error-404');

// Search / Archive Options
start_headlines('search_archive_options', 'search_archive', 'search_archive_setting', 'general', 'Search / Archive', '10px');

// Search Headline
Kirki::add_field( 'start', array(
    'type'     => 'textarea',
    'settings' => 'search_headline',
    'label'    => __( 'Search Headline', 'start' ),
    'section'  => 'search_archive',
    'transport' => 'auto',
    'default'  => __( 'Search Results for', 'start' ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
   ),
) );

// Search / Archive Layout
Kirki::add_field( 'start', array(
    'type'        => 'sortable',
    'settings'    => 'search_posts_layout',
    'label'       => __( 'Search Posts Layout', 'start' ),
    'section'     => 'search_archive',
    'default'     => array(
        'thumbnail',
        'title',
        'meta',
        'content'
    ),
    'choices'     => array(
        'thumbnail' => __( 'Featured Image', 'start' ),
        'title'          => __( 'Title', 'start' ),
        'meta'           => __( 'Meta', 'start' ),
        'content'        => __( 'Content', 'start' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Search / Archive Meta Layout
Kirki::add_field( 'start', array(
    'type'        => 'sortable',
    'settings'    => 'search_posts_meta_layout',
    'label'       => __( 'Search Posts Meta Layout', 'start' ),
    'section'     => 'search_archive',
    'default'     => array(
        'author',
        'date',
        'category',        
        'comments'
    ),
    'choices'     => array(
        'author' => __( 'Author', 'start' ),
        'date'           => __( 'Date', 'start' ),
        'category'          => __( 'Category', 'start' ),
        'comments'        => __( 'Comments', 'start' ),
        'tags'        => __( 'Tags', 'start' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Link Post Titles
Kirki::add_field( 'start', array(
    'type'        => 'toggle',
    'settings'    => 'search_archive_title_linkable',
    'label'       => __( 'Link Title', 'start' ),
    'section'     => 'search_archive',
    'default'     => '1',
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Link Post Thumbnails
Kirki::add_field( 'start', array(
    'type'        => 'toggle',
    'settings'    => 'search_archive_thumbnail_linkable',
    'label'       => __( 'Link Thumbnail', 'start' ),
    'section'     => 'search_archive',
    'default'     => '1',
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Search / Archive / Single Meta seprator
Kirki::add_field( 'start', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'search_archive_single_meta_sep',
    'label'       => __( 'Meta Separator Icon', 'start' ),
    'section'     => 'search_archive',
    'transport' => 'auto',
    'default'     => '/',
     'suffix'   => '"',
    'choices'     => array(
        '/'   => esc_attr__( '/', 'start' ),
        '-' => esc_attr__( '-', 'start' ),
        '|' => esc_attr__( '|', 'start' ),
    ),
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .search_blog .entry-meta span::after',
            'property' => 'content',
            'prefix'   => '"',
            'suffix'   => '"',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => 'body.startwp-frontend-styles .search_blog .entry-meta span::after',
            'function' => 'css',
            'property' => 'content',
            'prefix'   => '"',
            'suffix'   => '"',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Search / Archive Excerpt / Content
Kirki::add_field( 'start', array(
    'type'        => 'select',
    'settings'    => 'search_archive_content_excerpt',
    'label'       => __( 'Content / Excerpt', 'start' ),
    'section'     => 'search_archive',
    'default'     => 'search_archive_excerpt',
    'multiple'    => 1,
    'choices'     => array(
        'search_archive_excerpt' => esc_attr__( 'Excerpt', 'start' ),
        'search_archive_content' => esc_attr__( 'Content', 'start' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Search / Archive Excerpt Length
Kirki::add_field( 'start', array(
    'type'        => 'number',
    'settings'    => 'search_archive_excerpt_length',
    'label'       => esc_attr__( 'Excerpt Length', 'start' ),
    'section'     => 'search_archive',
    'default'     => 55,
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_content_excerpt',
            'operator' => '==',
            'value'    => 'search_archive_excerpt',
        ),
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Search / Archive Button Headline
Kirki::add_field( 'start', array(
    'type'        => 'custom',
    'settings'    => 'search_button_headline',
    'section'     => 'search_archive',
    'default'     => '<div style="border-bottom: 1px solid #d5d8dc;line-height: 2em;font-size: 20px;text-transform: capitalize; font-weight: 600;">' . esc_html__( 'Read More', 'start' ) . '</div>',
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_content_excerpt',
            'operator' => '==',
            'value'    => 'search_archive_excerpt',
        ),
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Search Archive Button Text
Kirki::add_field( 'start', array(
    'type'     => 'text',
    'settings' => 'search_btn_text',
    'label'    => __( 'Button Text', 'start' ),
    'section'  => 'search_archive',
    'transport' => 'auto',
    'default'  => __( 'Read More', 'start' ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_content_excerpt',
            'operator' => '==',
            'value'    => 'search_archive_excerpt',
        ),
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Search Archive Button Position
Kirki::add_field( 'start', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'search_archive_button_position',
    'label'       => __( 'Button Position', 'start' ),
    'section'     => 'search_archive',
    'transport' => 'auto',
    'default'     => 'btn_left',
    'choices'     => array(
        'btn_left'   => esc_attr__( 'Left', 'start' ),
        'btn_right' => esc_attr__( 'Right', 'start' ),
        'btn_full' => esc_attr__( 'Full Width', 'start' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_content_excerpt',
            'operator' => '==',
            'value'    => 'search_archive_excerpt',
        ),
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Search Archive Button Icon Show / Hide
Kirki::add_field( 'start', array(
    'type'        => 'toggle',
    'settings'    => 'search_archive_button_icon_toggle',
    'label'       => __( 'Use Button Icon', 'start' ),
    'section'     => 'search_archive',
    'default'     => '1',
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_content_excerpt',
            'operator' => '==',
            'value'    => 'search_archive_excerpt',
        ),
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Search Archive Button Icon Left / Right
Kirki::add_field( 'start', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'search_archive_button_icon_position',
    'label'       => __( 'Button Icon Position', 'start' ),
    'section'     => 'search_archive',
    'transport' => 'auto',
    'default'     => 'icon_right',
    'choices'     => array(
        'icon_left'   => esc_attr__( 'Icon Left', 'start' ),
        'icon_right' => esc_attr__( 'Icon Right', 'start' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_button_icon_toggle',
            'operator' => '==',
            'value'    => '1',
        ),
        array(
            'setting'  => 'search_archive_content_excerpt',
            'operator' => '==',
            'value'    => 'search_archive_excerpt',
        ),
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Search Archive Button Icon Left
Kirki::add_field( 'start', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'search_archive_button_left_icon',
    'label'       => __( 'Left Icon', 'start' ),
    'section'     => 'search_archive',
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
            'setting'  => 'search_archive_button_icon_position',
            'operator' => '==',
            'value'    => 'icon_left',
        ),
         array(
            'setting'  => 'search_archive_button_icon_toggle',
            'operator' => '==',
            'value'    => '1',
        ),
                 array(
            'setting'  => 'search_archive_content_excerpt',
            'operator' => '==',
            'value'    => 'search_archive_excerpt',
        ),
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Search Archive Button Icon Right
Kirki::add_field( 'start', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'search_archive_button_right_icon',
    'label'       => __( 'Right Icon', 'start' ),
    'section'     => 'search_archive',
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
            'setting'  => 'search_archive_button_icon_position',
            'operator' => '==',
            'value'    => 'icon_right',
        ),
        array(
            'setting'  => 'search_archive_button_icon_toggle',
            'operator' => '==',
            'value'    => '1',
        ),
                array(
            'setting'  => 'search_archive_content_excerpt',
            'operator' => '==',
            'value'    => 'search_archive_excerpt',
        ),
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );



/*********** Style Fields ***********/

// Search For Title Styles
start_headlines('search_for_title_styles', 'search_archive', 'search_archive_setting', 'style', 'Search Title', '10px');

// Search For Title Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'search_for_title_color',
    'label'       => __( 'Search Title', 'start' ),
    'section'     => 'search_archive',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .search_title',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .search_title',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );


// Search For Title
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'search_for_title',
    'section'     => 'search_archive',
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
            'element' => 'body.startwp-frontend-styles .search_title',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );


// Search Title Styles
start_headlines('search_title_styles', 'search_archive', 'search_archive_setting', 'style', 'Title', '10px');

// Search Title Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'search_title_color',
    'label'       => __( 'Title', 'start' ),
    'section'     => 'search_archive',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .search_blog .entry-title, body.startwp-frontend-styles .search_blog .entry-title a',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .search_blog .entry-title, body.startwp-frontend-styles .search_blog .entry-title a',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Search Title Hover Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'search_title_hover_color',
    'label'       => __( 'Title Hover', 'start' ),
    'section'     => 'search_archive',
    'transport' => 'postMessage',
    'default'     => '#1e73be',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .search_blog .entry-title a:hover',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .search_blog .entry-title a:hover',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Search Archive Title
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'search_title',
    'section'     => 'search_archive',
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
            'element' => 'body.startwp-frontend-styles .search_blog .entry-title, body.startwp-frontend-styles .search_blog .entry-title a',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );



// Search Meta Styles
start_headlines('search_meta_styles', 'search_archive', 'search_archive_setting', 'style', 'Meta', '35px');


// Search Meta Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'search_meta_color',
    'label'       => __( 'Meta', 'start' ),
    'section'     => 'search_archive',
    'transport' => 'postMessage',
    'default'     => '#94979c',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .search_blog .entry-meta, body.startwp-frontend-styles .entry-meta span::after',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .search_blog .entry-meta, body.startwp-frontend-styles .entry-meta span::after',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Search Meta Link Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'search_meta_link__color',
    'label'       => __( 'Meta Link', 'start' ),
    'section'     => 'search_archive',
    'transport' => 'postMessage',
    'default'     => '#1e73be',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .search_blog .entry-meta a',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .search_blog .entry-meta a',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Search Meta Link Hover Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'search_meta_hover_color',
    'label'       => __( 'Meta Hover', 'start' ),
    'section'     => 'search_archive',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .search_blog .entry-meta a:hover',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .search_blog .entry-meta a:hover',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Search Meta
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'search_meta',
    'section'     => 'search_archive',
    'transport' => 'auto',
    'default'     => array(
        'font-family'    => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
        'font-size'      => '16px',
        'line-height'    => '1',
        'letter-spacing' => '0',
        'text-transform' => 'none',
    ),
    'output'      => array(
        array(
            'element' => 'body.startwp-frontend-styles .search_blog .entry-meta',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );


// Search Content Styles
start_headlines('search_content_styles', 'search_archive', 'search_archive_setting', 'style', 'Content', '35px');

// Search Content Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'search_content_color',
    'label'       => __( 'Text', 'start' ),
    'section'     => 'search_archive',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .search_blog .entry-content',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .search_blog .entry-content',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Search Content
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'search_content',
    'section'     => 'search_archive',
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
            'element' => 'body.startwp-frontend-styles .search_blog .entry-content',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );


// Search Button Styles
start_headlines('search_btn_styles', 'search_archive', 'search_archive_setting', 'style', 'Button', '35px');

// Search Button BG Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'search_btn_bg_color',
    'label'       => __( 'Background', 'start' ),
    'section'     => 'search_archive',
    'transport' => 'postMessage',
    'default'     => '#e5e8e8',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .search_blog .entry-content .read-more',
            'property' => 'background',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .search_blog .entry-content .read-more',
        'function' => 'css',
        'property' => 'background',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Search Button Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'search_btn_color',
    'label'       => __( 'Text', 'start' ),
    'section'     => 'search_archive',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .search_blog .entry-content .read-more',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .search_blog .entry-content .read-more',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Search Button Hover BG Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'search_btn_hover_bg_color',
    'label'       => __( 'Hover Background', 'start' ),
    'section'     => 'search_archive',
    'transport' => 'postMessage',
    'default'     => '#cfd7cf',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .search_blog .entry-content .read-more:hover',
            'property' => 'background',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .search_blog .entry-content .read-more:hover',
        'function' => 'css',
        'property' => 'background',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Search Button Hover Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'search_btn_hover_color',
    'label'       => __( 'Hover Text', 'start' ),
    'section'     => 'search_archive',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .search_blog .entry-content .read-more:hover',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .search_blog .entry-content .read-more:hover',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Search Button Typography
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'search_btn_typography',
    'section'     => 'search_archive',
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
            'element' => 'body.startwp-frontend-styles .search_blog .entry-content .read-more',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );


/*********** Advanced Fields ***********/

// Search Posts Padding
Kirki::add_field( 'start', array(
  'settings'  => 'search_archive_spacing',
  'section'   => 'search_archive',
  'label'     => esc_html__( 'Search Posts Padding', 'start' ),
  'type'      => 'spacing',
  'default'   => array(
    'top'    => '45px',
    'right'  => '0px',
    'bottom' => '20px',
    'left'   => '0px',
  ),
  'transport' => 'auto',
  'output'    => array(
    array(
      'element'  => 'body.startwp-frontend-styles .search_blog',
      'property' => 'padding',
    ),
  ),
  'active_callback'  => array(
        array(
            'setting'  => 'search_archive_setting',
            'operator' => '==',
            'value'    => 'advanced',
        ),
   ),
) );