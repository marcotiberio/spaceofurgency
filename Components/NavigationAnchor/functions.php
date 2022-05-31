<?php

namespace Flynt\Components\NavigationAnchor;

use Flynt\FieldVariables;
use Flynt\ComponentManager;
use Flynt\Utils\Asset;

function getACFLayout()
{
    return [
        'name' => 'NavigationAnchor',
        'label' => 'Page Navigation',
        'sub_fields' => [
            [
                'label' => __('Page Navigation', 'flynt'),
                'name' => 'repeaterAnchor',
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 1,
                'button_label' => __('Add Section', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Section', 'flynt'),
                        'name' => 'sectionLink',
                        'type' => 'text',
                        // 'return_format' => 'array',
                        // 'wrapper' => [
                        //     'width' => '100',
                        // ],
                    ],
                ],
            ],
        ]
    ];
}
