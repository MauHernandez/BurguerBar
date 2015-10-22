<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<?php essential(2); ?>

<div class="container">
	<?php
		mostrar_anclas(10,5);

		mostrar_anclas(12,16);
	?>
</div>

<div class="container mapa">
	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				Encuentranos
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<?php echo CFS()->get('address'); ?>
			</div>
		</div>
		<?php  echo do_shortcode('[wpgmza id="1"]'); ?>
	</div>
</div>


<?php get_footer(); ?>