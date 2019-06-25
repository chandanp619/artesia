<?php

namespace App\Controllers\Partials;

use App\Controllers\SingleLots;

//use App\Debug;

trait LotMap
{

    public function componentLotMap()
    {
        $fields = [
        ];
        
        $methods = [
            'lotMap',
            'lots',
            'levelTrans',
            'walkoutLot',
            'walkoutTrans',
            'sunshine'
        ];

        return array_merge($this->getComponentMeta($fields), $this->getComponentMethodMeta($methods));
    }

    private function lotMap()
    {
        return file_get_contents(get_template_directory() . '/assets/images/lot-map.svg');
    }

    private function lots()
    {
        $wp_query = new \WP_Query([
            'post_type' => 'lots',
            'posts_per_page' => -1
        ]);

        return array_map(function ($post) {
            $home = new SingleLots();
            $home->setId($post->ID);
            return $home;
        }, $wp_query->posts);
    }

    private function levelTrans()
    {
        return wpautop($this->getMeta('legend_level_trans'));
    }

    private function walkoutLot()
    {
        return wpautop($this->getMeta('legend_walkout_lot'));
    }

    private function walkoutTrans()
    {
        return wpautop($this->getMeta('legend_walkout_trans'));
    }

    private function sunshine()
    {
        return wpautop($this->getMeta('legend_sunshine'));
    }
}
