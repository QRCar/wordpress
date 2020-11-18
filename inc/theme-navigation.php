<?php

function qrcar_create_menu()
{
    register_nav_menus([
        'primary' => __('primary', 'qrcar'),
        'footer-legal' => __('Footer Legal', 'qrcar'),
    ]);
}

add_action('init', 'qrcar_create_menu');


function qrcar_navigation_walker()
{
    if ( ! file_exists( get_template_directory() . '/walkers/class-wp-bootstrap-navwalker.php' ) ) {
        return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
    } else {
        require_once get_template_directory() . '/walkers/class-wp-bootstrap-navwalker.php';
    }
}

add_action('init', 'qrcar_navigation_walker');

/**
 * Add custom bootstrap class to logo link
 *
 * @param $html
 * @return string|string[]
 */
function qrcar_add_bs_class_to_custom_logo($html)
{
    $html = str_replace('custom-logo-link', 'custom-logo-link navbar-brand', $html);

    return $html;
}

add_filter('get_custom_logo', 'qrcar_add_bs_class_to_custom_logo');