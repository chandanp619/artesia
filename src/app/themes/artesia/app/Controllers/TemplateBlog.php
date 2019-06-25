<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use Sober\Controller\Module\Tree;

class TemplateBlog extends Controller implements Tree
{
    use Helpers\Post;
    use Helpers\Components;
    use Partials\Banner;

    public static $blog_query = null;

    public static function getBlog(){
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $query_args = array(
            'post_type' => 'blog',
            'post_status' => 'publish',
            'paged' => $paged
        );
        $tag = isset($_REQUEST['tag'])?$_REQUEST['tag']:'';
        if($tag!=''){
            $query_args['tag'] = array($_REQUEST['tag']);
            //$query_args['posts_per_page'] = -1;
        }

        if(isset($_REQUEST['searchText']) && $_REQUEST['searchText']!=''){
            $query_args = array("s"=>sanitize_text_field($_REQUEST['searchText']));
        }

        $blogs = new \WP_Query($query_args);
        self::$blog_query = $blogs;
        return $blogs->posts;     
    }
    public static function getPermalink($postID=0){
        return get_permalink($postID);
    }
    public static function getBlogDate($postID=0){
        return get_the_date('F j,Y',$postID);
    }

    public static function getPagination(){

        $big = 999999999; // need an unlikely integer
            
            $big = 999999999; // need an unlikely integer
            $translated = __( 'Page', 'sage' ); // Supply translatable string
            $pgn_args = array(
                'base' => str_replace( array($big, '#038;'), array('%#%', ''), esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => self::$blog_query->max_num_pages,
                'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>',

            ) ;

            if(isset($_REQUEST['tag']) && $_REQUEST['tag']!=''){
            $pgn_args['add_args'] = array( 'tag' => $_REQUEST['tag'] );
            }

            return paginate_links($pgn_args );
    }


    public static function getTags(){
        $terms = [];
        $tags = get_tags();
        usort($tags, function($a, $b){
                return strcmp($a->name, $b->name);
            });

        foreach($tags as $t){
            $term_meta = get_term_meta($t->term_id, '_display_term_frontend', true);

            if($term_meta=='yes'){
                $terms[] = $t;
            }
        }



            return($terms);
    }
    public static function termLink($tag = 0){
        

        parse_str($_SERVER['REQUEST_URI'],$paramsX);
        $paramsX['tag'] = $tag->slug;
        unset($paramsX['paged']);
        $urlnX = "";
        foreach($paramsX as $k=>$v){
            $urlnX .= "&".$k."=".$v;
        }
        $urlnX = esc_url(ltrim($urlnX,"&"));
        return urldecode($urlnX);
    }

    public static function featuredImageUrl($ID){
        $url = get_the_post_thumbnail_url($ID,'full');
        if($url==""){
            $url= get_template_directory_uri()."/assets/images/blog-no-image.jpg";
        }
        return $url;

    }

    public static function searchFormAction(){
        $page = get_page_by_path('/blog/');
        return get_permalink($page->ID);
    }

    public static function searchtext(){
        if(isset($_REQUEST['searchText']) && $_REQUEST['searchText']!='')
        {
            return $_REQUEST['searchText'];
        }else{
            return '';
        }
    }
}
