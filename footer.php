<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brittominimal
 */

?>

</div><!-- #content -->



<footer id="colophon" class="site-footer" role="contentinfo">

	<?php if ( is_active_sidebar( 'footer_widget_left') ||  is_active_sidebar( 'footer_widget_middle') ||  is_active_sidebar( 'footer_widget_right')  ) : ?>
	<div class="footer-widgets-wrapper">
		<div class="container">
			<div class="footer-widget-single">
				<?php dynamic_sidebar( 'footer_widget_left' ); ?>
			</div>
			<div class="footer-widget-single footer-widget-middle">
				<?php dynamic_sidebar( 'footer_widget_middle' ); ?>
			</div>
			<div class="footer-widget-single">
				<?php dynamic_sidebar( 'footer_widget_right' ); ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<div class="site-info">
	<div class="container">
		<?php echo '&copy; '. esc_html(date_i18n(__('Y','brittominimal'))); ?> <?php bloginfo( 'name' ); ?>

			<!-- Delete below lines to remove copyright from footer -->
			<span class="footer-info-right">
			<?php echo __(' | Theme:', 'brittominimal') ?> <a href="<?php echo esc_url('https://wordpress.org/themes/brittominimal/', 'brittominimal'); ?>"><?php echo __('Britto Minimal', 'brittominimal') ?></a>
			</span>
			<!-- Delete above lines to remove copyright from footer -->

	</div>
</div>

</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
