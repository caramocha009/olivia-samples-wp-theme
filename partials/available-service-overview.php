<div class="<?php
        $sanitizedTitle = sanitize_title(get_the_title());

        $alignment = array(
            "initial-consultation" => "left",
            "prenatal-care" => "right",
            "birth-and-labor-services" => "left",
            "postpartum-care" => "right"
        );

        echo $alignment[$sanitizedTitle];
    ?>">
    <h2 class="name"><?php the_title(); ?></h2>

    <div class="description"><?php

        the_content();

        $services = array(
            "prenatal-care" => "Prenatal Care",
            "birth-and-labor-services" => "Birth and Labor Services"
        );

        if (isset($services[$sanitizedTitle])): ?>
            <a href="<?php echo get_page_link(get_page_by_title($services[$sanitizedTitle])->ID); ?>\"><p>Explore <?php the_title(); ?></p></a>
        <?php endif; ?>
    </div>
</div>
