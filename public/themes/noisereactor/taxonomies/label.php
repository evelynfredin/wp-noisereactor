<?php

declare(strict_types=1);

add_action('init', function () {
    register_taxonomy('label', ['album'], [
        'hierarchical' => true,
        'labels' => [
            'add_new_item' => __('Add New Label'),
            'edit_item' => __('Edit Label'),
            'name' => __('Label'),
            'search_items' => __('Search Labels'),
            'singular_name' => __('Label'),
        ],
        'show_admin_column' => true,
        'show_in_rest' => true,
    ]);
});
