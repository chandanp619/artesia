<?php

namespace App\Controllers\Partials;

use App\Debug;

/**
 * For use on pages with default WP content and additional ContentBlock
 */
trait SecondaryContentBlock
{

    public function componentSecondaryContentBlock()
    {
        $methods = [
            'secondaryContent'
        ];

        return $this->getComponentMethodMeta($methods);
    }

    private function secondaryContent()
    {
        return wpautop($this->getMeta('content_block'));
    }
}
