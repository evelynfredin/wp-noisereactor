<?php

declare(strict_types=1);

add_action('init', function () {
    register_taxonomy('genre', ['artist'], [
        'hierarchical' => true,
        'labels' => [
            'add_new_item' => __('Add New Genre'),
            'edit_item' => __('Edit Genre'),
            'name' => __('Genre'),
            'search_items' => __('Search Genres'),
            'singular_name' => __('Genre'),
        ],
        'show_admin_column' => true,
        'show_in_rest' => true,
    ]);
});
