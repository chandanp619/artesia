<?php

namespace App\Controllers\Partials;

use App\Debug;

trait PanelMenu
{

    public function componentPanelMenu()
    {

        $fields = [
            'panels' => $this->getComponentMetaGroup('panel_menu', [
                'title' => 'panel_title',
                'button_text' => 'panel_button_text',
                'url' => 'panel_button_url',
                'image_id' => 'panel_image',
            ], 3),
        ];

        return $fields;
    }
}
