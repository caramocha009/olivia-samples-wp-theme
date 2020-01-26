<div class="left">
    <h2 class="name"><?php the_title(); ?></h2>

    <div class="description"><?php

        the_content();

        $services = array(
            "prenatal-care" => "Prenatal Care",
            "birth-and-labor-services" => "Birth and Labor Services",
            "postpartum-care" => "Postpartum Care"
        );

        $sanitizedTitle = sanitize_title(get_the_title());

        if (isset($services[$sanitizedTitle])): ?>
            <a href="<?php echo get_page_link(get_page_by_title($services[$sanitizedTitle])->ID); ?>\"><p>Explore <?php the_title(); ?></p></a>
        <?php endif; ?>
    </div>
</div>
