<?php

namespace App\Controllers\Partials;

use App\Debug;

trait FeaturedPanel
{

    public function componentFeaturedPanel($componentPrefix = '')
    {
        $fields = [
            'url' => 'feature_button_url',
            'button_text' => 'feature_button_text',
            'image_id' => 'feature_image',
            'carousel' => 'feature_carousel_images',
            'orientation' => 'feature_orientation',
            'title' => 'feature_title',
        ];

        $methods = [
            'hasLink',
            'isCarousel',
            'featureBody'
        ];

        return array_merge($this->getComponentMeta($fields, $componentPrefix), $this->getComponentMethodMeta($methods, $componentPrefix));
    }

    private function hasLink($componentPrefix)
    {
        return $this->getMeta('feature_button_url', $componentPrefix) && $this->getMeta('feature_button_text', $componentPrefix);
    }

    private function isCarousel($componentPrefix)
    {
        return $this->getMeta('feature_image_type', $componentPrefix) === 'carousel';
    }

    private function featureBody($componentPrefix)
    {
        return wpautop($this->getMeta('feature_body', $componentPrefix));
    }
}
