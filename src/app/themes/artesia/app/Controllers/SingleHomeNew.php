<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use Sober\Controller\Module\Tree;


class SingleHomeNew extends Controller implements Tree
{
    //public static $viewPrefix = 'archive_showhomes_new_';
    use Helpers\Post;
    use Helpers\Components;
    use Partials\Banner;


    public static function Hometitle(){

        global $post;
        $title = get_the_title($post->ID);
        return $title;

    }

    public static function area(){
        global $post;
        $area = get_post_meta($post->ID,'_home_area',true);
        return $area;
    }

    public static function bedrooms(){
        global $post;
        $bedrooms = get_post_meta($post->ID,'_home_beds',true);
        return $bedrooms;
    }

    public static function bathrooms(){

        global $post;
        $bathrooms = get_post_meta($post->ID,'_home_baths',true);
        return $bathrooms;
    }

    public static function price_start(){
        global $post;
        $price = get_post_meta($post->ID,'_home_price_start',true);
        return number_format($price,0,".",",");
    }

    public static function BuilderLogo(){
        global $post;
        $builder_logo = get_post_meta($post->ID,'_builder_logo',true);
        return $builder_logo;
    }

//    public static function featuredLogo(){
//        global $post;
//        $logo = get_post_meta($post->ID,'_featured_logo',true);
//        return $logo;
//    }

//    public static function mfeaturedImageUrl(){
//        global $post;
//        $url = get_the_post_thumbnail_url($post->ID,'full');
//        if($url==""){
//            $url= get_template_directory_uri()."/assets/images/blog-no-image.jpg";
//        }
//        return $url;
//
//    }


    public static function address(){
        global $post;
        $address = get_post_meta($post->ID,'_address',true);
        return $address;
    }

    public static function timeings(){
        global $post;
        $timeings = get_post_meta($post->ID,'_visit_timing',true);
        return nl2br($timeings);
    }

    public static function phone(){
        global $post;
        $phone = get_post_meta($post->ID,'_home_phone',true);
        return $phone;
    }

    public static function email(){
        global $post;
        $email = get_post_meta($post->ID,'_home_email',true);
        return $email;
    }

    public static function homeURL(){
        global $post;
        $homeURL = get_permalink($post->ID);
        return $homeURL;
    }

    public static function features(){

        global $post;
        $features = get_post_meta($post->ID,'_content_block',true);
        return $features;


    }



    public static function galleryImages(){
        global $post;
        global $wpdb;
        $trimmed_regexp = "_gallery_images%";
        $meta = $wpdb->get_results( $wpdb->prepare("SELECT meta_value FROM {$wpdb->postmeta} WHERE meta_key LIKE %s AND post_id = %d", $trimmed_regexp, $post->ID ) );

        $images = array();
        foreach($meta as $imageID){
            $images[] = wp_get_attachment_url($imageID->meta_value);
        }
        return $images;

    }

    public static function planImages(){
        global $post;
        $imagesArr = array();
        $arr_fp = array('_floor_plan_image1','_floor_plan_image2','_floor_plan_image3','_floor_plan_image4','_floor_plan_image5','_floor_plan_image6');
        foreach($arr_fp as $fp){
            $images = [];
            if($im = get_post_meta($post->ID,$fp,true)) {
                $images['image'] = wp_get_attachment_url($im);
                $images['caption'] = get_post_meta($post->ID,$fp."_caption",true);
            }
            $imagesArr[] = $images;

        }

        return array_filter($imagesArr);
    }

    public static function thickbox(){
        return add_thickbox();
    }

    public static function contactLink(){
        $page = get_page_by_path('/contact');
        $url = get_permalink($page->ID);
        return $url;
    }
}
