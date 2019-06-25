<?php

namespace App\Controllers\Helpers;

use App\Debug;

/*
 *  Helper functions for Global App values
 */
trait Site
{

    public function getMeta($name = '', $group = '')
    {
        return carbon_get_theme_option($group . $name);
    }
}
