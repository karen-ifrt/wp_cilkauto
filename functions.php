<?php

// Ajouter la gestion des menus
add_theme_support('menus');


// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');


// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');


// Hide admin bar
add_filter('show_admin_bar', '__return_false');


// Ajout des styles et scripts

function cilkauto_scripts()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
    wp_enqueue_script('bootstrap-4-js', get_template_directory_uri() . '/assets/bootstrap/bootstrap.js', array('jquery'), 'v4.0.0', true);
    wp_enqueue_script('slick-min-js', get_template_directory_uri() . '/assets/slick/slick.min.js', array(), '1.0', true);
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.js', array(), '1.0', true);
    wp_enqueue_script('script-js', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true);
    wp_enqueue_style('bootstrap-4', get_template_directory_uri() . '/assets/bootstrap/bootstrap.css', array(), 'v4.0.0', 'all');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/slick/slick.css', array(), '1.0');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css', array(), '1.0');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/style.css', array(), '1.0');
}

add_action('wp_enqueue_scripts', 'cilkauto_scripts');


// Dropdown Menu
function register_navwalker()
{
    require_once get_template_directory() . '/assets/bootstrap/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');


// ACF Options
if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}


// Custom Post Type Voitures
function create_posttype()
{
    register_post_type(
        'occasions',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Véhicules'),
                'singular_name' => __('Véhicules'),
                'add_new_item'        => __('Ajouter un nouveau véhicule'),
                'edit_item'           => __('Editer le véhicule'),
                'update_item'         => __('Modifier le véhicule'),
                'search_items'        => __('Rechercher un véhicule'),
            ),
            'public' => true,
            'has_archive' => 'true',
            'rewrite' => array('slug' => 'occasions'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-admin-tools',
            'taxonomies' => array('category', 'post_tag'),
        )
    );
}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');



// Désactiver le bloc d'édition dans le CPT Evenements
add_action('init', function () {
    remove_post_type_support('occasions', 'editor');
}, 99);


// Images custom size
if (function_exists('add_image_size')) {
    add_image_size('custom-all-cars', 350, 275, true);
    add_image_size('custom-single-car', 700, 450, true);
    add_image_size('custom-post', 350, 200, true);
}


flush_rewrite_rules(false);
