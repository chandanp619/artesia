<?php

namespace App\Containers;

use Carbon_Fields\Container;
use App\Fields\ThemeOptions;

add_action('carbon_fields_register_fields', function () {
    Container::make('theme_options', 'Theme Options')
        ->add_fields(ThemeOptions::getFields());
});
