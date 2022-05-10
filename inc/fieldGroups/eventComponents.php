<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'eventMeta',
        'title' => 'Event Meta',
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
                'name' => 'intro',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'wrapper' => [
                    'width' => '100',
                ]
            ],
            [
                'label' => __('Contact', 'flynt'),
                'name' => 'contactLink',
                'type' => 'url',
            ],
            [
                'label' => 'Datum (Required)',
                'instructions' => 'Gibt das Datum des Termins an, oder das Ende einer Zeitspanne.',
                'required' => 1,
                'name' => 'end_date',
                'type' => 'date_picker',
                'display_format' => 'F j, Y',
                'return_format' => 'Ymd',
                'first_day' => 1,
            ],
            [
                'label' => 'Start (Optional)',
                'instructions' => 'Falls eine Zeitspanne angezeigt werden soll',
                'name' => 'start_date',
                'type' => 'date_picker',
                'display_format' => 'F j, Y',
                'return_format' => 'Ymd',
                'first_day' => 1,
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'event',
                ],
            ],
        ],
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'eventComponents',
        'title' => 'Event Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'eventComponents',
                'label' => __('Event Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockImage\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'event',
                ],
            ],
        ],
    ]);
});
