<?php

namespace App\Fields;

use Carbon_Fields\Field;

class BlogDetails extends FieldGroup
{
    public static function getFields(string $prefix = '')
    {
        return [
            Field::make( 'image', 'blog_banner_image', 'Photo' )->set_value_type( 'url' )
        ];
    }
}
