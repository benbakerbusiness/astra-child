<?php

/* Template Name: Full */

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

        <div class="bb-header">
            <div id="header" class="bb-topbar">
                <div class="bb-topbar-desktop">
                    <span></span>
                    <?php astra_logo();?>
                    <span></span>
                </div><!-- /bb-topbar-desktop -->
                <div class="bb-topbar-mobile">
                    <span></span>
                    <?php astra_logo();?>
                    <span></span>
                </div><!-- /bb-topbar-mobile -->
            </div>

            <div class="bb-topbar-breadcrumbs">
                &nbsp;
            </div>
        </div>

    <?php astra_content_before(); ?>

    <div id="content" class="bb-main site-content">

        <div class="ast-container">

        <?php astra_content_top(); ?>

        <?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

            <?php get_sidebar(); ?>

        <?php endif ?>

            <div id="primary" <?php astra_primary_class(); ?>>

                <?php astra_primary_content_top(); ?>

                <?php astra_content_page_loop(); ?>

                <?php astra_primary_content_bottom(); ?>

            </div><!-- #primary -->

        <?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

            <?php get_sidebar(); ?>

        <?php endif ?>

            <?php astra_content_bottom(); ?>

            </div> <!-- ast-container -->

        </div><!-- #content -->

        <?php astra_content_after(); ?>

        <?php astra_footer_before(); ?>

        <?php astra_footer(); ?>

        <?php astra_footer_after(); ?>

    </div><!-- #page -->

    <?php astra_body_bottom(); ?>

    <?php wp_footer(); ?>

    </body>
</html>