<div class="page-content">
    <h2 class="page-title"><?php the_title(); ?></h2>
    <?php the_content(); ?>

    <a href="<?php echo get_page_link(get_page_by_title('My Services')->ID); ?>\"><p>Explore My Services</p></a>
</div>
