<?php

namespace App\Controllers\Partials;

use App\Debug;

trait FullWidthPanel
{

    public function componentFullWidthPanel()
    {

        $fields = [
            'title' => 'full_panel_title',
            'button' => [
                'text' => 'full_panel_button_text',
                'url' => 'full_panel_button_url',
            ],
            'image_id' => 'full_panel_image',
        ];

        $methods = [
            'panelBody'
        ];

        return array_merge($this->getComponentMeta($fields), $this->getComponentMethodMeta($methods));
    }

    private function panelBody()
    {
        return wpautop($this->getMeta('full_panel_body'));
    }
}
