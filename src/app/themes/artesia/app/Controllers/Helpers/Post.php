<?php

namespace App\Controllers\Helpers;

use App\Debug;

/*
 *  Functions which should be included in every post view
 */
trait Post
{

    private $id;

    // Group argument being used by both prefixed components and metaGroups
    // Might need to be separated at some point
    public function getMeta($name = '', $group = '')
    {
        return carbon_get_post_meta($this->getId(), $group . $name);
    }

    public function setId($id = 0)
    {
        $this->id = $id;
    }

    // Returns assinged id if present, else gets global value
    // Allows use of content getting methods outside of the loop
    private function getId()
    {
        if (!$this->id) {
            $post = get_queried_object();
            $this->setId($post->ID);
        }
        return $this->id;
    }

    public function content()
    {
        return apply_filters(
            'the_content',
            get_post_field(
                'post_content',
                $this->getId()
            )
        );
    }

    public function url()
    {
        return get_permalink($this->getId());
    }

    public function title()
    {
        $post = get_post($this->getId());
        return $post->post_title;
    }

    public function featuredImageId()
    {
        return get_post_thumbnail_id($this->getId());
    }

    public function featuredImageUrl()
    {
        return wp_get_attachment_image_src($this->featuredImageId(), 'full')[0];
    }
}
