<?php

namespace Flynt\Components\BlockMaps;

use Flynt\FieldVariables;
use Flynt\Utils\Options;
use Timber\Timber;

// const POST_TYPE = 'space';

// add_filter('Flynt/addComponentData?name=BlockMaps', function ($data) {
//     $postType = POST_TYPE;

//     $data['taxonomies'] = $data['taxonomies'] ?: [];

//     $data['items'] = Timber::get_posts([
//         'post_status' => 'publish',
//         'post_type' => $postType,
//         'posts_per_page' => -1,
//         'ignore_sticky_posts' => 1,
//     ]);

//     $data['postTypeArchiveLink'] = get_post_type_archive_link($postType);

//     return $data;
// });

add_filter('Flynt/addComponentData?name=BlockMaps', function ($data) {
    $data['apiKey'] = Options::getGlobal('Acf', 'googleMapsApiKey');
    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'BlockMaps',
        'label' => 'Block: Maps',
        'sub_fields' => [
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
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 1,
                'button_label' => __('Add Space', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Space', 'flynt'),
                        'name' => 'marker',
                        'type' => 'google_map'
                    ],
                    [
                        'label' => __('Content', 'flynt'),
                        'name' => 'contentHtml',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual,text',
                        'media_upload' => 0,
                        'delay' => 1,
                    ],
                    [
                        'label' => __('Custom Icon', 'flynt'),
                        'name' => 'customIcon',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'thumbnail',
                    ],
                ],
            ]
        ]
    ];
}
