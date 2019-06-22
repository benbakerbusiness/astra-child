<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>

<?php astra_body_top(); ?>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?></a>


	<div class="bb-header-bar-wrapper">
		<div class="bb-desktop-header-bar">
			<?php astra_logo(); ?>
			
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</div>
		
		<div class="bb-mobile-header-bar">
			<a class="shiftnav-toggle shiftnav-toggle-button" data-shiftnav-target="dashboard">
				<i class="fa fa-bars"></i>
			</a>

			<div class="bb-logo-wrapper">
				<?php astra_logo(); ?>
			</div>
			
			<a class="shiftnav-toggle shiftnav-toggle-button" data-shiftnav-target="profile">
				<i class="fa fa-bars"></i>
			</a>
		</div>
		
		<div class="bb-breadcrumbs-bar">
			<?php if( is_front_page() ) : ?>
				Home
            		<?php else : ?>
                		<?php echo do_shortcode( '[uo_breadcrumbs]' ); ?>
            		<?php endif; ?>
		</div>
	</div>

	<div class="bb-sidepanel">
		<div class="bb-sidepanel-content">
	    		<?php wp_nav_menu( array( 'theme_location' => 'dashboard' ) ); ?>
	    	</div>
	</div>
	
	
	<?php astra_content_before(); ?>

	<div id="content" class="site-content">

		<div class="ast-container">

		<?php astra_content_top(); ?>
