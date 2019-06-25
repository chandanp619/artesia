<?php

namespace App\Fields;

use Carbon_Fields\Field;

class FeaturedLogo extends FieldGroup
{
    public static function getFields(string $prefix = '')
    {
        return [
            Field::make('select', $prefix . 'builder_logo', 'Logo')
                ->add_options([
                    'icon-brookfield_grey' => 'Brookfield',
                    'icon-avi_grey' => 'Homes by Avi',
                    'icon-augusta_grey' => 'Augusta Fine Homes'
                ])
        ];
    }
}
