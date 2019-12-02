
<?php get_header(); ?>
<div class="doula-services">


    <?php wp_nav_menu('menu=doula-services'); ?>

    <div class="services-content">

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
    get_template_part( 'partials/service-content', get_post_format() );
endwhile; endif;
?>
    </div>
</div>

<?php get_footer(); ?>