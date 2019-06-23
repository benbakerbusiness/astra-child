<div class="bb-breadcrumbs-bar">
    <?php if ( is_front_page() ) : ?>
        Home
    <?php else: ?>
        <?php echo do_shortcode( '[uo_breadcrumbs]' ); ?>
    <?php endif; ?>
</div>