<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

    wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

/**
 * Register menus
 */
function bb_register_my_menu() {

    register_nav_menu( 'sidepanel',__( 'Sidepanel' ) );

}
add_action( 'init', 'bb_register_my_menu' );

/**
 * Partial
 */
function bb_partial(
    string $slug,
    string $name = null
) {
    get_template_part(
        'template-parts/' . $slug,
        $name
    );
}

/**
 * Menu Sidepanel
 */
function bb_menu_sidepanel() {
    wp_nav_menu(
        array(
            'theme_location' => 'sidepanel'
        )
    );
}