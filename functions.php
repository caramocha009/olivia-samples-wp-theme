<?php

// creates path to create child pages
add_filter(
    'page_template',
    function ($template) {
        global $post;

        if ($post->post_parent) {

            // get top level parent page
            $parent = get_post(
                reset(array_reverse(get_post_ancestors($post->ID)))
            );

            // or ...
            // when you need closest parent post instead
            // $parent = get_post($post->post_parent);

            $child_template = locate_template(
                [
                    $parent->post_name . '/page-' . $post->post_name . '.php',
                    $parent->post_name . '/page-' . $post->ID . '.php',
                    $parent->post_name . '/page.php',
                ]
            );

            if ($child_template) return $child_template;
        }
        return $template;
    }
);

// loads css sheet
wp_enqueue_style( 'style', get_stylesheet_uri() );

// loads jquery and js files
function add_custom_script()
{
    wp_register_script('custom_script', get_template_directory_uri() . '/js/custom_scripts.js', array('jquery'));
    wp_enqueue_script('custom_script');
}

add_action('wp_enqueue_scripts', 'add_custom_script');


// adds menus to admin theme
function register_menus() {
    register_nav_menus(
        array(
            'headers-menu' => __('Header Menu'),
            'doula-services' => __('Doula Services Side Menu'),
        )
    );
}
add_action( 'init', 'register_menus' );

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}
add_filter('show_admin_bar', 'remove_admin_bar');

?>