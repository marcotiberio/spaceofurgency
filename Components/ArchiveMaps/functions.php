<?php

namespace Flynt\Components\ArchiveMaps;

use Flynt\FieldVariables;
use Flynt\Utils\Options;
use Timber\Timber;

// const POST_TYPE = 'project';

// add_filter('Flynt/addComponentData?name=ArchiveMaps', function ($data) {
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

// add_filter('Flynt/addComponentData?name=ArchiveMaps', function ($data) {
//     $data['apiKey'] = Options::getGlobal('Acf', 'googleMapsApiKey');
//     return $data;
// });

function getACFLayout()
{
    return [
        'name' => 'ArchiveMaps',
        'label' => 'Archive: Maps',
        'sub_fields' => [
            [
                'label' => __('Map', 'flynt'),
                'name' => 'shortcodeMap',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
                'delay' => 0,
            ]
        ]
    ];
}
