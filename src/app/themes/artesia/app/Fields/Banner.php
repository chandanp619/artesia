<?php

namespace App\Fields;

use Carbon_Fields\Field;

class Banner extends FieldGroup
{
    public static function getFields(string $prefix = '')
    {
        return [
            Field::make('radio', $prefix . 'banner_title_type', 'Title Type')
                ->add_options([
                    'text' => 'Text',
                    'image' => 'Image'
                ]),
            Field::make('text', $prefix . 'banner_text', 'Title'),
            Field::make('image', $prefix . 'banner_title_image', 'Title Image'),
            Field::make('image', $prefix . 'banner_left_image', 'Left Image'),
            Field::make('image', $prefix . 'banner_right_image', 'Right Image')
        ];
    }
}
