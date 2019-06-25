<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use Sober\Controller\Module\Tree;

class TemplateLocation extends Controller implements Tree
{
    use Helpers\Post;
    use Helpers\Components;
    use Partials\Banner;
    use Partials\PanelMenu;
    use Partials\FullWidthPanel;
}
