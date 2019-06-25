<?php

namespace App;

use Carbon_Fields\Carbon_Fields;
use App\Conditions\External_Url_Condition;
use App\Debug;

Carbon_Fields::extend(External_Url_Condition::class, function ($container) {
    // create an instance of our new class
    $condition = new External_Url_Condition();
    $condition->set_comparers(\Carbon_Fields\Carbon_Fields::resolve('generic', 'container_condition_comparer_collections'));
    return $condition;
});

add_filter('carbon_fields_post_meta_container_static_condition_types', function ($condition_types, $container_type, $container) {
    // append our new condition type to allowed theme options conditions
    
    return array_merge(
        $condition_types,
        array('external_url')
    );
}, 10, 3);