<div class="social">
    <a href="<?php $facebook = get_theme_mod('facebook');
if ($facebook) {
echo $facebook;
}?>" target="_blank" class="not-i">
        <img class="button_menu" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/svg/facebook.png" alt="menu">
    </a>

    <a href="<?php $instagram = get_theme_mod('telegram');
    if ($instagram) {
        echo $instagram;
    }?>"target="_blank">
        <img class="button_menu" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/svg/instagram.png" alt="menu">
    </a>

    <a href="<?php $twitter = get_theme_mod('youtube');
    if ($twitter) {
        echo $twitter;
    }?>"target="_blank">
        <img class="button_menu" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/svg/youtube.png" alt="menu">
    </a>
</div>