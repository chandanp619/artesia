<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use Sober\Controller\Module\Tree;

class ArchiveHomes extends Controller implements Tree
{
    use Helpers\Archive;
    use Helpers\Components;
    use Partials\Banner;
    use Partials\ContentBlock;
    use Partials\FeaturedPanel;
    use Partials\LogoBar;
    use Partials\PanelMenu;
    use Partials\FullWidthPanel;
    use Partials\LotMap;
    use Partials\HomeTiles;

    public static $viewPrefix = 'archive_homes_';


}
