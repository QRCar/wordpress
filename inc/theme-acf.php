<?php

function qrcar_acf_option_page()
{

    acf_add_options_page();

}

add_action('init', 'qrcar_acf_option_page');


function qrcar_acf_register_block() {

    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type([
            'name'              => 'section_home',
            'title'             => 'section_home',
            'icon'              => 'welcome-widgets-menus',
            'render_template'   => 'page-template/blocs/section-home.php',
        ]);

        acf_register_block_type([
            'name'              => 'last_article',
            'title'             => 'last article',
            'icon'              => 'welcome-widgets-menus',
            'render_template'   => 'page-template/blocs/section-last-article.php',
        ]);

    }
}

add_action('acf/init', 'qrcar_acf_register_block');



function qrcar_google_map_api_key ( $api ) {

    $api['key'] = get_field('google_map_api_key', 'option');

    return $api;

}

add_filter('acf/fields/google_map/api', 'qrcar_google_map_api_key');


function qrcar_acf_update_google_map_api_key () {

    acf_update_setting('google_api_key', get_field('google_map_api_key', 'option'));

}

add_action('acf/init', 'qrcar_acf_update_google_map_api_key');