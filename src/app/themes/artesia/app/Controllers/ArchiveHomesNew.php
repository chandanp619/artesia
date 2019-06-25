<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use Sober\Controller\Module\Tree;

class ArchiveHomesNew extends Controller implements Tree
{
    use Helpers\Archive;
    use Helpers\Components;
    use Partials\Banner;
    use Partials\ContentBlock;
    use Partials\FeaturedPanel;
    use Partials\LogoBar;
    use Partials\PanelMenu;
    use Partials\FullWidthPanel;
    use Partials\LotMap;
    use Partials\HomeTiles;

    public static $viewPrefix = 'archive_showhomes_new_';

    public static function title($postID=0){
        $title = get_the_title($postID);
        return $title;
    }

    public static function area($postID=0){
        $area = get_post_meta($postID,'_home_area',true);
        return $area;
    }

    public static function bedrooms($postID=0){
        $bedrooms = get_post_meta($postID,'_home_beds',true);
        return $bedrooms;
    }

    public static function bathrooms($postID=0){
        $bathrooms = get_post_meta($postID,'_home_baths',true);
        return $bathrooms;
    }

    public static function price_start($postID=0){
        $price = get_post_meta($postID,'_home_price_start',true);
        return number_format($price,0,".",",");
    }



    public static function featuredLogo($postID=0){
        $logo = get_post_meta($postID,'_featured_logo',true);
        return $logo;
    }

    public static function featuredImageUrl($ID){
        $url = get_the_post_thumbnail_url($ID,'full');
        if($url==""){
            $url= get_template_directory_uri()."/assets/images/blog-no-image.jpg";
        }
        return $url;

    }

    public static function BuilderLogo($postID=0){

        $builder_logo = get_post_meta($postID,'_builder_logo',true);

        return $builder_logo;
    }

    public static function address($postID=0){
        $address = get_post_meta($postID,'_address',true);
        return $address;
    }

    public static function timeings($postID=0){
        $timeings = get_post_meta($postID,'_visit_timing',true);
        return nl2br($timeings);
    }

    public static function phone($postID=0){
        $phone = get_post_meta($postID,'_home_phone',true);
        return $phone;
    }

    public static function email($postID=0){
        $email = get_post_meta($postID,'_home_email',true);
        return $email;
    }

    public static function homeURL($postID=0){
        $homeURL = get_permalink($postID);
        return $homeURL;
    }



    public static function ShowHomesNew(){
        $paged = get_query_var('paged');
        $args = array(
            'post_type' => 'homes-new',
            'post_status'=> 'publish',
            'paged' => $paged
        );

        $homes = new \WP_Query($args);
        return $homes->posts;
    }

    public static function galleryImages($ID = 0){
        global $wpdb;
        $trimmed_regexp = "_gallery_images%";
        $meta = $wpdb->get_results( $wpdb->prepare("SELECT meta_value FROM {$wpdb->postmeta} WHERE meta_key LIKE %s AND post_id = %d", $trimmed_regexp, $ID ) );

        $images = array();
        foreach($meta as $imageID){
            $images[] = wp_get_attachment_url($imageID->meta_value);
        }
        return $images;

    }
}
