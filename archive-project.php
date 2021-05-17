<?php
get_header();
?>
    <div class="title-and-subtitle">
        <h1>Проекты</h1>
        <p>Описание</p>
    </div>
    <div class="projects">
        <?php if (have_posts()): ?>
            <?php
            while (have_posts()) : the_post();
                get_template_part('template-parts/project');
            endwhile; ?>

        <?php endif; ?>
    </div>
<?php

get_footer();

