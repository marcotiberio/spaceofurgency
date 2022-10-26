<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'spaceMeta',
        'title' => 'Info',
        'style' => '',
        'menu_order' => 1,
        'position' => 'acf_after_title',
        'fields' => [
            [
                'label' => __('Info', 'flynt'),
                'name' => 'infoTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Intro', 'flynt'),
                'name' => 'introHtml',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 1,
                'wrapper' => [
                    'width' => '100',
                ]
            ],
            [
                'label' => __('Year', 'flynt'),
                'name' => 'yearProject',
                'type' => 'number',
                'wrapper' => [
                    'width' => '25',
                ]
            ],
            [
                'label' => 'City',
                'name' => 'postCity',
                'type' => 'text',
                'wrapper' => [
                    'width' => '25',
                ]
            ],
            [
                'label' => 'Country',
                'name' => 'postCountry',
                'type' => 'text',
                'wrapper' => [
                    'width' => '25',
                ]
            ],
            [
                'label' => 'What',
                'name' => 'postWhat',
                'type' => 'text',
                'wrapper' => [
                    'width' => '25',
                ]
            ],
            [
                'label' => __('Location', 'flynt'),
                'name' => 'mapsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Maps', 'flynt'),
                'name' => 'maps',
                'type' => 'google_map',
                'center_lat' => '52.50384',
                'center_lng' => '13.38421',
                'wrapper' => [
                    'width' => 100,
                ],
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'space',
                ],
            ],
        ],
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'spaceComponents',
        'title' => 'Space Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'spaceComponents',
                'label' => __('Space Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockCollapse\getACFLayout(),
                    Components\BlockImage\getACFLayout(),
                    Components\BlockImageTextPost\getACFLayout(),
                    Components\BlockMaps\getACFLayout(),
                    Components\BlockCta\getACFLayout(),
                    Components\BlockSoundcloudOembed\getACFLayout(),
                    Components\BlockVideoOembed\getACFLayout(),
                    Components\BlockVideoText\getACFLayout(),
                    Components\BlockCenteredWysiwyg\getACFLayout(),
                    Components\BlockWysiwygPost\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'space',
                ],
            ],
        ],
    ]);
});
