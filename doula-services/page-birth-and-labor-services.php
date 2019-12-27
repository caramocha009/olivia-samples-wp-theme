<?php get_header(); ?>

<div class="doula-services explore">
    <?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'birth-and-labor-services'
    );
    $arr_posts = new WP_Query($args);

    if ($arr_posts->have_posts()) :
        while ($arr_posts->have_posts()) : $arr_posts->the_post();
            get_template_part('partials/explore-service');
        endwhile;
    endif;
    ?>
</div>

<?php get_footer(); ?>