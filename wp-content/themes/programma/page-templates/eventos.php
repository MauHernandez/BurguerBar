<?php
/**
 * Template Name: Eventos
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<?php programma_slider('slider_events'); ?>

	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
	<?php 
		$loop = CFS()->get('slider_events');
		foreach ($loop as $event) { ?>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<img src="<?php echo $event['slider_img'] ?>" alt="">
				<div class="text">
					<?php echo $event['slider_tit']?>
					<?php echo $event['slider_date'] ?>
				</div>
			</div>
		<?php }
	 ?>
	</div>

<div class="container">
	<?php mostrar_anclas(16,10); ?>
</div>

<?php get_footer(); ?>