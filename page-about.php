
<?php get_header(); ?>

<div class="about">
    <span></span>

<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
    get_template_part( 'partials/content', get_post_format() );
endwhile; endif;
?>

</div>
<?php get_footer(); ?>