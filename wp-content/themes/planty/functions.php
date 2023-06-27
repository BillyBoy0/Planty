<?php
/**
 * Planty Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Planty
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_PLANTY_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'planty-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_PLANTY_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


add_filter( 'wpcf7_autop_or_not', '__return_false' );  //enleve les balises <p> du contact form7

function ajout_lien_admin($items, $args) {
    if (is_user_logged_in())  {
        $lien_admin = '<li class="menu-item bouton-admin"><a href="' . admin_url() . '">Admin</a></li>';
        $items .= $lien_admin;
        remove_filter('wp_nav_menu_items', 'ajout_lien_admin', 10, 2); // Supprime le filtre après avoir ajouté le bouton
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'ajout_lien_admin', 10, 2);
