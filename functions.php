<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

add_theme_support('wc-product-gallery-zoom');
add_theme_support('wc-product-gallery-lightbox');
add_theme_support('wc-product-gallery-slider');

// function mytheme_add_woocommerce_support()
// {
//     add_theme_support('woocommerce');
// }
// add_action('after_setup_theme', 'mytheme_add_woocommerce_support');


/**
 * Set WooCommerce image dimensions upon theme activation
 */
// Remove each style one by one
add_filter('woocommerce_enqueue_styles', 'jk_dequeue_styles');
function jk_dequeue_styles($enqueue_styles)
{
    unset($enqueue_styles['woocommerce-general']);	// Remove the gloss
    unset($enqueue_styles['woocommerce-layout']);		// Remove the layout
    unset($enqueue_styles['woocommerce-smallscreen']);	// Remove the smallscreen optimisation
    return $enqueue_styles;
}

// Or just remove them all in one line
add_filter('woocommerce_enqueue_styles', '__return_false');

function init_styles()
{
    wp_enqueue_style('normalize', get_template_directory_uri().'/normalize.css');
    wp_enqueue_style('style', get_template_directory_uri().'/style.css');
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

function modify_user_champ($user_contact)
//Ajout champ Age pour l'ajout d'un utilisateur
{
    $user_contact['age'] = ('Age');
    return $user_contact;
}

add_filter('user_contactmethods', 'modify_user_champ');
