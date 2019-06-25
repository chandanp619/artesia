<?php

namespace App\Controllers\Partials;

use App\Controllers\SingleHomes;

trait HomeTiles
{

    private function homes()
    {

        $wp_query = new \WP_Query([
            'post_type' => 'homes',
            'posts_per_page' => -1
        ]);

        $homes = array_map(function ($post) {
            $home = new SingleHomes();
            $home->setId($post->ID);
            return $home;
        }, $wp_query->posts);

        return $homes;
    }

    public function componentHomeTiles()
    {

        $fields = [
            'homes' => $this->homes(),
            'heading' => $this->getComponentMeta('home_tiles_content_block'),
        ];

        return $fields;
    }
}
