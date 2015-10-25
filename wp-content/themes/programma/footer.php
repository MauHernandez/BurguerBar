<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="own-footer">	
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-col1' ) ); ?>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-col2' ) ); ?>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-col3' ) ); ?>
				</div>
			</div>

			<div class="site-info col-xs-12 col-sm-12 col-md-6 col-lg-6">
				Av 4 entre Calles 17 y 18. <br>
				Mérida Venezuela <br>
				RIF J-1234567-7
			</div><!-- .site-info -->
		</div>
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
