<?php

namespace App\Controllers\Partials;

use App\Debug;

trait StickyTab
{

    public function componentStickyTab()
    {
        $fields = [
            'text' => 'sticky_tab_text'
        ];

        $methods = [
            'tabLinkUrl',
            'isTabPage'
        ];

        return array_merge($this->getComponentMeta($fields), $this->getComponentMethodMeta($methods));
    }

    private function tabLinkUrl()
    {
        return get_permalink($this->tabLinkPageId());
    }

    private function tabLinkPageId()
    {
        $array = $this->getMeta('sticky_tab_link');

        if (count($array) && isset($array[0]['id'])) {
            return $array[0]['id'];
        }
    }

    private function isTabPage()
    {
        return intval($this->tabLinkPageId()) === get_queried_object_id();
    }
}
