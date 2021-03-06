<?php get_header(); ?>
    <div class="doula-services">

        <?php wp_nav_menu('&container_class=collapsed menu-doula-services-container &menu=doula-services'); ?>

        <div class="services-content">

            <?php
            if (have_posts()) : while (have_posts()) : the_post();
                get_template_part('partials/page-content', get_post_format());
            endwhile; endif;
            ?>

            <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'whats-a-doula'
            );
            $arr_posts = new WP_Query($args);

            ?>

            <div class="bubbles">
                <?php

                if ($arr_posts->have_posts()) :
                    while ($arr_posts->have_posts()) : $arr_posts->the_post();
                        get_template_part('partials/whats-a-doula-bubble');
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>