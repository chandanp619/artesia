<?php

namespace App\Controllers\Partials;

use App\Debug;

trait Gallery
{

    private function galleryImageJson($size)
    {
        return json_encode(array_map(function ($id) use ($size) {
            return ['src' => wp_get_attachment_image_url($id, $size)];
        }, $this->getComponentMeta('gallery_images')));
    }

    public function componentGallery()
    {
        $fields = [
            'title' => $this->getComponentMeta('gallery_title'),
            'body' => wpautop($this->getComponentMeta('gallery_body')),
            'background_image_id' => $this->getComponentMeta('gallery_background_image'),
            'gallery_image_json' => $this->galleryImageJson('large')
        ];

        return $fields;
    }
}
