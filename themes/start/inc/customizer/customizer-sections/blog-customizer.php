<?php

/****************************************************
* Blog And Archive Section
****************************************************/

// Menu Tabs
start_tabs('blog_archive_setting', 'blog_archive');

start_shortcuts('blog_shortcut', 'blog_archive', 'partial_blog', '#content .start_blog');

// Blog / Archive Options
start_headlines('blog_archive_options', 'blog_archive', 'blog_archive_setting', 'general', 'Blog / Archive', '10px');


// Blog / Archive Layout
Kirki::add_field( 'start', array(
    'type'        => 'sortable',
    'settings'    => 'blog_posts_layout',
    'label'       => __( 'Blog Posts Layout', 'start' ),
    'section'     => 'blog_archive',
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
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Blog / Archive Meta Layout
Kirki::add_field( 'start', array(
    'type'        => 'sortable',
    'settings'    => 'blog_posts_meta_layout',
    'label'       => __( 'Blog Posts Meta Layout', 'start' ),
    'section'     => 'blog_archive',
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
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Link Post Titles
Kirki::add_field( 'start', array(
    'type'        => 'toggle',
    'settings'    => 'blog_archive_title_linkable',
    'label'       => __( 'Link Title', 'start' ),
    'section'     => 'blog_archive',
    'default'     => '1',
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Link Post Thumbnails
Kirki::add_field( 'start', array(
    'type'        => 'toggle',
    'settings'    => 'blog_archive_thumbnail_linkable',
    'label'       => __( 'Link Thumbnail', 'start' ),
    'section'     => 'blog_archive',
    'default'     => '1',
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Blog / Archive / Single Meta seprator
Kirki::add_field( 'start', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'blog_archive_single_meta_sep',
    'label'       => __( 'Meta Separator Icon', 'start' ),
    'section'     => 'blog_archive',
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
            'element'  => 'body.startwp-frontend-styles .start_blog .entry-meta span::after',
            'property' => 'content',
            'prefix'   => '"',
            'suffix'   => '"',
        ),
    ),
    'js_vars'     => array(
        array(
            'element'  => 'body.startwp-frontend-styles .entry-meta span::after',
            'function' => 'css',
            'property' => 'content',
            'prefix'   => '"',
            'suffix'   => '"',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Blog / Archive Excerpt / Content
Kirki::add_field( 'start', array(
    'type'        => 'select',
    'settings'    => 'blog_archive_content_excerpt',
    'label'       => __( 'Content / Excerpt', 'start' ),
    'section'     => 'blog_archive',
    'default'     => 'blog_archive_excerpt',
    'multiple'    => 1,
    'choices'     => array(
        'blog_archive_excerpt' => esc_attr__( 'Excerpt', 'start' ),
        'blog_archive_content' => esc_attr__( 'Content', 'start' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Blog / Archive Excerpt Length
Kirki::add_field( 'start', array(
    'type'        => 'number',
    'settings'    => 'blog_archive_excerpt_length',
    'label'       => esc_attr__( 'Excerpt Length', 'start' ),
    'section'     => 'blog_archive',
    'default'     => 55,
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_content_excerpt',
            'operator' => '==',
            'value'    => 'blog_archive_excerpt',
        ),
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Blog / Archive Button Headline
Kirki::add_field( 'start', array(
    'type'        => 'custom',
    'settings'    => 'blog_button_headline',
    'section'     => 'blog_archive',
    'default'     => '<div style="border-bottom: 1px solid #d5d8dc;line-height: 2em;font-size: 20px;text-transform: capitalize; font-weight: 600;">' . esc_html__( 'Read More', 'start' ) . '</div>',
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_content_excerpt',
            'operator' => '==',
            'value'    => 'blog_archive_excerpt',
        ),
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Blog Button Text
Kirki::add_field( 'start', array(
    'type'     => 'text',
    'settings' => 'blog_btn_text',
    'label'    => __( 'Button Text', 'start' ),
    'section'  => 'blog_archive',
    'transport' => 'auto',
    'default'  => __( 'Read More', 'start' ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_content_excerpt',
            'operator' => '==',
            'value'    => 'blog_archive_excerpt',
        ),
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Button Position
Kirki::add_field( 'start', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'blog_archive_button_position',
    'label'       => __( 'Button Position', 'start' ),
    'section'     => 'blog_archive',
    'transport' => 'auto',
    'default'     => 'btn_left',
    'choices'     => array(
        'btn_left'   => esc_attr__( 'Left', 'start' ),
        'btn_right' => esc_attr__( 'Right', 'start' ),
        'btn_full' => esc_attr__( 'Full Width', 'start' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_content_excerpt',
            'operator' => '==',
            'value'    => 'blog_archive_excerpt',
        ),
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Button Icon Show / Hide
Kirki::add_field( 'start', array(
    'type'        => 'toggle',
    'settings'    => 'blog_archive_button_icon_toggle',
    'label'       => __( 'Use Button Icon', 'start' ),
    'section'     => 'blog_archive',
    'default'     => '1',
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_content_excerpt',
            'operator' => '==',
            'value'    => 'blog_archive_excerpt',
        ),
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Button Icon Left / Right
Kirki::add_field( 'start', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'blog_archive_button_icon_position',
    'label'       => __( 'Button Icon Position', 'start' ),
    'section'     => 'blog_archive',
    'transport' => 'auto',
    'default'     => 'icon_right',
    'choices'     => array(
        'icon_left'   => esc_attr__( 'Icon Left', 'start' ),
        'icon_right' => esc_attr__( 'Icon Right', 'start' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_button_icon_toggle',
            'operator' => '==',
            'value'    => '1',
        ),
        array(
            'setting'  => 'blog_archive_content_excerpt',
            'operator' => '==',
            'value'    => 'blog_archive_excerpt',
        ),
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Button Icon Left
Kirki::add_field( 'start', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'blog_archive_button_left_icon',
    'label'       => __( 'Left Icon', 'start' ),
    'section'     => 'blog_archive',
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
            'setting'  => 'blog_archive_button_icon_position',
            'operator' => '==',
            'value'    => 'icon_left',
        ),
         array(
            'setting'  => 'blog_archive_button_icon_toggle',
            'operator' => '==',
            'value'    => '1',
        ),
                 array(
            'setting'  => 'blog_archive_content_excerpt',
            'operator' => '==',
            'value'    => 'blog_archive_excerpt',
        ),
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Button Icon Right
Kirki::add_field( 'start', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'blog_archive_button_right_icon',
    'label'       => __( 'Right Icon', 'start' ),
    'section'     => 'blog_archive',
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
            'setting'  => 'blog_archive_button_icon_position',
            'operator' => '==',
            'value'    => 'icon_right',
        ),
        array(
            'setting'  => 'blog_archive_button_icon_toggle',
            'operator' => '==',
            'value'    => '1',
        ),
                array(
            'setting'  => 'blog_archive_content_excerpt',
            'operator' => '==',
            'value'    => 'blog_archive_excerpt',
        ),
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Blog / Archive Post Navigation
Kirki::add_field( 'start', array(
    'type'        => 'custom',
    'settings'    => 'blog_post_nav',
    'section'     => 'blog_archive',
    'default'     => '<div style="border-bottom: 1px solid #d5d8dc;line-height: 2em;font-size: 20px;text-transform: capitalize; font-weight: 600;">' . esc_html__( 'Posts Navigation', 'start' ) . '</div>',
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Older Posts Text
Kirki::add_field( 'start', array(
    'type'     => 'text',
    'settings' => 'blog_old_nav',
    'label'    => __( 'Older Posts Text', 'start' ),
    'section'  => 'blog_archive',
    'default'  => __( 'Older posts', 'start' ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Newer Posts Text
Kirki::add_field( 'start', array(
    'type'     => 'text',
    'settings' => 'blog_newer_nav',
    'label'    => __( 'Newer Posts Text', 'start' ),
    'section'  => 'blog_archive',
    'default'  => __( 'Newer posts', 'start' ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );



/* Blog Single General  */

// Blog Single Options
start_headlines('blog_single_options', 'blog_archive', 'blog_archive_setting', 'general', 'Blog Single', '35px');

// Single Post Layout
Kirki::add_field( 'start', array(
    'type'        => 'sortable',
    'settings'    => 'single_post_layout',
    'label'       => __( 'Single Post Layout', 'start' ),
    'section'     => 'blog_archive',
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
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
   ),
) );

// Single Post Meta Layout
Kirki::add_field( 'start', array(
    'type'        => 'sortable',
    'settings'    => 'single_posts_meta_layout',
    'label'       => __( 'Single Posts Meta Layout', 'start' ),
    'section'     => 'blog_archive',
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
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
   ),
) );

// Single Post nav Condtion
Kirki::add_field( 'start', array(
    'type'        => 'toggle',
    'settings'    => 'single_post_nav_condition',
    'label'       => __( 'Custom Post Navigation', 'start' ),
    'section'     => 'blog_archive',
    'default'     => '0',
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
   ),
) );

// Older Posts Text
Kirki::add_field( 'start', array(
    'type'     => 'text',
    'settings' => 'blog_single_old_nav',
    'label'    => __( 'Prev', 'start' ),
    'section'  => 'blog_archive',
    'default'  => __( 'Previous', 'start' ),
    'active_callback'  => array(
        array(
            'setting'  => 'single_post_nav_condition',
            'operator' => '==',
            'value'    => '1',
        ),
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );

// Newer Posts Text
Kirki::add_field( 'start', array(
    'type'     => 'text',
    'settings' => 'blog_single_newer_nav',
    'label'    => __( 'Next', 'start' ),
    'section'  => 'blog_archive',
    'default'  => __( 'Next', 'start' ),
    'active_callback'  => array(
        array(
            'setting'  => 'single_post_nav_condition',
            'operator' => '==',
            'value'    => '1',
        ),
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'general',
        ),
    ),
) );


/*********** Style Fields ***********/

// Blog Title Styles
start_headlines('Blog_title_styles', 'blog_archive', 'blog_archive_setting', 'style', 'Title', '10px');

// Blog Title Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'blog_title_color',
    'label'       => __( 'Title', 'start' ),
    'section'     => 'blog_archive',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_blog .entry-title, body.startwp-frontend-styles .start_blog .entry-title a',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_blog .entry-title, body.startwp-frontend-styles .start_blog .entry-title a',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Blog Title Hover Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'blog_title_hover_color',
    'label'       => __( 'Title Hover', 'start' ),
    'section'     => 'blog_archive',
    'transport' => 'postMessage',
    'default'     => '#1e73be',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_blog .entry-title a:hover',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_blog .entry-title a:hover',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Blog Archive Title
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'blog_title',
    'section'     => 'blog_archive',
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
            'element' => 'body.startwp-frontend-styles .start_blog .entry-title, body.startwp-frontend-styles .start_blog .entry-title a',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );



// Blog Meta Styles
start_headlines('Blog_meta_styles', 'blog_archive', 'blog_archive_setting', 'style', 'Meta', '35px');


// Blog Meta Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'blog_meta_color',
    'label'       => __( 'Meta', 'start' ),
    'section'     => 'blog_archive',
    'transport' => 'postMessage',
    'default'     => '#94979c',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_blog .entry-meta, body.startwp-frontend-styles .entry-meta span::after',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_blog .entry-meta, body.startwp-frontend-styles .entry-meta span::after',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Blog Meta Link Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'blog_meta_link__color',
    'label'       => __( 'Meta Link', 'start' ),
    'section'     => 'blog_archive',
    'transport' => 'postMessage',
    'default'     => '#1e73be',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_blog .entry-meta a',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_blog .entry-meta a',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Blog Meta Link Hover Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'blog_meta_hover_color',
    'label'       => __( 'Meta Hover', 'start' ),
    'section'     => 'blog_archive',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_blog .entry-meta a:hover',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_blog .entry-meta a:hover',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Blog Meta
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'blog_meta',
    'section'     => 'blog_archive',
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
            'element' => 'body.startwp-frontend-styles .start_blog .entry-meta',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );


// Blog Content Styles
start_headlines('Blog_content_styles', 'blog_archive', 'blog_archive_setting', 'style', 'Content', '35px');

// Blog Content Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'blog_content_color',
    'label'       => __( 'Text', 'start' ),
    'section'     => 'blog_archive',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_blog .entry-content',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_blog .entry-content',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Blog Content
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'blog_content',
    'section'     => 'blog_archive',
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
            'element' => 'body.startwp-frontend-styles .start_blog .entry-content',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );


// Blog Button Styles
start_headlines('Blog_btn_styles', 'blog_archive', 'blog_archive_setting', 'style', 'Button', '35px');

// Blog Button BG Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'blog_btn_bg_color',
    'label'       => __( 'Background', 'start' ),
    'section'     => 'blog_archive',
    'transport' => 'postMessage',
    'default'     => '#e5e8e8',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_blog .entry-content .read-more',
            'property' => 'background',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_blog .entry-content .read-more',
        'function' => 'css',
        'property' => 'background',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Blog Button Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'blog_btn_color',
    'label'       => __( 'Text', 'start' ),
    'section'     => 'blog_archive',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_blog .entry-content .read-more',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_blog .entry-content .read-more',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Blog Button Hover BG Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'blog_btn_hover_bg_color',
    'label'       => __( 'Hover Background', 'start' ),
    'section'     => 'blog_archive',
    'transport' => 'postMessage',
    'default'     => '#cfd7cf',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_blog .entry-content .read-more:hover',
            'property' => 'background',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_blog .entry-content .read-more:hover',
        'function' => 'css',
        'property' => 'background',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Blog Button Hover Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'blog_btn_hover_color',
    'label'       => __( 'Hover Text', 'start' ),
    'section'     => 'blog_archive',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .start_blog .entry-content .read-more:hover',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .start_blog .entry-content .read-more:hover',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Blog Button Typography
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'blog_btn_typography',
    'section'     => 'blog_archive',
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
            'element' => 'body.startwp-frontend-styles .start_blog .entry-content .read-more',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Blog Post Navigation Styles
start_headlines('Blog_posts_navigation', 'blog_archive', 'blog_archive_setting', 'style', 'posts Navigation', '35px');

// Blog Navigation Link Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'blog_nav_link_color',
    'label'       => __( 'Link', 'start' ),
    'section'     => 'blog_archive',
    'transport' => 'postMessage',
    'default'     => '#1e73be',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .posts-navigation .nav-links a, body.startwp-frontend-styles .post-navigation .nav-links a',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .posts-navigation .nav-links a, body.startwp-frontend-styles .post-navigation .nav-links a',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Blog Navigation Link Hover Color
Kirki::add_field( 'start', array(
    'type'        => 'color',
    'settings'    => 'blog_nav_link_hover_color',
    'label'       => __( 'Link Hover', 'start' ),
    'section'     => 'blog_archive',
    'transport' => 'postMessage',
    'default'     => '#000000',
    'output' => array(
        array(
            'element'  => 'body.startwp-frontend-styles .posts-navigation .nav-links a:hover, body.startwp-frontend-styles .post-navigation .nav-links a:hover',
            'property' => 'color',
        ),
    ),
    'js_vars'   => array(
    array(
        'element'  => 'body.startwp-frontend-styles .posts-navigation .nav-links a:hover, body.startwp-frontend-styles .post-navigation .nav-links a:hover',
        'function' => 'css',
        'property' => 'color',
    ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );

// Blog Posts / Single post Nav Typography
Kirki::add_field( 'start', array(
    'type'        => 'typography',
    'settings'    => 'blog_nav_typography',
    'section'     => 'blog_archive',
    'transport' => 'auto',
    'default'     => array(
        'font-family'    => '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif',
        'variant'        => 'regular',
        'font-size'      => '16px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'text-transform' => 'none',
    ),
    'output'      => array(
        array(
            'element' => 'body.startwp-frontend-styles .posts-navigation .nav-links a, body.startwp-frontend-styles .post-navigation .nav-links a',
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'style',
        ),
    ),
) );


/*********** Advanced Fields ***********/

// Blog / Archive Posts Padding
Kirki::add_field( 'start', array(
  'settings'  => 'blog_archive_spacing',
  'section'   => 'blog_archive',
  'label'     => esc_html__( 'Blog Posts Padding', 'start' ),
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
      'element'  => 'body.startwp-frontend-styles .blog_and_archive',
      'property' => 'padding',
    ),
  ),
  'active_callback'  => array(
        array(
            'setting'  => 'blog_archive_setting',
            'operator' => '==',
            'value'    => 'advanced',
        ),
   ),
) );