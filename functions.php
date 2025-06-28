<?php
function marnie_theme_setup()
{
    add_theme_support('title-tag');
    register_nav_menus([
        'header-menu' => 'ヘッダーメニュー',
        'footer-menu' => 'フッターメニュー',
    ]);
}
add_action('after_setup_theme', 'marnie_theme_setup');

function marnie_enqueue_styles()
{
    wp_enqueue_style('marnie-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'marnie_enqueue_styles');

function marnie_enqueue_scripts()
{
    wp_enqueue_style('marnie-style', get_stylesheet_uri());

    wp_enqueue_script(
        'marnie-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        false,
        true
    );

    // JS用にテーマURLを渡す
    wp_add_inline_script(
        'marnie-main-js',
        'window.themeUrl = "' . get_template_directory_uri() . '";',
        'before'
    );
}
add_action('wp_enqueue_scripts', 'marnie_enqueue_scripts');

function marnie_enqueue_fonts()
{
    wp_enqueue_style(
        'marnie-google-fonts',
        'https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;700&display=swap',
        false
    );
}
add_action('wp_enqueue_scripts', 'marnie_enqueue_fonts');
