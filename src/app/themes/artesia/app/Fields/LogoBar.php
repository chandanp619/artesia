<?php 

namespace App\Fields;

use Carbon_Fields\Field;

class LogoBar extends FieldGroup 
{
    public static function getFields(string $prefix = '')
    {
        return [
            Field::Make('complex', 'logo_bar', 'Logo Bar')
                ->setup_labels([
                    'singular_name' => 'Logo',
                    'plural_name' => 'Logos'
                ])
                ->set_max(4)
                ->add_fields([
                    Field::make('text', $prefix . 'logo_link_url', 'Link URL'),
                    Field::make('image', $prefix . 'logo_image', 'Image')
                ])
        ];
    }
}