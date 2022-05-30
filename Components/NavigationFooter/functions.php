<?php

namespace Flynt\Components\NavigationFooter;

use Flynt\Utils\Options;
use Flynt\Utils\Asset;
use Timber\Menu;
use Flynt\Shortcodes;

add_action('init', function () {
    register_nav_menus([
        'navigation_footer' => __('Navigation Footer', 'flynt')
    ]);
});

add_filter('Flynt/addComponentData?name=NavigationFooter', function ($data) {
    $data['maxLevel'] = 0;
    $data['menu'] = new Menu('navigation_footer');

    return $data;
});

add_filter('Flynt/addComponentData?name=NavigationFooter', function ($data) {
    $data['menu'] = new Menu('navigation_footer');
    $data['logo'] = [
        'src' => get_theme_mod('custom_header_logo') ? get_theme_mod('custom_header_logo') : Asset::requireUrl('Components/NavigationFooter/Assets/logo.svg'),
        'alt' => get_bloginfo('name')
    ];

    return $data;
});

Options::addTranslatable('NavigationFooter', [
    [
        'label' => __('General', 'flynt'),
        'name' => 'generalTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => __('Content', 'flynt'),
        'name' => 'contentHtml',
        'type' => 'wysiwyg',
        'media_upload' => 0,
        'delay' => 1,
        'toolbar' => 'basic',
        'default_value' => '©&nbsp;[year] [sitetitle]'
    ],
    [
        'label' => __('Content Examples', 'flynt'),
        'name' => 'templateTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0,
    ],
    [
        'label' => __('Content Examples', 'flynt'),
        'name' => 'groupContentExamples',
        'instructions' => __('Want some content inspiration? Here they are!', 'flynt'),
        'type' => 'group',
        'sub_fields' => [
            [
                'label' => sprintf(__('© %s Website Name', 'flynt'), date_i18n('Y')),
                'name' => 'messageShortcodeCopyrightYearWebsiteName',
                'type' => 'message',
                'message' => '<code>©' . htmlspecialchars('&nbsp;') . '[year] [sitetitle]</code>',
                'new_lines' => 'wpautop',
                'esc_html' => 0,
                'wrapper' => [
                    'width' => 50
                ],
            ],
            [
                'label' => sprintf(__('© %s Website Name — Subtitle', 'flynt'), date_i18n('Y')),
                'name' => 'messageShortcodeCopyrightYearWebsiteNameTagLine',
                'type' => 'message',
                'message' => '<code>©' . htmlspecialchars('&nbsp;') . '[year] [sitetitle] ' . htmlspecialchars('&mdash;') . ' [tagline]</code>',
                'new_lines' => 'wpautop',
                'esc_html' => 0,
                'wrapper' => [
                    'width' => 50
                ]
            ]
        ]
    ],
    [
        'label' => __('Social Media', 'flynt'),
        'name' => 'socialmediaTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => __('Title', 'flynt'),
        'name' => 'listSocialmediaTitle',
        'type' => 'text',
    ],
    [
        'label' => __('Social Media', 'flynt'),
        'name' => 'repeaterSocial',
        'type' => 'repeater',
        'layout' => 'row',
        'min' => 1,
        'button_label' => __('Add Social Media', 'flynt'),
        'sub_fields' => [
            [
                'label' => __('Social Media', 'flynt'),
                'name' => 'panelLink',
                'type' => 'link',
                'return_format' => 'array',
                'wrapper' => [
                    'width' => '100',
                ],
            ],
        ],
    ],
    [
        'label' => __('Donate', 'flynt'),
        'name' => 'donateTab',
        'type' => 'tab',
        'placement' => 'top',
        'endpoint' => 0
    ],
    [
        'label' => __('Title', 'flynt'),
        'name' => 'listDonateTitle',
        'type' => 'text',
    ],
    [
        'label' => __('Donate', 'flynt'),
        'name' => 'repeaterDonate',
        'type' => 'repeater',
        'layout' => 'row',
        'min' => 1,
        'button_label' => __('Add Donate Link', 'flynt'),
        'sub_fields' => [
            [
                'label' => __('Donate Link', 'flynt'),
                'name' => 'panelLink',
                'type' => 'link',
                'return_format' => 'array',
                'wrapper' => [
                    'width' => '100',
                ],
            ],
        ],
    ],
    Shortcodes\getShortcodeReference(),
]);
