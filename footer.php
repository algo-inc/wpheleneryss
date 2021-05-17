<div class="mail">
    <a href="<?php $email = get_theme_mod('email');
    if ($email) {
        echo $email;
    }?>"><?php $email = get_theme_mod('email');
        if ($email) {
            echo $email;
        }?></a>
</div>
<div class="to-up">
    <img src="<?php echo get_template_directory_uri()?>/assets/images/svg/up_btn.svg" alt="">
</div>
<div class="footer">
    <span><?php echo get_the_date('Y'); echo get_theme_mod('copyright'); ?></span>
</div>
<?php wp_footer()?>
</body>
</html>