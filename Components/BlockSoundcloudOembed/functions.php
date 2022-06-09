<?php

namespace Flynt\Components\BlockSoundcloudOembed;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockSoundcloudOembed',
        'label' => 'Block: Soundcloud/Mixcloud',
        'sub_fields' => [
            [
                'label' => '',
                'name' => 'soundcloudOembedText',
                'type' => 'textarea',
                'instructions' => __('Copy here the iframe embed code from Soundcloud or Mixcloud (do not check Wordpress on Mixcloud).', 'flynt'),
                'required' => 0
            ]
        ]
    ];
}
