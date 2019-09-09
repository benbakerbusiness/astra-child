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
        <a class="skip-link screen-reader-text" href="#content">
            <?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
        </a>

        <div class="bb-header">
            <div id="header" class="bb-topbar">
                <div class="bb-topbar-desktop">
                    <img class="bb-logo" src="<?php bb_logo(); ?>">
                    <?php
                        if ( has_nav_menu( 'bb-primary' ) ) {
                            wp_nav_menu(
                                array(
                                    'container_class' => 'bb-menu-dropdown-container',
                                    'menu_class'      => 'menu bb-menu-dropdown',
                                    'theme_location'  => 'bb-primary'
                                )
                            );
                        }
                    ?>
                </div><!-- /bb-topbar-desktop -->

                <div class="bb-topbar-mobile">

                    <?php if ( has_nav_menu( 'bb-secondary' ) ) : ?>
                        <div id="mySidenavLeft" class="bb-slidebar bb-slidebar-left">
                            <a href="javascript:void(0)" class="bb-closebtn bb-closebtn-left" onclick="closeNavLeft()">
                                &times;
                            </a>
                            <?php
                                wp_nav_menu(
                                    array(
                                        'container_class' => 'bb-menu-vertical-container',
                                        'menu_class'      => 'menu bb-menu-vertical',
                                        'theme_location'  => 'bb-secondary'
                                    )
                                );
                            ?>
                        </div>
                        <span class="bb-openbtn" onclick="openNavLeft()">
                            &#9776;
                        </span>
                    <?php else: ?>
                        <span></span>
                    <?php endif; ?>

                    <?php astra_logo();?>

                    <?php if ( has_nav_menu( 'bb-primary' ) ) : ?>
                        <div id="mySidenavRight" class="bb-slidebar bb-slidebar-right">
                            <a href="javascript:void(0)" class="bb-closebtn bb-closebtn-right" onclick="closeNavRight()">
                                &times;
                            </a>
                            <?php
                                wp_nav_menu(
                                    array(
                                        'container_class' => 'bb-menu-vertical-container',
                                        'menu_class'      => 'menu bb-menu-vertical',
                                        'theme_location'  => 'bb-primary'
                                    )
                                );
                            ?>
                        </div>
                        <span class="bb-openbtn" onclick="openNavRight()">
                            &#9776;
                        </span>
                    <?php else: ?>
                        <span></span>
                    <?php endif; ?>

                </div><!-- /bb-topbar-mobile -->
            </div><!-- /bb-topbar -->

            <div class="bb-topbar-title">
                <span class="font-bold">
                    <?php bloginfo('name'); ?>
                </span>
                –
                <span class="font-italic">
                    <?php bloginfo('description'); ?>
                </span>
            </div>

        </div> <!-- /bb-header -->

        <div id="sidebar" class="bb-sidebar">
            <?php
                if ( has_nav_menu( 'bb-secondary' ) ) {
                    wp_nav_menu(
                        array(
                            'container_class' => 'bb-menu-vertical-container',
                            'menu_class'      => 'menu bb-menu-vertical',
                            'theme_location'  => 'bb-secondary'
                        )
                    );
                }
            ?>
        </div>

        <?php astra_content_before(); ?>

        <div id="content" class="site-content bb-main bb-main-left">

            <div class="ast-container">

                <?php astra_content_top(); ?>

                <!-- - -->
                 <script>
                    function openNavLeft() {
                        closeNavRight();
                        document.getElementById('mySidenavLeft').style.width = "250px";
                    }

                    function closeNavLeft() {
                        document.getElementById('mySidenavLeft').style.width = "0";
                    }

                    function openNavRight() {
                        closeNavLeft();
                        document.getElementById('mySidenavRight').style.width = "250px";
                    }

                    function closeNavRight() {
                        document.getElementById('mySidenavRight').style.width = "0";
                    }
                </script>
                <!-- - -->
