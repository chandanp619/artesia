<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use Sober\Controller\Module\Tree;

class TemplateLifestyle extends Controller implements Tree
{
    use Helpers\Post;
    use Helpers\Components;
    use Partials\Banner;
    use Partials\FeaturedPanel;
    use Partials\Gallery;
    use Partials\PanelMenu;
    use Partials\FullWidthPanel;

    public function componentFeaturedPanelOne()
    {
        return $this->componentFeaturedPanel('feature_panel_1_');
    }

    public function componentFeaturedPanelTwo()
    {
        return $this->componentFeaturedPanel('feature_panel_2_');
    }

    public function componentFeaturedPanelThree()
    {
        return $this->componentFeaturedPanel('feature_panel_3_');
    }
}
