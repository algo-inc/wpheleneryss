<?php
get_header();
?>
    <div class="title-and-subtitle">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
<?php
get_template_part('template-parts/swiper')
?>
<?php

get_footer();

