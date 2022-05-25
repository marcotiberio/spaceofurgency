<?php

/**
 * Defines field variables to be used across multiple components.
 */

namespace Flynt\FieldVariables;

function getTheme()
{
    return [
        'label' => __('Theme', 'flynt'),
        'name' => 'theme',
        'type' => 'select',
        'allow_null' => 0,
        'multiple' => 0,
        'ui' => 0,
        'ajax' => 0,
        'choices' => [
            '' => __('(none)', 'flynt'),
            'themeOrange' => __('Orange', 'flynt'),
            'themePurple' => __('Purple', 'flynt'),
            'themeWhite' => __('White', 'flynt'),
            'themeBlack' => __('Black', 'flynt'),
        ]
    ];
}

function getIcon()
{
    return [
        'label' => __('Icon', 'flynt'),
        'name' => 'icon',
        'type' => 'text',
        'instructions' => __('Enter a valid icon name from <a href="https://feathericons.com">Feather Icons</a> (e.g. `check-circle`).', 'flynt'),
        'required' => 1
    ];
}
