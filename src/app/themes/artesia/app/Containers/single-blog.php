<?php

namespace App\Containers\SingleBlog;

use Carbon_Fields\Container;
use App\Fields\BlogDetails;

add_action('carbon_fields_register_fields', function () {
    Container::make('post_meta', 'Blog Banner Image')
        ->where('post_type', '=', 'blog')
        ->add_fields(BlogDetails::getFields())->set_context('side')
        ->set_priority('low');
}, 20);