<?php

if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}


function add_styles_and_scripts()
{
    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('typography', get_template_directory_uri() . '/assets/css/typography.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('arrow', get_template_directory_uri() . '/assets/css/arrow.css');
    wp_enqueue_style('back_to_top', get_template_directory_uri() . '/assets/css/back_to_top.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('mail', get_template_directory_uri() . '/assets/css/mail.css');
    wp_enqueue_style('menu', get_template_directory_uri() . '/assets/css/menu.css');
    wp_enqueue_style('project', get_template_directory_uri() . '/assets/css/project.css');
    wp_enqueue_style('about_project', get_template_directory_uri() . '/assets/css/about-project.css');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.css');
    wp_enqueue_style('social', get_template_directory_uri() . '/assets/css/social.css');
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.js', [], false, true);
    wp_enqueue_script('menu', get_template_directory_uri() . '/assets/js/menu.js', [], false, true);
    wp_enqueue_script('up-button', get_template_directory_uri() . '/assets/js/up_btn.js', [], false, true);
}

add_action('wp_enqueue_scripts', 'add_styles_and_scripts');


function heleneryss_setup()
{
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(
        [
            'main_menu' => 'Главное меню',
        ]
    );
    add_theme_support(
        'html5',
        [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ]
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'heleneryss_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
}

add_action('after_setup_theme', 'heleneryss_setup');

add_action('customize_register', function (WP_Customize_Manager $customizer) {
    $customizer->add_section(
        'settings', array(
            'title' => 'Настройки сайта',
            'description' => '',
            'priority' => 11,
        )
    );
    $customizer->add_setting('copyright',
        array('default' => '©Heleneryss')
    );

    $customizer->add_control('copyright', array(
            'label' => 'Копирайт',
            'section' => 'settings',
            'type' => 'text',
        )
    );
    $customizer->add_setting('facebook',
        array('default' => '')
    );

    $customizer->add_control('facebook', array(
            'label' => 'Facebook',
            'section' => 'settings',
            'type' => 'text',
        )
    );
    $customizer->add_setting('telegram',
        array('default' => '')
    );

    $customizer->add_control('telegram', array(
            'label' => 'Telegram',
            'section' => 'settings',
            'type' => 'text',
        )
    );
    $customizer->add_setting('instagram',
        array('default' => '')
    );

    $customizer->add_control('instagram', array(
            'label' => 'Instagram',
            'section' => 'settings',
            'type' => 'text',
        )
    );

    $customizer->add_setting('linkedin',
        array('default' => '')
    );

    $customizer->add_control('linkedin', array(
            'label' => 'Linkedin',
            'section' => 'settings',
            'type' => 'text',
        )
    );

    $customizer->add_setting('email',
        array('default' => '')
    );

    $customizer->add_control('email', array(
            'label' => 'email',
            'section' => 'settings',
            'type' => 'text',
        )
    );
});

add_action('init', 'register_post_types');
function register_post_types()
{
    register_post_type('project', [
        'label' => null,
        'labels' => [
            'name' => 'Проекты',
            'singular_name' => 'Проект',
            'add_new' => 'Добавить проект',
            'edit_item' => 'Редактировать проект',
            'new_item' => 'Новый проект',
            'view_item' => 'Смотреть проект',
            'not_found' => 'Проект не найдет',
            'menu_name' => 'Проекты',
        ],
        'description' => '',
        'public' => true,
        'hierarchical' => false,
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
        'taxonomies' => ['post_tag'],
        'has_archive' => true,
        'rewrite' => ['slug' => 'projects'],
        'query_var' => true,
    ]);
}

add_filter('rwmb_meta_boxes', 'add_gallery_to_project');

function add_gallery_to_project($meta_boxes)
{
    $meta_boxes[] = [
        'title' => 'Дополнительные поля',
        'id' => 'additionals_fields',
        'context' => 'normal',
        'post_types' => ['project'],
        'fields' => [
            [
                'type' => 'image_advanced',
                'name' => 'Изображения',
                'id' => 'gallery_images',
                'max_file_uploads' => 99,
            ],
        ],
    ];

    return $meta_boxes;
}