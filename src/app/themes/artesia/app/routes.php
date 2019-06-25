<?php

namespace App;

use App\Debug;

add_action('init', function () {
    add_rewrite_rule('lots/?', 'index.php?post_type=homes', 'top');
    add_rewrite_rule('lots/([^/]*)/?', 'index.php?post_type=homes', 'top');
});

add_action('wp', function () {
    if (!is_archive() && !is_admin() && get_post_type() === 'homes' && carbon_get_the_post_meta('home_external_url')) {
        wp_redirect(carbon_get_the_post_meta('home_external_url'));
        exit;
    }
});
