<?php

namespace Flynt\Components\BlockCta;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockCta',
        'label' => 'Block: CTA',
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
                'type' => 'textarea',
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
                    FieldVariables\getTheme(),
                ]
            ],
        ]
    ];
}
