<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'teamMeta',
        'title' => 'Person Info',
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
                'label' => __('Contact', 'flynt'),
                'type' => 'text',
                'name' => 'contact',
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
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'team',
                ],
            ],
        ],
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'teamComponents',
        'title' => 'Team Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'teamComponents',
                'label' => __('Team Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    // Components\BlockCollapse\getACFLayout(),
                    // Components\BlockImage\getACFLayout(),
                    // Components\BlockImageText\getACFLayout(),
                    // Components\BlockCta\getACFLayout(),
                    // Components\BlockSoundcloudOembed\getACFLayout(),
                    // Components\BlockVideoOembed\getACFLayout(),
                    // Components\BlockWysiwygPost\getACFLayout(),
                    // Components\SliderImages\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'team',
                ],
            ],
        ],
    ]);
});
