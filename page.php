<?php
get_header();
?>
    <div class="title-and-subtitle">
        <h1><?php the_title(); ?></h1>
        <div class="projects">
        <?php the_content(); ?>
        </div>
    </div>
<?php
get_footer();

