<?php

function _themename_theme_support() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array('search-form', 'comment-list', 'comment-form', 'gallery', 'caption') );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'custom-logo', array(
        'height' => 200,
        'width' => 600,
        'flex-height' => true,
        'flex-width' => true
    ) );
    add_theme_support('post-formats', array(
        'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
    ));
    add_theme_support( 'align-wide' );
    add_image_size('_themename-blog-image', 1200, 0);

    add_theme_support('editor-color-palette', array(
        array(
            'name' => __('Greyish Purple', '_themename'),
            'slug' => 'greyish-purple',
            'color' => '#524d5b'
        ),
        array(
            'name' => __('Pale Green', '_themename'),
            'slug' => 'pale-green',
            'color' => '#9dd3a8'
        ),
    ) );
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    add_editor_style('dist/assets/css/editor.css' );
}

add_action( 'after_setup_theme', '_themename_theme_support' );
