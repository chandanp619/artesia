<?php

namespace App\Controllers\Partials;

use App\Debug;

trait LogoBar
{

    public function componentLogoBar()
    {

        $fields = [
            'logos' => $this->getComponentMetaGroup('logo_bar', [
                'link' => 'logo_link_url',
                'image_id' => 'logo_image',
            ], 4)
        ];

        return $fields;
    }
}
