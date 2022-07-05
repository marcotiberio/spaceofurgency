<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pagenavigationComponents',
        'title' => 'Page Navigation',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pagenavigationComponents',
                'label' => __('Page Navigation', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\NavigationAnchor\getACFLayout(),
                ]
            ]
        ],
        'position' => 'acf_after_title',
        'location' => [
            [
                [
                    'param' => 'page',
                    'operator' => '==',
                    'value' => '11',
                ],
            ],
            [
                [
                    'param' => 'page',
                    'operator' => '==',
                    'value' => '16',
                ],
            ],
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'space',
                ],
            ],
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'project',
                ],
            ]
        ]
    ]);
});
