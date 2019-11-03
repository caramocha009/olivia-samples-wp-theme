<?php get_header(); ?>

<?php wp_nav_menu( 'menu=doula-services' ); ?>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
    get_template_part( 'content', get_post_format() );
endwhile; endif;
?>

<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'birth-and-labor-services'
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