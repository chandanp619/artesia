<?php

namespace App\Fields;

use Carbon_Fields\Field;

class ExternalHomeUrl extends FieldGroup
{
    public static function getFields(string $prefix = '')
    {
        return [
            Field::make('text', 'home_external_url', 'External Home Url')
        ];
    }
}
