<?php

namespace App;

add_action('admin_head', function () {
        $role_object = get_role('editor');
        $role_object->add_cap('edit_theme_options');
        $role_object->add_cap('create_users');
        $role_object->add_cap('list_users');
});

// Exposes options pages for non-admins
add_filter('carbon_fields_theme_options_container_admin_only_access', '__return_false');
