<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer row" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info col-md-2 col-md-offset-5">
				<p>&copy; <?php echo date("Y") ?> Michael Juhasz </p>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="wp-content/themes/testy/js/page.js"></script>
	<?php wp_footer(); ?>
</body>
</html>