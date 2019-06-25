<?php

namespace App\Containers\SingleLots;

use Carbon_Fields\Container;
use App\Fields\LotDetails;

add_action('carbon_fields_register_fields', function () {
    Container::make('post_meta', 'Lot Details')
        ->where('post_type', '=', 'lots')
        ->add_fields(LotDetails::getFields());
}, 10);
