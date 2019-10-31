<?php get_header(); ?>
<p>doula services</p>

<?php wp_nav_menu( 'menu=doula-services' ); ?>


<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'whats-a-doula'
);
$arr_posts = new WP_Query($args);

if ($arr_posts->have_posts()) :
    while ($arr_posts->have_posts()) :
        $arr_posts->the_post();
        ?>
        <p><?php the_title(); ?></p>
        <div>
            <?php the_content(); ?>
        </div>
    <?php
    endwhile;
endif;
?>

<?php get_footer(); ?>