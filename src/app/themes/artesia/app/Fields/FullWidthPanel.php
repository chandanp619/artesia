<?php

namespace App\Fields;

use Carbon_Fields\Field;

class FullWidthPanel extends FieldGroup
{
    public static function getFields(string $prefix = '')
    {
        return [
            Field::make('text', $prefix . 'full_panel_title', 'Title'),
            Field::make('textarea', $prefix . 'full_panel_body', 'Body'),
            Field::make('text', $prefix . 'full_panel_button_text', 'Button Text'),
            Field::make('text', $prefix . 'full_panel_button_url', 'Button URL'),
            Field::make('image', $prefix . 'full_panel_image', 'Image')
        ];
    }
}
