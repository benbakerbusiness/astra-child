<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

?>
			<?php astra_content_bottom(); ?>

			</div> <!-- ast-container -->

		</div><!-- #content -->

		<?php astra_content_after(); ?>

		<?php astra_footer_before(); ?>

		<footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" class="bb-footer" role="contentinfo">

            <?php astra_footer_content_top(); ?>

            <?php astra_footer_content(); ?>

            <?php astra_footer_content_bottom(); ?>

        </footer><!-- #colophon -->

		<?php astra_footer_after(); ?>

	</div><!-- #page -->

	<?php astra_body_bottom(); ?>

	<?php wp_footer(); ?>

	</body>
</html>
