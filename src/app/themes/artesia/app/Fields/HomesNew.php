<?php
namespace App\Fields;

use Carbon_Fields\Field;

class HomesNew extends FieldGroup
{
    public static function getFields(string $prefix = '')
    {
    return [
                Field::make('text', $prefix . 'home_area', 'Area in Sq Ft'),
                Field::make('text', $prefix . 'home_beds', 'Number of Bedrooms'),
                Field::make('text', $prefix . 'home_baths', 'Number of Bathrooms'),
                Field::make('text', $prefix . 'home_price_start', 'Price Starting From'),

                Field::make('textarea', $prefix . 'address', 'Address'),
                Field::make('textarea', $prefix . 'visit_timing', 'Visit Timeings'),
                Field::make('text', $prefix . 'home_phone', 'Phone'),
                Field::make('text', $prefix . 'home_email', 'Email'),

                Field::make( 'image', 'floor_plan_image1', 'Floor Plan 1' ),
                Field::make( 'text', 'floor_plan_image1_caption', 'Floor Plan Image 1 Caption' ),
                Field::make( 'image', 'floor_plan_image2', 'Floor Plan 2' ),
                Field::make( 'text', 'floor_plan_image2_caption', 'Floor Plan Image 2 Caption' ),
                Field::make( 'image', 'floor_plan_image3', 'Floor Plan 3' ),
                Field::make( 'text', 'floor_plan_image3_caption', 'Floor Plan Image 3 Caption' ),
                Field::make( 'image', 'floor_plan_image4', 'Floor Plan 4' ),
                Field::make( 'text', 'floor_plan_image4_caption', 'Floor Plan Image 4 Caption' ),
                Field::make( 'image', 'floor_plan_image5', 'Floor Plan 5' ),
                Field::make( 'text', 'floor_plan_image5_caption', 'Floor Plan Image 5 Caption' ),
                Field::make( 'image', 'floor_plan_image6', 'Floor Plan 6' ),
                Field::make( 'text', 'floor_plan_image6_caption', 'Floor Plan Image 6 Caption' ),
            ];
    }
}
