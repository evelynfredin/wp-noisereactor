<?php

declare(strict_types=1);

add_action('init', function () {
    register_post_type('album', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Album'),
            'edit_item' => __('Edit Album'),
            'name' => __('Albums'),
            'search_items' => __('Search Albums'),
            'singular_name' => __('Album'),
        ],
        'supports' => [
            'title',
            'editor',
            'thumbnail',
            'excerpt',
        ],
        'menu_icon' => 'dashicons-album',
        'menu_position' => 20,
        'public' => true,
        'show_in_rest' => true,
    ]);
});
