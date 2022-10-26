<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'resourceMeta',
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
                'required' => 0,
                'wrapper' => [
                    'width' => '100',
                ]
            ],
            [
                'label' => __('Year', 'flynt'),
                'name' => 'yearProject',
                'type' => 'number',
                'wrapper' => [
                    'width' => '33',
                ]
            ],
            [
                'label' => 'Where',
                'name' => 'postWhere',
                'type' => 'text',
                'wrapper' => [
                    'width' => '33',
                ]
            ],
            [
                'label' => 'What',
                'name' => 'postWhat',
                'type' => 'text',
                'wrapper' => [
                    'width' => '33',
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'resource',
                ],
            ],
        ],
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'resourceComponents',
        'title' => 'Resource Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'resourceComponents',
                'label' => __('Resource Components', 'flynt'),
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
                    'value' => 'resource',
                ],
            ],
        ],
    ]);
});
