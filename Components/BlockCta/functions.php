<?php

namespace Flynt\Components\BlockCta;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockCta',
        'label' => 'Block: Quote/CTA',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
                'delay' => 1,
            ],
            [
                'label' => __('CTA Link', 'flynt'),
                'name' => 'ctaLink',
                'type' => 'link',
                'return_format' => 'array',
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
                    [
                        'label' => __('Text Size', 'flynt'),
                        'name' => 'textSize',
                        'type' => 'button_group',
                        'choices' => [
                            'textSmall' => '<i class=\'dashicons dashicons-minus\' title=\'Small\'></i>',
                            'textBig' => '<i class=\'dashicons dashicons-plus\' title=\'Big\'></i>'
                        ],
                        'default' => 'textBig',
                        'wrapper' => [
                            'width' => 100
                        ],
                    ],
                    FieldVariables\getTheme()
                ]
            ],
        ]
    ];
}
