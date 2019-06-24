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

        <div id="header" class="bb-header">
            <div class="bb-desktop-header-bar">
                <?php astra_logo();?>
                <?php wp_nav_menu(array('theme_location' => 'profile'));?>
            </div>

            <div class="bb-mobile-header-bar">
                <?php if ( has_nav_menu( 'sidepanel' ) ) : ?>
                    <div id="mySidenavLeft" class="sidenav sidenav-left">
                        <a href="javascript:void(0)" class="closebtn closebtn-left" onclick="closeNavLeft()">
                            &times;
                        </a>
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location'  => 'sidepanel',
                                    'container_class' => 'menu-style-container'
                                )
                            );
                        ?>
                    </div>
                    <span class="openbtn" onclick="openNavLeft()">
                        &#9776;
                    </span>
                <?php endif; ?>

                <div class="bb-logo-wrapper">
                    <?php astra_logo();?>
                </div>

                <?php if ( has_nav_menu( 'profile' ) ) : ?>
                    <div id="mySidenavRight" class="sidenav sidenav-right">
                        <a href="javascript:void(0)" class="closebtn closebtn-right" onclick="closeNavRight()">
                            &times;
                        </a>
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location'  => 'profile',
                                    'container_class' => 'menu-style-container'
                                )
                            );
                        ?>
                    </div>
                    <span class="openbtn" onclick="openNavRight()">
                        &#9776;
                    </span>
                <?php endif; ?>

            </div><!-- /bb-mobile-header-bar -->

            <div class="bb-breadcrumbs-bar">
                <?php bb_breadcrumbs(); ?>
            </div>
        </div>

        <div id="sidenav" class="bb-sidepanel">
            <?php
                if ( has_nav_menu( 'sidepanel' ) ) {
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'sidepanel',
                            'container_class' => 'menu-style-container'
                        )
                    );
                }
            ?>
        </div>

        <?php astra_content_before(); ?>

        <div id="content" class="site-content">

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
