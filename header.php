<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <?php wp_head()?>
</head>
<body>
<header class="header container">
    <?php
    $logoId = get_theme_mod('custom_logo');
    $image = wp_get_attachment_image($logoId);
    ?>
    <a href="/" class="header__logo-link">
        <?= $image ?>
    </a>
    <button class="header__menu-button" id="menu-button">
        <img class="button_menu" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/svg/menu.svg" alt="menu">
        <img class="burger_menu" src="<?php echo get_stylesheet_directory_uri()?>/assets/images/svg/burger.svg" alt="burger">
    </button>
    <?php get_template_part('template-parts/social') ?>
</header>
<?php get_template_part('template-parts/menu') ?>