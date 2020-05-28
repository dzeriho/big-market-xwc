<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="widget-area">
			<div class="site-info">
				<?php the_custom_logo(); ?>
				<div class="site-info-group">
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				$_s_description = get_bloginfo( 'description', 'display' );
				if ( $_s_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $_s_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
				</div>
			</div><!-- .site-info -->
			<?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
				<?php dynamic_sidebar('footer-1'); ?>
			<?php } ?>
		</div><!-- .widget-area -->

		<div class="widget-area">
			<?php if ( is_active_sidebar( 'footer-2' ) ) { ?>
				<?php dynamic_sidebar('footer-2'); ?>
			<?php } ?>
		</div><!-- .widget-area -->

		<div class="widget-area">
			<?php if ( is_active_sidebar( 'footer-3' ) ) { ?>
				<?php dynamic_sidebar('footer-3'); ?>
			<?php } ?>
		</div><!-- .widget-area -->

		<div class="widget-area">
			<?php if ( is_active_sidebar( 'footer-4' ) ) { ?>
				<?php dynamic_sidebar('footer-4'); ?>
			<?php } ?>
		</div><!-- .widget-area -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
