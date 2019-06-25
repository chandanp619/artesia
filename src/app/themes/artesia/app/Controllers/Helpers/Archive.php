<?php

namespace App\Controllers\Helpers;

use App\Debug;

/*
 *  Functions which should be included in every post view
 */
trait Archive
{

    public function getViewPrefix()
    {
        return self::$viewPrefix;
    }

    public function getMeta($name = '', $group = '')
    {
        return carbon_get_theme_option($group . $this->getViewPrefix() . $name);
    }

    public function getId()
    {
        return false;
    }
}
