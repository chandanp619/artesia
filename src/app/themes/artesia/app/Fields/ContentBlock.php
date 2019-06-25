<?php

namespace App\Fields;

use Carbon_Fields\Field;

class ContentBlock extends FieldGroup
{
    public static function getFields(string $prefix = '')
    {
        return [
            Field::make('rich_text', $prefix . 'content_block', 'Content Block'),
        ];
    }
}
