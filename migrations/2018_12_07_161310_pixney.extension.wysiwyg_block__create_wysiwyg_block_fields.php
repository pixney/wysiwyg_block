<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyExtensionWysiwygBlockCreateWysiwygBlockFields extends Migration
{
    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'classes' => 'anomaly.field_type.text',
        'content' => [
            'type'   => 'anomaly.field_type.wysiwyg',
            'name'   => 'content',
            'locked' => false,
            'config' => [
                'default_value' => null,

                'buttons' => [
                    'format',
                    'bold',
                    'italic',
                    'lists',
                    'link',
                    'underline',
                ],
                'configuration' => '',
                'plugins'       => ['alignment'],
                'line_breaks'   => false,
                'sync'          => true,
                'height'        => 300,
            ]
        ],
    ];
}
