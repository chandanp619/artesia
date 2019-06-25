<?php

namespace App\Fields;

use Carbon_Fields\Field;

class EmbedMap extends FieldGroup
{
    public static function getFields(string $prefix = '')
    {
        return [
            Field::make('text', $prefix . 'map_lat', 'Latitude'),
            Field::make('text', $prefix . 'map_lng', 'Longitude'),
            Field::make('text', $prefix . 'map_zoom', 'Zoom')
        ];
    }
}
