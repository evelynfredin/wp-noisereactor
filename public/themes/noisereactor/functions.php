<?php

add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'navigation' => __('Navigation'),
    ]);
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('style', get_theme_file_uri('assets/app.css'));
    wp_enqueue_script('script', get_theme_file_uri('assets/app.js'));
});

add_action('enqueue_block_editor_assets', function () {
    wp_enqueue_style('style', get_theme_file_uri('assets/editor.css'));
});

// Custom post-types
require get_template_directory() . '/post-types/album.php';
require get_template_directory() . '/post-types/artist.php';

// Taxonomies.
require get_template_directory() . '/taxonomies/label.php';
require get_template_directory() . '/taxonomies/genre.php';

// Custom fields.
require get_template_directory() . '/fields/album-fields.php';
require get_template_directory() . '/fields/artist-fields.php';
require get_template_directory() . '/blocks/latest-albums.php';
