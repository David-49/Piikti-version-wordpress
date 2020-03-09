<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

function init_styles()
{
    wp_enqueue_style('normalize', get_template_directory_uri().'normalize.css');
    wp_enqueue_style('style', get_template_directory_uri().'style.css');
}

add_action('wp_enqueue_scripts', 'init_styles');


register_nav_menus(array(
    'main' => 'Menu Principal',
    'footer' => 'Bas de page',
));

register_sidebar(array(
    'id' => 'blog-sidebar',
    'name' => 'Actualité',
  'before_widget'  => '<div class="site__sidebar__widget %2$s">',
  'after_widget'  => '</div>',
  'before_title' => '<p class="site__sidebar__widget__title">',
  'after_title' => '</p>',
));
