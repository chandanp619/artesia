<?php

namespace App\Controllers\Helpers;

use App\Debug;

trait Helpers
{

    public static function imageMarkup($id, array $args = [])
    {
        $sizes = (isset($args['sizes'])) ? $args['sizes'] : 'auto';
        $class = (isset($args['class'])) ? $args['class'] : '';
        $wp_size = (isset($args['wp_size'])) ? $args['wp_size'] : '';
        $src_size = (isset($args['src_size'])) ? $args['src_size'] : '';
        $src_size = ($src_size) ? $src_size : $wp_size;
        $srcset_size = (isset($args['srcset_size'])) ? $args['srcset_size'] : '';
        $srcset_size = ($srcset_size) ? $srcset_size : $wp_size;
        $url = wp_get_attachment_image_url($id, $src_size);

        $info = new \SplFileInfo($url);

        if (isset($args['inline_svg']) &&
            $args['inline_svg'] &&
            $info->getExtension() === 'svg'
        ) {
            $output = '<div ';
            $output .= 'class="inline-svg-wrapper ' . $class . '" >';
            $output .= file_get_contents(get_attached_file($id));
            $output .= '</div>';
            return $output;
        }


        $output = '<img ';
        $output .= 'data-srcset="' . self::imageSrcSet($id, $srcset_size) . '" ';
        $output .= 'data-sizes="' . $sizes . '" ';
        // Base64 image forces modern browsers to lazy-load
        // https://github.com/aFarkas/lazysizes#modern-transparent-srcset-pattern
        $output .= 'srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="';
        $output .= 'src="' . $url . '" ';
        $output .= 'class="lazyload ' . $class . '" ';
        $output .= 'alt="' . get_post_meta($id, '_wp_attachment_image_alt', true) . '" ';
        $output .= '/>';
        return $output;
    }

    public static function imageSrcSet($id, $wp_size)
    {
        $srcset = wp_get_attachment_image_srcset($id, $wp_size);

        return ($srcset) ? $srcset : "Uploaded image not large enough, please use an image at least as large as '$wp_size'.";
    }

    public static function bgAttributes($id, array $args = [])
    {
        $sizes = (isset($args['sizes'])) ? $args['sizes'] : 'auto';
        $class = (isset($args['class'])) ? $args['class'] : '';
        $wp_size = (isset($args['wp_size'])) ? $args['wp_size'] : '';
        $src_size = (isset($args['src_size'])) ? $args['src_size'] : '';
        $src_size = ($src_size) ? $src_size : $wp_size;
        $srcset_size = (isset($args['srcset_size'])) ? $args['srcset_size'] : '';
        $srcset_size = ($srcset_size) ? $srcset_size : $wp_size;
        $url = wp_get_attachment_image_url($id, $src_size);

        $output = 'style="background-image: url(' . $url . ')" ';
        $output .= 'data-bgset="' . self::imageSrcSet($id, $srcset_size) . '" ';
        $output .= 'data-sizes="' . $sizes . '" ';
        $output .= 'class="lazyload ' . $class . '" ';
        
        return $output;
    }

    public static function linkMarkup($url = '', $content = '', array $args = [])
    {
        $class = (isset($args['class'])) ? $args['class'] : '';
        $closingTag = (isset($args['closingTag'])) ? $args['closingTag'] : true;
        $newTab = (isset($args['newTab'])) ? $args['newTab'] : false;
        $link = parse_url($url);

        if (isset($link['host']) && $link['host'] !== $_SERVER['HTTP_HOST']) {
            $newTab = true;
        }

        $output = '<a href ="' . $url . '" ';
        $output .= 'class="' . $class . '" ';
        if ($newTab) {
            $output .= 'target="_blank" ';
        }
        $output .= '>' . $content;
        if ($closingTag) {
            $output .= '</a>';
        }

        return $output;
    }
}
