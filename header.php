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
?>
<!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
    <?php astra_head_top(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?><?php body_class(); ?>>

    <?php astra_body_top(); ?>
    <div id="page" class="hfeed site">
        <?php bb_partial( 'skip-nav' ); ?>

        <div class="bb-header">
            <?php bb_partial( 'header-desktop' ); ?>

            <?php bb_partial( 'header-mobile' ); ?>

            <?php bb_partial( 'breadcrumbs' ); ?>
        </div>

        <div class="bb-sidepanel">
            <?php bb_partial( 'sidepanel' ); ?>
        </div>

        <?php astra_content_before(); ?>

        <div id="content" class="site-content">

            <div class="ast-container">

                <?php astra_content_top(); ?>
