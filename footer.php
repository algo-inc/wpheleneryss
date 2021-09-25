<div class="footer">
    <div class="footer-container">
    <div class="contacts">
        <div class="footer-container"></div>
        <h3 class="footer-title">Контакти</h3>
        <p>Україна, м. Вінниця,
            вул. Соборна 18/а</p>
        <p href="">
            <?php $phone = get_theme_mod('phone');
            if ($phone) {
                echo $phone;
            } ?>
        </p>
        <a href="<?php $email = get_theme_mod('email');
        if ($email) {
            echo $email;
        } ?>">
            <?php $email = get_theme_mod('email');
            if ($email) {
                echo $email;
            } ?></a>
        <img class="button_menu" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/svg/logo.svg"
             alt="menu">
    </div>
    <div class="footer-menu">
        <h3 class="footer-title">
            Навігація по сайту
        </h3>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'container_class' => 'footer-menu-container',
            'menu_id' => 'footer-menu'
        ));
        ?>
    </div>
    <div class="social-and-partner">
        <?php get_template_part('template-parts/social') ?>
        <div class="partner">
            <img class="button_menu" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/svg/partner.png"
                 alt="menu">
            <p>Сайт створено в рамках проєкту «Відродження традицій Барської кераміки v.2.0» за підтримки Українського
                культурного фонду.
            </p>
        </div>
    </div>
    </div>
    <div class="copyright">
        <?php
        echo get_theme_mod('copyright');
        echo get_the_date('Y');
        ?>
    </div>
</div>

</div>

<?php wp_footer() ?>
</body>
</html>