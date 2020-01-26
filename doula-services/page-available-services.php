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
                'category_name' => 'available-services'
            );
            $arr_posts = new WP_Query($args);

            if ($arr_posts->have_posts()) :
                $index = 0;
                while ($arr_posts->have_posts()) : $arr_posts->the_post();

                if ($index % 2 === 0) {
                    $index++;
                    get_template_part('partials/available-service-overview-right');
                } else {
                    $index++;
                    get_template_part('partials/available-service-overview-left');
                }

                endwhile;
            endif;
            ?>

        </div>
    </div>
<?php get_footer(); ?>