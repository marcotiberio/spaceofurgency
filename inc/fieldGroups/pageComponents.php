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
                    Components\ArchiveMaps\getACFLayout(),
                    Components\BlockImage\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockPageIntro\getACFLayout(),
                    Components\BlockCta\getACFLayout(),
                    Components\BlockVideoOembed\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\GridImageText\getACFLayout(),
                    Components\GridPostsEventsPast\getACFLayout(),
                    Components\GridPostsEventsUpcoming\getACFLayout(),
                    Components\GridPostsLatest\getACFLayout(),
                    Components\GridProjectsLatest\getACFLayout(),
                    Components\GridTeamLatest\getACFLayout(),
                    Components\GridResourcesLatest\getACFLayout(),
                    Components\GridExamplesLatest\getACFLayout(),
                    Components\ListComponents\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
                    Components\SliderText\getACFLayout(),
                    Components\AccordionDefault\getACFLayout(),
                    Components\BlockCountUp\getACFLayout(),
                    Components\BlockImageTextParallax\getACFLayout(),
                    Components\BlockTextImageCrop\getACFLayout(),
                    Components\BlockWysiwygSidebar\getACFLayout(),
                    Components\BlockWysiwygTwoCol\getACFLayout(),
                    Components\FormContactForm7\getACFLayout(),
                    Components\FormNewsletter\getACFLayout(),
                    Components\HeroCta\getACFLayout(),
                    Components\HeroImageCta\getACFLayout(),
                    Components\HeroImageText\getACFLayout(),
                    Components\HeroSlider\getACFLayout(),
                    Components\HeroTextImage\getACFLayout(),
                    Components\HeroVideo\getACFLayout(),
                    Components\ListIcons\getACFLayout(),
                    Components\ListLogos\getACFLayout(),
                    Components\ListSocial\getACFLayout(),
                    Components\NavigationFooterColumns\getACFLayout(),
                    Components\SliderImageGallery\getACFLayout(),
                    Components\SliderImagesCentered\getACFLayout(),
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
