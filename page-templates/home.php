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

<div class="container anclas">
	<?php
		mostrar_anclas(10,5, 631201 ,ffcc99);

		mostrar_anclas(12,16, ffcc99, 631201);
	?>
</div>

<div id="ubicanos" class="container mapa">
	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 center">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 one">
				<h3 class="centerv">Encuéntranos</h3>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 one">
				<?php echo CFS()->get('address'); ?>
			</div>
		<?php  echo do_shortcode('[wpgmza id="1"]'); ?>
	</div>
</div>


<?php get_footer(); ?>