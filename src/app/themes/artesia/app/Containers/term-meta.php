<?php

namespace App\Container\terms;

use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action('carbon_fields_register_fields', function () {

    Container::make('term_meta', 'Term Display')
        ->where('term_taxonomy', '=', 'post_tag')
        ->add_fields(array(
            Field::make('checkbox', 'display_term_frontend', 'Display in Frontend')

        ));

});
