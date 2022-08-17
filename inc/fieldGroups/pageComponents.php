<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pageMeta',
        'title' => 'Page Meta',
        'style' => '',
        'fields' => [
            [
                'label' => __('Page Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Page Background', 'flynt'),
                'name' => 'pageBackground',
                'type' => 'color_picker',
                'default' => '#000',
                'required' => 1
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page'
                ]
                ],
            [
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'post'
                ],
            ],
        ],
        'menu_order' => 0,
        'position' => 'side',
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'pageComponents',
        'title' => 'Page Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pageComponents',
                'label' => __('Page Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\AccordionDefault\getACFLayout(),
                    Components\ArchiveMaps\getACFLayout(),
                    Components\BlockCollapse\getACFLayout(),
                    Components\BlockImage\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockPageIntro\getACFLayout(),
                    Components\BlockCta\getACFLayout(),
                    Components\BlockVideoOembed\getACFLayout(),
                    Components\BlockVideoText\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\GridPostsEventsPast\getACFLayout(),
                    Components\GridPostsEventsUpcoming\getACFLayout(),
                    Components\GridProjectsLatest\getACFLayout(),
                    Components\GridProjectsFeatured\getACFLayout(),
                    Components\GridTeamLatest\getACFLayout(),
                    Components\GridResourcesLatest\getACFLayout(),
                    Components\HeroImageCta\getACFLayout(),
                    Components\HeroVideo\getACFLayout(),
                    Components\ListLogos\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
                    Components\SliderText\getACFLayout(),
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page'
                ]
            ]
        ]
    ]);
});
