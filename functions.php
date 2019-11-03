<?php

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
//             $parent = get_post($post->post_parent);

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

wp_enqueue_style( 'style', get_stylesheet_uri() );