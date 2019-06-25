<?php

namespace App\Containers\TemplateContact;

use App\Debug;
use Carbon_Fields\Container;
use App\Fields\PanelMenu;
use App\Fields\FullWidthPanel;
use App\Fields\ContactForm;
use App\Fields\EmbedMap;

function condition()
{
    return function ($condition) {
        return $condition
            ->where('post_type', '=', 'page')
            ->where('post_template', '=', 'views/template-contact.blade.php');
    };
}

add_action('carbon_fields_register_fields', function () {

    Container::make('post_meta', 'Google Map')
        ->where(condition())
        ->add_fields(EmbedMap::getFields());
    Container::make('post_meta', 'Contact Form')
        ->where(condition())
        ->add_fields(ContactForm::getFields());
    Container::make('post_meta', 'Panel Menu')
        ->where(condition())
        ->add_fields(PanelMenu::getFields());
    Container::make('post_meta', 'Full Width Panel')
        ->where(condition())
        ->add_fields(FullWidthPanel::getFields());
}, 20);
