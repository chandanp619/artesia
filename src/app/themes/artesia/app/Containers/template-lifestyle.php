<?php

namespace App\Containers\TemplateLifestyle;

use App\Debug;
use Carbon_Fields\Container;
use App\Fields\PanelMenu;
use App\Fields\FullWidthPanel;
use App\Fields\FeaturedPanel;
use App\Fields\Gallery;

function condition()
{
    return function ($condition) {
        return $condition
            ->where('post_type', '=', 'page')
            ->where('post_template', '=', 'views/template-lifestyle.blade.php');
    };
}

add_action('carbon_fields_register_fields', function () {

    Container::make('post_meta', 'Featured Panel')
        ->where(condition())
        ->add_fields(FeaturedPanel::getFields('feature_panel_1_'));
    Container::make('post_meta', 'Gallery')
        ->where(condition())
        ->add_fields(Gallery::getFields());
    Container::make('post_meta', 'Featured Panel 2')
        ->where(condition())
        ->add_fields(FeaturedPanel::getFields('feature_panel_2_'));
    Container::make('post_meta', 'Featured Panel 3')
        ->where(condition())
        ->add_fields(FeaturedPanel::getFields('feature_panel_3_'));
    Container::make('post_meta', 'Panel Menu')
        ->where(condition())
        ->add_fields(PanelMenu::getFields());
    Container::make('post_meta', 'Full Width Panel')
        ->where(condition())
        ->add_fields(FullWidthPanel::getFields());
}, 20);
