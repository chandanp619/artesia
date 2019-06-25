<?php

namespace App\Fields;

use Carbon_Fields\Field;

class FeaturedPanel extends FieldGroup
{
    public static function getFields(string $prefix = '')
    {
        return [
            Field::make('select', $prefix . 'feature_orientation', 'Title Orientation')
                ->add_options([
                    'left' => 'Left',
                    'right' => 'Right'
                ]),
            Field::make('text', $prefix . 'feature_title', 'Title'),
            Field::make('textarea', $prefix . 'feature_body', 'Body'),
            Field::make('text', $prefix . 'feature_button_text', 'Button Text'),
            Field::make('text', $prefix . 'feature_button_url', 'Button URL'),
            Field::make('select', $prefix . 'feature_image_type', 'Image Type')
                ->add_options([
                    'single' => 'Single Image',
                    'carousel' => 'Carousel'
                ]),
            Field::make('image', $prefix . 'feature_image', 'Image'),
            Field::make('media_gallery', $prefix . 'feature_carousel_images', 'Carousel')
        ];
    }
}
