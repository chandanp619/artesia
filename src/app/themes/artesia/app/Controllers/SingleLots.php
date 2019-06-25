<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use Sober\Controller\Module\Tree;

class SingleLots extends Controller implements Tree
{
    use Helpers\Post;
    use Helpers\Components;

    public function componentLotDetails()
    {
        $fields = [
            'lot_id' => 'lot_id',
            'style' => 'lot_style',
            'status' => 'lot_status',
            'builder' => 'lot_builder',
        ];

        $methods = [
            'title',
            'featuredImageUrl'
        ];

        return array_merge($this->getComponentMeta($fields), $this->getComponentMethodMeta($methods));
    }
}
