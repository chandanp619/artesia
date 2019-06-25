<?php

namespace App\Controllers;

use Sober\Controller\Controller;

/*
 * Functions which should be included in every post view
 * as long as they implement Sober\Controller\Module\Tree
 */
class Singular extends Controller
{
    private $id;

    private function setId($id)
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
}
