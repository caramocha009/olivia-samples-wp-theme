<div class="
    <?php
    //clean names of all "What's a Doula?" category posts
    $bubbles = array(
        'how-can-a-doula-impact-a-birth' => "doula-bubble doulas-impact",
        "what-dont-doulas-do" => "doula-bubble doulas-dont",
        "what-do-doulas-do" => "doula-bubble doulas-do",
        "doula-benefits" => "doula-quote doula-benefits"
    );

    $currentTitle = get_the_title();
    $sanitizedTitle = sanitize_title($currentTitle);

    echo $bubbles[$sanitizedTitle];
    ?>
">
    <h2 class="bubble-q">
        <?php the_title(); ?>
    </h2>

    <div class="bubble-a">
        <?php the_content(); ?>
    </div>
</div>
