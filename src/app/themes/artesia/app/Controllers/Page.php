<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use Sober\Controller\Module\Tree;

/*
 * Functions which should be included in every Page view
 * as long as they implement Sober\Controller\Module\Tree
 */
class Page extends Controller implements Tree
{
    use Helpers\Post;
    use Helpers\Components;
    use Partials\Banner;
}
