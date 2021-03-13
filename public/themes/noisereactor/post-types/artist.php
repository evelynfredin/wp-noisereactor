<?php

declare(strict_types=1);

add_action('init', function () {
    register_post_type('artist', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Artist'),
            'edit_item' => __('Edit Artist'),
            'name' => __('Artists'),
            'search_items' => __('Search Artists'),
            'singular_name' => __('Artist'),
        ],
        'supports' => [
            'title',
            'editor',
            'thumbnail',
            'excerpt',
        ],
        'menu_icon' => 'dashicons-groups',
        'menu_position' => 20,
        'public' => true,
        'show_in_rest' => true,
    ]);
});
