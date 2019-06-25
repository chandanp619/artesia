<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use Sober\Controller\Module\Tree;


class SingleBlog extends Controller implements Tree
{
    use Helpers\Post;
    use Helpers\Components;
    use Partials\Banner;

    public function backUrl()
    {
        return get_post_type_archive_link('homes');
    }

    public function homeUrl()
    {
        $external = $this->getMeta('home_external_url');

        return ($external) ? $external : $this->url();
    }

    public static function bannerImageURL(){
        global $post;
        $image = get_post_meta($post->ID,'_blog_banner_image',true);
        $url = $image;
//        if($url==""){
//            $url= get_template_directory_uri()."/assets/images/blog-default-banner.jpg";
//        }
        return $url;
    }

    public static function featuredImageURL(){
        global $post;
        $url = get_the_post_thumbnail_url($post->ID,'full');
        if($url==""){
            $url= get_template_directory_uri()."/assets/images/blog-no-image.jpg";
        }
        return $url;
    }

    public function date(){
        global $post;
        $date = get_the_date('F j,Y',$post->ID);
        return $date;
    }

    public static function contactLink(){
        $contactPage = get_page_by_path('/contact');
        return get_permalink($contactPage->ID);
    }

    public static function getBlogTags()
    {
        global $post;
        $blogtags = wp_get_post_tags($post->ID);

        return $blogtags;
    }

}
