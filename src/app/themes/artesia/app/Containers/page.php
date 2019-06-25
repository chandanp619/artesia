<?php

namespace App\Containers\Singular;

use Carbon_Fields\Container;
use App\Fields\Banner;

add_action('carbon_fields_register_fields', function () {
    Container::make('post_meta', 'Banner')
        ->where('post_type', '=', 'page')
        ->add_fields(Banner::getFields())
        ->set_context('carbon_fields_after_title');
}, 10);
