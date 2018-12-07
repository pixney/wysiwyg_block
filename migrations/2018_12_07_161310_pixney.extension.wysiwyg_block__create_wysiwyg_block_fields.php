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
        'content' => [
            'type'   => 'anomaly.field_type.wysiwyg',
            'name'   => 'content',
            'locked' => false,
            'config' => [
                'default_value' => null,
                'configuration' => 'default',
                'line_breaks'   => false,
                'sync'          => true,
                'height'        => 300,
            ]
        ],
    ];
}
