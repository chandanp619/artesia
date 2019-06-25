<?php

namespace App\Fields;

use Carbon_Fields\Field;

class PanelMenu extends FieldGroup
{
    public static function getFields(string $prefix = '')
    {
        return [
            Field::Make('complex', 'panel_menu', 'Panel Menu')
                ->setup_labels([
                    'singular_name' => 'Panel',
                    'plural_name' => 'Panels'
                ])
                ->set_min(3)
                ->set_max(3)
                ->add_fields([
                    Field::make('text', $prefix . 'panel_title', 'Title'),
                    Field::make('text', $prefix . 'panel_button_text', 'Button Text'),
                    Field::make('text', $prefix . 'panel_button_url', 'Button URL'),
                    Field::make('image', $prefix . 'panel_image', 'Image')
                ])
        ];
    }
}
