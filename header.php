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
  <div class="container">
    <h1 class="site-title"><a href="<?php echo home_url(); ?>">Marnie</a></h1>
    <nav class="site-nav">
      <?php wp_nav_menu(['theme_location' => 'header-menu']); ?>
    </nav>
  </div>
</header>
