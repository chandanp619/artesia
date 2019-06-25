<?php

namespace App\Controllers\Partials;

use App\Debug;

trait EmbedMap
{

    public function componentEmbedMap()
    {
        $fields = [
            'lat' => 'map_lat',
            'lng' => 'map_lng',
            'zoom' => 'map_zoom'
        ];

        return $this->getComponentMeta($fields);
    }
}
