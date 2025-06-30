<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="header-container">

            <!-- 左：ロゴ -->
            <div class="site-logo">
                <a href="<?php echo home_url(); ?>">Marnie</a>
            </div>

            <!-- 中央：メニュー -->
            <nav class="site-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'container' => false,
                    'menu_class' => 'header-menu',
                ));
                ?>
            </nav>

            <!-- 右：インスタ＆ハンバーガー -->
            <div class="header-actions">
                <div class="insta-link">
                    <a href="https://www.instagram.com/marnie.ty/" target="_blank" rel="noopener">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta-icon.png" alt="Instagram" />
                    </a>
                </div>

                <div class="hamburger" id="hamburger">
                    <span></span><span></span><span></span>
                </div>
            </div>

        </div>
    </header>
