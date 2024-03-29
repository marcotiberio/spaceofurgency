<?php

namespace Flynt\Components\AccordionDefault;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'AccordionDefault',
        'label' => 'Accordion: Default',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'preContentHtml',
                'type' => 'text',
            ],
            [
                'label' => __('Accordion Panels', 'flynt'),
                'name' => 'accordionPanels',
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 1,
                'button_label' => __('Add Accordion Panel', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Panel Title', 'flynt'),
                        'name' => 'panelTitle',
                        'type' => 'text'
                    ],
                    [
                        'label' => __('Panel Content', 'flynt'),
                        'name' => 'panelContent',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual,text',
                        'media_upload' => 0,
                        'delay' => 1,
                    ],
                ],
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'row',
                'sub_fields' => [
                    FieldVariables\getTheme()
                ]
            ],
            [
                'label' => __('Splatter Color', 'flynt'),
                'name' => 'splatterColor',
                'type' => 'select',
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 1,
                'ajax' => 0,
                'choices' => [
                    'orange' => __('Orange', 'flynt'),
                    'black' => __('Black', 'flynt'),
                    'purple' => __('Purple', 'flynt'),
                    'grey' => __('Grey', 'flynt'),
                ],
                'default_value' => 'orange'
            ],
        ],
    ];
}
