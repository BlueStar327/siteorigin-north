<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package burst
 */

?>
		</div>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php
		if( is_active_sidebar( 'footer-sidebar' ) ) {
			$the_sidebars = wp_get_sidebars_widgets();

			?>
			<div class="widgets widgets-<?php echo count( $the_sidebars['footer-sidebar'] ) ?>">
				<?php dynamic_sidebar( 'footer-sidebar' ); ?>
			</div>
			<?php
		}
		?>

		<div class="site-info">
			<?php burst_footer_text() ?>
			<span class="sep"> | </span>
			<?php
			echo wp_kses_post(
				apply_filters(
					'burst_footer_credits',
					sprintf( esc_html__( 'Theme by %s.', 'burst' ), '<a href="https://siteorigin.com/" rel="designer">SiteOrigin</a>' )
				)
			);
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
