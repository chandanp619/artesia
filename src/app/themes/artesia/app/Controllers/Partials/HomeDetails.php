<?php

namespace App\Controllers\Partials;

trait HomeDetails
{

    public function componentHomeDetails()
    {
        $fields = [
            'area' => 'home_area',
            'beds' => 'home_beds',
            'baths' => 'home_baths',
        ];

        return $this->getComponentMeta($fields);
    }
}
