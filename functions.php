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
define('CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{

	wp_enqueue_style(
		'astra-child-theme-css',
		get_stylesheet_directory_uri() . '/style.css',
		array('astra-theme-css'),
		CHILD_THEME_ASTRA_CHILD_VERSION,
		'all'
	);

}

add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);

/**
 * Register menus
 */
function bb_register_nav_menus()
{
	register_nav_menus(
		array(
			'sidepanel' => __('Sidepanel'),
			'profile'   => __('Profile')
		)
	);
}

add_action('init', 'bb_register_nav_menus');

/**
 * Menu Sidepanel
 */
function bb_menu_sidepanel()
{
	wp_nav_menu(
		array(
			'theme_location' => 'sidepanel'
		)
	);
}

/**
 * Menu Primary
 */
function bb_menu_primary()
{
	wp_nav_menu(
		array(
			'theme_location' => 'profile'
		)
	);
}

/**
 * Breadcrumbs
 */
function bb_breadcrumbs()
{
	if (is_front_page())
	{
		echo 'Home';
	}
	else
	{
		echo do_shortcode('[uo_breadcrumbs]');
	}
}

/**
 * #user_email#
 */
add_filter('wp_nav_menu_objects', 'my_dynamic_menu_items');

function my_dynamic_menu_items($menu_items)
{
    foreach ($menu_items as $menu_item)
    {
        if ($menu_item->title == '#user_email#')
        {
            $email = wp_get_current_user()->user_email;
            $avatar = get_avatar($email, 48, '', '', array('class' => 'bb-menu-avatar'));

            $menu_item->title = $email . $avatar;
        }
    }

    return $menu_items;
}
