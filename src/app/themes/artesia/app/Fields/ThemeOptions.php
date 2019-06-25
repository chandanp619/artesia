<?php

namespace App\Fields;

use Carbon_Fields\Field;

class ThemeOptions extends FieldGroup
{
    public static function getFields(string $prefix = '')
    {
        return [
            Field::make('association', 'sticky_tab_link', 'Sticky Tab Link')
                ->set_types([
                    [
                        'type' => 'post',
                        'post_type' => 'page'
                    ]
                ])
                ->set_min(1)
                ->set_max(1),
            Field::make('text', 'sticky_tab_text', 'Sticky Tab Text')
        ];
    }
}
