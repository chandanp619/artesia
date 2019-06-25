<?php

namespace App\Fields;

use Carbon_Fields\Field;

class ContactForm extends FieldGroup
{
    public static function getFields(string $prefix = '')
    {
        return [
            Field::make('text', $prefix . 'contact_intro_title', 'Intro Title'),
            Field::make('textarea', $prefix . 'contact_intro_body', 'Intro Body'),
            Field::make('textarea', $prefix . 'contact_form', 'Hubspot Form Code'),
        ];
    }
}
