<?php

namespace App\Fields;

use Carbon_Fields\Field;

class HomeDetails extends FieldGroup
{
    public static function getFields(string $prefix = '')
    {
        return [
            Field::make('text', $prefix . 'home_area', 'Area in Sq Ft'),
            Field::make('text', $prefix . 'home_beds', 'Number of Bedrooms'),
            Field::make('text', $prefix . 'home_baths', 'Number of Bathrooms'),

        ];
    }
}
