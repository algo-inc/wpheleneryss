<?php
get_header();
?>
    <div class="title-and-subtitle">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
    <div class="projects">
        <?php
        $posts = get_posts([
            'post_type' => 'project',
            'numberposts' => 6
        ]);
        foreach ($posts as $post) {
            setup_postdata($post);
            get_template_part('template-parts/project');
        }
        wp_reset_postdata();
        ?>
    </div>
<?php

get_footer();

