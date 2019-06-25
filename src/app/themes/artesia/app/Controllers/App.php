<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use App\Debug;

class App extends Controller
{

    use Helpers\Helpers;
    use Helpers\Components;
    use Helpers\Site;
    use Partials\StickyTab;

    public function siteName()
    {
        return get_bloginfo('name');
    }

    //@TODO rewrite this for other views to get away from global/loop values
    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function homeUrl()
    {
        return home_url('/');
    }

    public function navPrimary()
    {

        if (!has_nav_menu('primary_navigation')) {
            return '';
        }

        return wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'nav-primary-menu',
            'echo' => false,
            'walker' => new Artesia_Nav_Walker()
        ]);
    }

    public function languageAttributes()
    {
        return get_language_attributes();
    }

    public function bodyClass()
    {
        return join(' ', get_body_class());
    }

    public function wpHead()
    {
        ob_start();
        wp_head();
        return ob_get_clean();
    }

    public function wpFooter()
    {
        ob_start();
        wp_footer();
        return ob_get_clean();
    }

    public function svgSpritesheet()
    {
        return file_get_contents(get_template_directory() . '/assets/icomoon/symbol-defs.svg');
    }

    public static function debug()
    {
        return new Debug;
    }

    public static function faviconDirectory()
    {
        return get_template_directory_uri() . '/assets/favicons/';
    }
}


class Artesia_Nav_Walker extends \Walker_Nav_Menu {

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $classes     = empty ( $item->classes ) ? array () : (array) $item->classes;

        $class_names = join(
            ' '
            ,   apply_filters(
                'nav_menu_css_class'
                ,   array_filter( $classes ), $item
            )
        );

        ! empty ( $class_names )
        and $class_names = ' class="'. esc_attr( $class_names ) . '"';

        $output .= "<li id='menu-item-$item->ID' $class_names>";

        $attributes  = '';

        ! empty( $item->attr_title )
        and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
        ! empty( $item->target )
        and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
        ! empty( $item->xfn )
        and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
        ! empty( $item->url )
        and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';


        $description = ( ! empty ( $item->description ) and 0 == $depth )
            ? '<small class="nav_desc">' . esc_attr( $item->description ) . '</small>' : '';

        $title = apply_filters( 'the_title', $item->title, $item->ID );

        if($title=='Logo'){


            $item_output =  $args->before.'<a '.$attributes .'><svg class="icon icon-logo"><use xlink:href="#icon-logo"></use></svg> </a>';

            $output .= apply_filters(
                'walker_nav_menu_start_el'
                , $item_output
                , $item
                , $depth
                , $args
            );

        }else {

            $item_output = $args->before
                . "<a $attributes>"
                . $args->link_before
                . $title
                . '</a> '
                . $args->link_after
                . $description
                . $args->after;


            $output .= apply_filters(
                'walker_nav_menu_start_el'
                , $item_output
                , $item
                , $depth
                , $args
            );
        }
    }
}