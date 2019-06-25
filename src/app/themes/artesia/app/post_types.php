<?php

namespace App;

/**
 * Remove blog
 */

add_action(
    'admin_menu',
    function () {
        remove_menu_page('edit.php');
    }
);

add_action(
    'wp_before_admin_bar_render',
    function () {
        global $wp_admin_bar;
        $wp_admin_bar->remove_menu('new-post');
    }
);

/**
 * Remove Featured Image from pages
 */

add_action(
    'do_meta_boxes',
    function () {
        remove_meta_box('postimagediv', 'page', 'side');
    }
);

/**
 * Custom Types
*/

add_action(
    'init',
    function () {
        /**
         * Showhomes
         */
        register_post_type(
            'homes',
            // CPT Options
            array(
            'labels' => array(
                'name'                  => __('Showhomes'),
                'singular_name'         => __('Showhome'),
                'add_new'               => __('Add New'),
                'add_new_item'          => __('Add New Showhome'),
                'new_item'              => __('New Showhome'),
                'edit_item'             => __('Edit Showhome'),
                'view_item'             => __('View Showhome'),
                'all_items'             => __('All Showhomes'),
                'search_items'          => __('Search Showhomes'),
                'parent_item_colon'     => __('Parent Showhomes:'),
                'not_found'             => __('No showhomes found.'),
                'not_found_in_trash'    => __('No showhomes found in Trash.')
            ),
            'public' => true,
            'has_archive' => true,
            'publicly_queryable'  => true,
            'menu_icon' => 'dashicons-admin-multisite',
            'rewrite' => array(
                'slug' => 'homes',
                'with_front' => false
            ),
            'supports' => array('title','editor','thumbnail','custom_fields'),
            )
        );
        
        /**
         * Lots
         */
        register_post_type(
            'lots',
            // CPT Options
            array(
                'labels' => array(
                'name'                  => __('Lots'),
                'singular_name'         => __('Lot'),
                'add_new'               => __('Add New'),
                'add_new_item'          => __('Add New Lot'),
                'new_item'              => __('New Lot'),
                'edit_item'             => __('Edit Lot'),
                'view_item'             => __('View Lot'),
                'all_items'             => __('All Lots'),
                'search_items'          => __('Search Lots'),
                'parent_item_colon'     => __('Parent Lots:'),
                'not_found'             => __('No lots found.'),
                'not_found_in_trash'    => __('No lots found in Trash.')
            ),
            'public' => true,
            'menu_icon' => 'dashicons-location',
            'supports' => array('title','thumbnail'),
            )
        );
        /**
         * Blog Post Type
         * 
         */
        $blogslabels = array(
            'name'               => _x( 'Blogs', 'post type general name', 'sage' ),
            'singular_name'      => _x( 'Blog', 'post type singular name', 'sage' ),
            'menu_name'          => _x( 'Blogs', 'admin menu', 'sage' ),
            'name_admin_bar'     => _x( 'Blog', 'add new on admin bar', 'sage' ),
            'add_new'            => _x( 'Add New', 'blog', 'sage' ),
            'add_new_item'       => __( 'Add New Blog', 'sage' ),
            'new_item'           => __( 'New Blog', 'sage' ),
            'edit_item'          => __( 'Edit Blog', 'sage' ),
            'view_item'          => __( 'View Blog', 'sage' ),
            'all_items'          => __( 'All Blog', 'sage' ),
            'search_items'       => __( 'Search Blogs', 'sage' ),
            'parent_item_colon'  => __( 'Parent Blogs:', 'sage' ),
            'not_found'          => __( 'No blogs found.', 'sage' ),
            'not_found_in_trash' => __( 'No blogs found in Trash.', 'sage' )
        );
    
        $blogsargs = array(
            'labels'             => $blogslabels,
            'description'        => __( 'Description.', 'sage' ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'blog' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 10,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
            'taxonomies'        => array('post_tag')
        );
    
        register_post_type('blog',$blogsargs);

//        $ShowHomeslabels = array(
//            'name'               => _x( 'Show Homes', 'post type general name', 'sage' ),
//            'singular_name'      => _x( 'Show Home', 'post type singular name', 'sage' ),
//            'menu_name'          => _x( 'Show Homes', 'admin menu', 'sage' ),
//            'name_admin_bar'     => _x( 'Show Home', 'add new on admin bar', 'sage' ),
//            'add_new'            => _x( 'Add New', 'blog', 'sage' ),
//            'add_new_item'       => __( 'Add New Show Home', 'sage' ),
//            'new_item'           => __( 'New Show Home', 'sage' ),
//            'edit_item'          => __( 'Edit Show Home', 'sage' ),
//            'view_item'          => __( 'View Show Home', 'sage' ),
//            'all_items'          => __( 'All Show Homes', 'sage' ),
//            'search_items'       => __( 'Search Show Homes', 'sage' ),
//            'parent_item_colon'  => __( 'Parent Show Homes:', 'sage' ),
//            'not_found'          => __( 'No show homes found.', 'sage' ),
//            'not_found_in_trash' => __( 'No show homes found in Trash.', 'sage' )
//        );
//
//        $ShowHomesargs = array(
//            'labels'             => $ShowHomeslabels,
//            'description'        => __( 'Description.', 'sage' ),
//            'public'             => true,
//            'publicly_queryable' => true,
//            'show_ui'            => true,
//            'show_in_menu'       => true,
//            'query_var'          => true,
//            'rewrite'            => array( 'slug' => 'show-home' ),
//            'capability_type'    => 'post',
//            'has_archive'        => true,
//            'hierarchical'       => false,
//            'menu_position'      => 10,
//            'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' )
//
//        );
//
//        register_post_type('show-home',$ShowHomesargs);

        register_post_type(
            'homes-new',
            // CPT Options
            array(
                'labels' => array(
                    'name'                  => __('Ready to Move'),
                    'singular_name'         => __('Ready to Move'),
                    'add_new'               => __('Add New'),
                    'add_new_item'          => __('Add New Ready to Move'),
                    'new_item'              => __('New Ready to Move'),
                    'edit_item'             => __('Edit Ready to Move'),
                    'view_item'             => __('View Ready to Move'),
                    'all_items'             => __('All Ready to Move'),
                    'search_items'          => __('Search Ready to Move'),
                    'parent_item_colon'     => __('Parent Ready to Move:'),
                    'not_found'             => __('No Ready to Move found.'),
                    'not_found_in_trash'    => __('No Ready to Move found in Trash.')
                ),
                'public' => true,
                'has_archive' => true,
                'publicly_queryable'  => true,
                'menu_icon' => 'dashicons-admin-home',
                'rewrite' => array(
                    'slug' => 'homes',
                    'with_front' => false
                ),
                'supports' => array('title','editor','thumbnail','custom_fields'),
            )
        );
    }
);
