<?php

namespace App\Fields;

use Carbon_Fields\Field;

class Gallery extends FieldGroup
{
    public static function getFields(string $prefix = '')
    {
        return [
            Field::make('text', $prefix . 'gallery_title', 'Title'),
            Field::make('image', $prefix . 'gallery_background_image', 'Background Image'),
            Field::make('textarea', $prefix . 'gallery_body', 'Body Text'),
            Field::make('media_gallery', $prefix . 'gallery_images', 'Images')
        ];
    }
}
