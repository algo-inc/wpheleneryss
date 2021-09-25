<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&display=swap" rel="stylesheet">
    <?php wp_head() ?>
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
    <script>
        function toggleMenu(button) {
            jQuery(button).toggleClass('active');
            jQuery('.secondary-menu-container').toggleClass('active');
        }
    </script>
    <div class="dropdown-menu-wrapper">
        <button class="menu-button" onclick="toggleMenu(this)">Меню</button>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'secondary_menu',
            'container_class' => 'secondary-menu-container',
            'menu_id' => 'secondary-menu'
        ));
        ?>
    </div>

    <?php
    wp_nav_menu(array(
        'theme_location' => 'main_menu',
        'container_class' => 'menu-container',
        'menu_id' => 'menu_id'
    ));
    ?>
    <div class="virtual-button">3d</div>
    <?php
    pll_current_language();
    pll_the_languages([
            'dropdown' => true,
            'show_flags' => true,
            'show_names' => true,
            'display_names_as' => 'slug'
        ]
    ); ?>
</header>
