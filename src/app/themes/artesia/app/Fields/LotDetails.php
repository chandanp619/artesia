<?php

namespace App\Fields;

use Carbon_Fields\Field;

class LotDetails extends FieldGroup
{
    public static function getFields(string $prefix = '')
    {
        return [
            Field::make('text', $prefix . 'lot_id', 'ID'),
            Field::make('select', 'lot_style', 'Style')
                ->add_options([
                    '' => 'Not Applicable',
                    'Level Lot' => 'Level Lot',
                    'Level Transitional' => 'Level Transitional',
                    'Walkout Lot' => 'Walkout Lot',
                    'Walkout Transitional' => 'Walkout Transitional',
                    'Sunshine Basement' => 'Sunshine Basement'
                ]),
            Field::make('select', $prefix . 'lot_status', 'Status')
                ->add_options([
                    'Available' => 'Available',
                    'Quick Possession' => 'Quick Possession',
                    'Sold' => 'Sold',
                    'Showhomes' => 'Showhomes',
                    'Coming Soon' => 'Coming Soon'
                ]),
            Field::make('select', $prefix . 'lot_builder', 'Builder')
                ->add_options([
                    'Brookfield Residential' => 'Brookfield Residential',
                    'Homes by Avi' => 'Homes by Avi',
                    'Augusta Fine Homes' => 'Augusta Fine Homes'
                ])
        ];
    }
}
