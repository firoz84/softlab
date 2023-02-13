<?php



function softlab_acf_op_init(){

    if( function_exists('acf_add_options_page') ){

        acf_add_options_page(array(
            'page_title'    => __('Theme General Settings','softlab'),
            'menu_title'    => __('Theme Options','softlab'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
        acf_add_options_sub_page(array(
            'page_title'    => __('Hero section','softlab'),
            'menu_title'    => __('Hero','softlab'),
            'parent_slug'   => 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title'    => __('Product section','softlab'),
            'menu_title'    => __('Product Title','softlab'),
            'parent_slug'   => 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title'    => __('About section','softlab'),
            'menu_title'    => __('About Section','softlab'),
            'parent_slug'   => 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title'    => __('Service section','softlab'),
            'menu_title'    => __('Service Section','softlab'),
            'parent_slug'   => 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title'    => __('Testimonial section','softlab'),
            'menu_title'    => __('Testimonial Section','softlab'),
            'parent_slug'   => 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title'    => __('Counter section','softlab'),
            'menu_title'    => __('Counter Section','softlab'),
            'parent_slug'   => 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title'    => __('Coll to action','softlab'),
            'menu_title'    => __('Coll to action','softlab'),
            'parent_slug'   => 'theme-general-settings',
        ));
        acf_add_options_sub_page(array(
            'page_title'    => __('Blog sections','softlab'),
            'menu_title'    => __('Blog sections','softlab'),
            'parent_slug'   => 'theme-general-settings',
        ));
    }

}

add_action('acf/init', 'softlab_acf_op_init');