<?php

namespace Flynt\Components\BlockPageIntro;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockPageIntro',
        'label' => 'Block: Page Intro',
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
                'delay' => 1,
                'media_upload' => 0,
                'required' => 1,
            ]
        ]
    ];
}
