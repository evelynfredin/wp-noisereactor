<?php

declare(strict_types=1);
/*
* Register custom fields for the album post type
*/
if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group([
        'key' => 'album_info',
        'title' => 'Album info',
        'fields' => [
            [
                'key' => 'album_release_date',
                'name' => 'album_release_date',
                'label' => 'Release Date',
                'type' => 'date_picker',
                'instructions' => 'Add release date',
                'wrapper' => [
                    'width' => 25,
                ],
            ],
            [
                'key' => 'album_edition',
                'name' => 'album_edition',
                'label' => 'Album Edition',
                'type' => 'text',
                'instructions' => 'Add album edition',
                'wrapper' => [
                    'width' => 25,
                ],
            ],
            [
                'key' => 'album_spotify_link',
                'name' => 'album_spotify_link',
                'label' => 'Album Spotify Link',
                'type' => 'url',
                'instructions' => 'Add a link to Spotify',
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
                    'value' => 'album',
                ],
            ],
        ],
    ]);

    acf_add_local_field_group([
        'key' => 'group_604b1e136f56b',
        'title' => 'Albums and Artists',
        'fields' => [
            [
                'key' => 'field_604b1ea7b17fe',
                'label' => 'Artist',
                'name' => 'album_artist',
                'type' => 'relationship',
                'instructions' => 'Select the artist this album belongs to',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => [
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ],
                'post_type' => [
                    0 => 'artist',
                ],
                'taxonomy' => '',
                'filters' => [
                    0 => 'search',
                    1 => 'post_type',
                ],
                'elements' => '',
                'min' => 1,
                'max' => 1,
                'return_format' => 'id',
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'album',
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
        'description' => 'What is this?',
    ]);

    acf_add_local_field_group([
        'key' => 'group_604b87c408995',
        'title' => 'Albums by artist',
        'fields' => [
            [
                'key' => 'field_604b87e808371',
                'label' => 'All Albums',
                'name' => 'all_albums',
                'type' => 'relationship',
                'instructions' => 'Add more albums',
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
                    'value' => 'album',
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
