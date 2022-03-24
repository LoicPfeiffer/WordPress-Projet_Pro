<?php

/**
 * composer
 */

/*// chargement de l'autoloading de composer
require get_template_directory() . '/vendor/autoload.php';*/

/**
 * sécurité
 */

// désactive l'édition de fichier dans l'admin
define('DISALLOW_FILE_EDIT', true);

/**
 * localisation
 */

// choix du fuseau horaire
date_default_timezone_set('Europe/Paris');
// choix du réglage régional
setlocale(LC_ALL, 'fr', 'fr_FR', 'fr_FR.utf8', 'fr_FR.ISO_8859-1');

/**
 * CSS
 */

// cette fonction se charge d'intégrer les feuilles de style du thème
function my_theme_enqueue_styles()
{
    // chargement de Bootstrap
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', []);
    wp_register_script('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js", ['popper']);
    wp_register_script('popper', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js");
    wp_enqueue_style('my-theme-main', get_stylesheet_directory_uri() . '/style.css', ['bootstrap']);
    // chargement d'un fichier CSS
    wp_enqueue_style('style', get_stylesheet_directory_uri(), []);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

/**
 * JS
 */

// cette fonction se charge d'intégrer les scripts JS du thème
function my_theme_enqueue_script()
{
    // chargement de Bootstrap
    wp_enqueue_script('my-theme-main', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', []);
    // chargement d'un fichier JS
    wp_enqueue_script('my-theme-main', get_stylesheet_directory_uri() . '/js/main.js', []);
    wp_enqueue_script('my-theme-main', get_stylesheet_directory_uri() . '/js/main.js', ['bootstrap']);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_script');

/**
 * fonctionnalités du thème
 */

function montheme_support()
{
    // activation de la fonctionnalité des balises HTML5
    add_theme_support('html5');
    // activation de la fonctionnalité du titre du site
    add_theme_support('title-tag');
    // activation de la fonctionnalité des vignettes
    add_theme_support('post-thumbnails');
}
/**
 * Menu
 */
// le premier paramètre est la localisation, le second est la description
function mytheme_register_nav_menu()
{
    register_nav_menus(array(
        'header' => __('En tête', 'wp_lernumerique_theme'),
        'footer'  => __('Bas de page', 'wp_lernumerique_theme'),
    ));
}

Montheme_support();
add_action('after_setup_theme', 'mytheme_register_nav_menu', 0);
/*add_filter('wp_title', 'montheme_title');*/
