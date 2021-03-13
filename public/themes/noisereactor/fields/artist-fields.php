<?php

declare(strict_types=1);
/*
* Register custom fields for the artist post type
*/
if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group([
        'key' => 'artist_info',
        'title' => 'Artist info',
        'fields' => [
            [
                'key' => 'artist_website',
                'name' => 'artist_website',
                'label' => 'Artist Website',
                'type' => 'url',
                'instructions' => 'Artist\'s Website',
                'wrapper' => [
                    'width' => 50,
                ],
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'artist',
                ],
            ],
        ],
    ]);

    acf_add_local_field_group([
        'key' => 'group_604b363304c7c',
        'title' => 'Album',
        'fields' => [
            [
                'key' => 'field_604b36390ac95',
                'label' => 'Album',
                'name' => 'artist_album',
                'type' => 'relationship',
                'instructions' => 'Get the albums',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'post_type' => [
                    0 => 'album',
                ],
                'taxonomy' => '',
                'filters' => [
                    0 => 'search',
                    1 => 'post_type',
                ],
                'elements' => '',
                'min' => '',
                'max' => '',
                'return_format' => 'object',
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'artist',
                ],
            ],
        ],
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ]);
}
