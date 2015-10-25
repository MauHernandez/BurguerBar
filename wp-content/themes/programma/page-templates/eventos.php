<?php
/**
 * Template Name: Eventos
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 center board">
		<?php programma_slider('slider_events'); ?>
	</div>
	

		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 center events-list">
		<?php 
			$loop = CFS()->get('slider_events');
			foreach ($loop as $event) {
			$i = 0; ?>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 event">
					<!-- <a data-target="#carousel-slider_events" data-slide-to="<?php echo $i ?>"></li> -->
					<img class="centerv" src="<?php echo $event['slider_img'] ?>" alt="">
					<div class="text centerv">
						<?php echo $event['slider_tit']?>
						<br>
					 	<?php echo $event['slider_date'] ?>
					</div>
				</div>
			<?php
				$i++;
			 }
		 ?>
		</div>

<div class="container anclas">
	<?php mostrar_anclas(16,10 ,631201 ,ffcc99); ?>
</div>

<?php get_footer(); ?>