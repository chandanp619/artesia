<?php

namespace App\Containers\ArchiveHomes;

use Carbon_Fields\Container;
use App\Fields\Banner;
use App\Fields\ContentBlock;
use App\Fields\FeaturedPanel;
use App\Fields\LogoBar;
use App\Fields\PanelMenu;
use App\Fields\FullWidthPanel;
use App\Controllers\ArchiveHomes;
use App\Fields\LotStyleLegend;

add_action('carbon_fields_register_fields', function () {
    Container::make('theme_options', 'Archive Options')
        ->set_page_parent('edit.php?post_type=homes')
        ->where('current_user_capability', '=', 'edit_theme_options')
        ->add_tab('Banner', Banner::getFields(ArchiveHomes::$viewPrefix))
        ->add_tab('Content', ContentBlock::getFields(ArchiveHomes::$viewPrefix))
        ->add_tab('Home Tiles Heading', ContentBlock::getFields(ArchiveHomes::$viewPrefix . 'home_tiles_'))
        ->add_tab('Lot Style Legend', LotStyleLegend::getFields(ArchiveHomes::$viewPrefix))
        ->add_tab('Featured Panel', FeaturedPanel::getFields(ArchiveHomes::$viewPrefix))
        ->add_tab('Logo Bar', LogoBar::getFields(ArchiveHomes::$viewPrefix))
        ->add_tab('Panel Menu', PanelMenu::getFields(ArchiveHomes::$viewPrefix))
        ->add_tab('Full Width Panel', FullWidthPanel::getFields(ArchiveHomes::$viewPrefix));
});
