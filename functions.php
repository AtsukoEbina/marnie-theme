<?php
function marnie_theme_setup()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'marnie_theme_setup');
