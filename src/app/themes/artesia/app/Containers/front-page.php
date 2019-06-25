<?php

namespace App\Containers\FrontPage;

use Carbon_Fields\Container;
use App\Fields\FeaturedPanel;
use App\Fields\PanelMenu;
use App\Fields\FullWidthPanel;

function condition()
{
    return function ($condition) {
        $condition->where('post_id', '=', get_option('page_on_front'));
    };
}

add_action('carbon_fields_register_fields', function () {
    Container::make('post_meta', 'Featured Panel')
        ->where(condition())
        ->add_fields(FeaturedPanel::getFields('feature_panel_1_'));
    Container::make('post_meta', 'Panel Menu')
        ->where(condition())
        ->add_fields(PanelMenu::getFields());
    Container::make('post_meta', 'Featured Panel 2')
        ->where(condition())
        ->add_fields(FeaturedPanel::getFields('feature_panel_2_'));
    Container::make('post_meta', 'Full Width Panel')
        ->where(condition())
        ->add_fields(FullWidthPanel::getFields());
}, 20);
