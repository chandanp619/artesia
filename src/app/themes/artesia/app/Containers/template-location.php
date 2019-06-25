<?php

namespace App\Containers\TemplateLocation;

use App\Debug;
use Carbon_Fields\Container;
use App\Fields\Banner;
use App\Fields\PanelMenu;
use App\Fields\FullWidthPanel;

function condition()
{
    return function ($condition) {
        return $condition
            ->where('post_type', '=', 'page')
            ->where('post_template', '=', 'views/template-location.blade.php');
    };
}

add_action('carbon_fields_register_fields', function () {

    Container::make('post_meta', 'Panel Menu')
        ->where(condition())
        ->add_fields(PanelMenu::getFields());
    Container::make('post_meta', 'Full Width Panel')
        ->where(condition())
        ->add_fields(FullWidthPanel::getFields());
}, 20);
