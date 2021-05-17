<div id="menu-wrapper" class="menu-wrapper">
    <div class="container">
        <button id="close-button" class="menu__close-button animate-after-background">
            <svg version="1.1" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                 width="42px" height="42px" viewBox="0 0 42 42" xml:space="preserve">
                <path fill-rule="evenodd" d="M21.002,26.588l10.357,10.604c1.039,1.072,1.715,1.083,2.773,0l2.078-2.128
                c1.018-1.042,1.087-1.726,0-2.839L25.245,21L36.211,9.775c1.027-1.055,1.047-1.767,0-2.84l-2.078-2.127
                c-1.078-1.104-1.744-1.053-2.773,0L21.002,15.412L10.645,4.809c-1.029-1.053-1.695-1.104-2.773,0L5.794,6.936
                c-1.048,1.073-1.029,1.785,0,2.84L16.759,21L5.794,32.225c-1.087,1.113-1.029,1.797,0,2.839l2.077,2.128
                c1.049,1.083,1.725,1.072,2.773,0L21.002,26.588z"></path>
            </svg>

        </button>
        <h2 class="animate-after-background"><?= wp_get_nav_menu_name('main_menu'); ?></h2>
        <?php
        wp_nav_menu(['theme_location' => 'main_menu', 'container' => '', 'menu_class' => 'menu']);
        ?>
        <div class="copyright animate-after-background">
            <?php get_template_part('template-parts/social') ?>
            <span><?php echo get_the_date('Y'); echo get_theme_mod('copyright'); ?></span>
        </div>
    </div>
</div>

