<?php

namespace Flynt\Components\BlockContact;

use Flynt\Utils\Options;
use Flynt\FieldVariables;

add_filter('Flynt/addComponentData?name=BlockContact', function ($data) {
    $data['apiKey'] = Options::getGlobal('Acf', 'googleMapsApiKey');
    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'blockContact',
        'label' => 'Block: Contact',
        'sub_fields' => [
            [
                [
                    'label' => __('Collapse Component Spacing', 'flynt'),
                    'name' => 'message',
                    'type' => 'message',
                    'message' => __('The collapse block reduces the vertical space between components.\nSimply move the component in between components with same color themes.', 'flynt'),
                    'new_lines' => 'wpautop',
                    'esc_html' => 1
                ]
            ],
        ]
    ];
}

Options::addGlobal('BlockContact', [
    [
        'label' => __('Address', 'flynt'),
        'name' => 'addressTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => __('Text', 'flynt'),
        'name' => 'contentHtml',
        'type' => 'wysiwyg',
        'delay' => 1,
        'media_upload' => 0,
        'required' => 0,
        'wrapper' => [
            'width' => 100,
        ],
    ],
    [
        'label' => __('Map', 'flynt'),
        'name' => 'mapsTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => __('Maps', 'flynt'),
        'name' => 'maps',
        'type' => 'google_map',
        'center_lat' => '47.430726',
        'center_lng' => '11.876553',
        'wrapper' => [
            'width' => 100,
        ],
    ],
]);
