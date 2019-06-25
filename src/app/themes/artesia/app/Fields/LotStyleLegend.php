<?php

namespace App\Fields;

use Carbon_Fields\Field;

class LotStyleLegend extends FieldGroup
{
    public static function getFields(string $prefix = '')
    {
        return [
            Field::make('textarea', $prefix . 'legend_level_trans', 'Level Transitional Description'),
            Field::make('textarea', $prefix . 'legend_walkout_lot', 'Walkout Lot Description'),
            Field::make('textarea', $prefix . 'legend_walkout_trans', 'Walkout Tranistional Description'),
            Field::make('textarea', $prefix . 'legend_sunshine', 'Sunshine Basement Description')
        ];
    }
}
