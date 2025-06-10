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
