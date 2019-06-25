<?php

namespace App\Controllers\Partials;

use App\Debug;

/**
 * For use in Archives w/ no built in content block
 */
trait BlogContentBlock
{

    public function componentContentBlock()
    {
        $methods = [
            'content'
        ];

        return $this->getComponentMethodMeta($methods);
    }

    private function content()
    {
        return wpautop($this->getMeta('content_block'));
    }
}
