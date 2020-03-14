<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');


function init_styles_script()
{
    wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css');
    wp_enqueue_style('style', get_template_directory_uri().'/css/style.css');
    // wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.js', false, '3.4.1', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0', true);
}

add_action('wp_enqueue_scripts', 'init_styles_script');

function load_jquery()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.4.1.js', false, '');
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'load_jquery');



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



//déclaration custom post type: Produit et déclaration taxonomie
function piikti_register_post_types()
{
    // CPT Produit
    $labels = array(
        'name' => 'Produit',
        'all_items' => 'Tous les produits',  // affiché dans le sous menu
        'singular_name' => 'Produit',
        'add_new_item' => 'Ajouter un produit',
        'edit_item' => 'Modifier le produit',
        'menu_name' => 'Produit'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-cart',
        'page-attributes' => true,
        'comments' => true,
    );

    register_post_type('produit', $args);

    // Déclaration de la Taxonomie
    $labels = array(
        'name' => 'Type de produits',
        'new_item_name' => 'Nom du nouveau produit',
        'parent_item' => 'Type de produit parent',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => true,
    );

    register_taxonomy('type-projet', 'produit', $args);
}
// Le hook init lance la fonction
add_action('init', 'piikti_register_post_types');
