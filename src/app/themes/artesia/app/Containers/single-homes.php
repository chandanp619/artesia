<?php

namespace App\Containers\SingleHomes;

use App\Fields\HomesNew;
use Carbon_Fields\Container;
use App\Fields\HomeDetails;
use App\Fields\Gallery;
use App\Fields\ContentBlock;
use App\Fields\PanelMenu;
use App\Fields\FullWidthPanel;
use App\Fields\FeaturedLogo;
use App\Fields\ExternalHomeUrl;
use App\Fields\Banner;

function condition()
{
    return function ($condition) {
        $condition->where('post_type', '=', 'homes');
    };
}

function noExternalUrl()
{
    return function ($condition) {
        $condition->where('external_url', '!=', true);
    };
}

add_action('carbon_fields_register_fields', function () {
    Container::make('post_meta', 'External Url')
        ->where(condition())
        ->add_fields(ExternalHomeUrl::getFields())
        ->set_context('carbon_fields_after_title');
    Container::make('post_meta', 'Home Details')
        ->where(condition())
        //->where(noExternalUrl())
        ->add_fields(HomesNew::getFields());
    Container::make('post_meta', 'Banner')
        ->where(condition())
        ->where(noExternalUrl())
        ->add_fields(Banner::getFields())
        ->set_context('carbon_fields_after_title')
        ->set_priority('low');
//    Container::make('post_meta', 'Home Details')
//        ->where(condition())
//        ->where(noExternalUrl())
//        ->add_fields(HomeDetails::getFields());
    Container::make('post_meta', 'Gallery')
        ->where(condition())
        ->where(noExternalUrl())
        ->add_fields(Gallery::getFields());
    Container::make('post_meta', 'Features')
        ->where(condition())
        ->where(noExternalUrl())
        ->add_fields(ContentBlock::getFields());
    Container::make('post_meta', 'Panel Menu')
        ->where(condition())
        ->where(noExternalUrl())
        ->add_fields(PanelMenu::getFields());
    Container::make('post_meta', 'Full Width Panel')
        ->where(condition())
        ->where(noExternalUrl())
        ->add_fields(FullWidthPanel::getFields());
    Container::make('post_meta', 'Featured Logo')
        ->where(condition())
        ->add_fields(FeaturedLogo::getFields())
        ->set_context('side');
}, 20);
