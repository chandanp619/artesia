<?php

namespace App\Controllers\Partials;

use App\Debug;

trait Banner
{

    public function componentBanner()
    {
        $fields = [
            'left_image_id' => 'banner_left_image',
            'right_image_id' => 'banner_right_image',
            'title_image_id' => 'banner_title_image',
            'text' => 'banner_text',
        ];

        $methods = [
            'hasBannerTitleImage',
            'hasBuilderLogo',
            'bannerLogoClass'
        ];

        return array_merge($this->getComponentMeta($fields), $this->getComponentMethodMeta($methods));
    }

    private function hasBannerTitleImage()
    {
        if ($this->getMeta('banner_title_type') === 'image') {
            return true;
        }
        return false;
    }

    private function hasBuilderLogo()
    {
        if ($this->getId() && get_post_type($this->getId()) === 'homes') {
            return true;
        }
    }

    private function bannerLogoClass()
    {
        return $this->getMeta('builder_logo');
    }
}
