<?php

namespace App\Controllers\Partials;

//use App\Debug;

trait HomeTile
{

    public function logoClass()
    {
        return $this->getMeta('builder_logo');
    }
}
