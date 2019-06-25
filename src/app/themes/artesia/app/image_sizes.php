<?php

/**
 * Setup custom image sizes
 */

add_action('after_setup_theme', function () {
    add_image_size('banner-title-small', 250, 80);
    add_image_size('banner-title-medium', 375, 120);
    add_image_size('banner-title-large', 500, 160);

    add_image_size('square-small', 300, 300, true);
    add_image_size('square-medium', 500, 500, true);
    add_image_size('square-medum-large', 750, 750, true);
    add_image_size('square-large', 1000, 1000, true);

    add_image_size('feature-small', 250, 150, true);
    add_image_size('feature-medium', 400, 240, true);
    add_image_size('feature-medium-large', 600, 360, true);
    add_image_size('feature-large', 900, 540, true);
});
