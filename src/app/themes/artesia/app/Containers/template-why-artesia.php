<?php

namespace App\Containers\TemplateWhyArtesia;

use App\Debug;
use Carbon_Fields\Container;
use App\Fields\PanelMenu;
use App\Fields\FullWidthPanel;
use App\Fields\FeaturedPanel;

function condition()
{
    return function ($condition) {
        return $condition
            ->where('post_type', '=', 'page')
            ->where('post_template', '=', 'views/template-why-artesia.blade.php');
    };
}

add_action('carbon_fields_register_fields', function () {

    Container::make('post_meta', 'Featured Panel')
        ->where(condition())
        ->add_fields(FeaturedPanel::getFields('feature_panel_1_'));
    Container::make('post_meta', 'Featured Panel 2')
        ->where(condition())
        ->add_fields(FeaturedPanel::getFields('feature_panel_2_'));
    Container::make('post_meta', 'Featured Panel 3')
        ->where(condition())
        ->add_fields(FeaturedPanel::getFields('feature_panel_3_'));
    Container::make('post_meta', 'Full Width Panel')
        ->where(condition())
        ->add_fields(FullWidthPanel::getFields());
}, 20);
