<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'projectMeta',
        'title' => 'Project Meta',
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
                'label' => 'Type',
                'name' => 'postType',
                'type' => 'text',
                'wrapper' => [
                    'width' => '33',
                ]
            ],
            [
                'label' => 'Methods',
                'name' => 'postMethods',
                'type' => 'text',
                'wrapper' => [
                    'width' => '33',
                ]
            ],
            [
                'label' => 'Grant Size',
                'name' => 'postGrantSize',
                'type' => 'text',
                'wrapper' => [
                    'width' => '33',
                ]
            ],
            [
                'label' => 'Location',
                'name' => 'postLocation',
                'type' => 'text',
                'wrapper' => [
                    'width' => '33',
                ]
            ],
            [
                'label' => __('Year', 'flynt'),
                'name' => 'yearProject',
                'type' => 'text',
                'wrapper' => [
                    'width' => '33',
                ]
            ],
            [
                'label' => 'Partners',
                'name' => 'postPartners',
                'type' => 'text',
                'wrapper' => [
                    'width' => '33',
                ]
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'project',
                ],
            ],
        ],
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'projectComponents',
        'title' => 'Project Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'projectComponents',
                'label' => __('Project Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockCollapse\getACFLayout(),
                    Components\BlockImage\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockCta\getACFLayout(),
                    Components\BlockSoundcloudOembed\getACFLayout(),
                    Components\BlockVideoOembed\getACFLayout(),
                    Components\BlockVideoText\getACFLayout(),
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
                    'value' => 'project',
                ],
            ],
        ],
    ]);
});
