<?php

namespace App;

use Carbon_Fields\Carbon_Fields;

add_action( 'after_setup_theme', function () {
    Carbon_Fields::boot();
});

foreach (glob(__DIR__ . "/Containers/*.php") as $filename)
{
    include $filename;
}

