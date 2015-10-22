<?php
/**
 * Template Name: Galería
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<?php 
	$loop = CFS()->get('galleries');

	foreach ($loop as $gallery) { ?>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php  $gal = $gallery['galleries_img']; 
			$is = 0 ;?>
			<a href="#pic-<?php echo $is ?>">
				<img src="<?php echo $gal[0]['gal_img'] ?>" alt="">
			</a>
			<?php echo $gallery['galleries_des'] ?>
		</div>

		<div id="pic-<?php echo $is?>" class="overlay">
		    <div class="popup">
		      <a class="close" href="">&times;</a>
		        <div class="content">
		          	
					<div id="carousel-<?php echo $is?>" class="carousel slide" data-ride="carousel">

					  <ol class="carousel-indicators">
					  	<?php for ($i=0; $i < sizeof($gal) ; $i++) { ?>
					  		<li data-target="#carousel-<?php echo $is?>" data-slide-to="<?php echo $i ?>" class="<?php if ($i == 0){ echo 'active'; } ?> "></li>
					  	<?php } ?>
					  </ol>
					  <div class="carousel-inner" role="listbox">
						<?php 
						$i = 0;
						foreach ($gal as $slide) { ?>
							<div class="item <?php  if ($i == 0){ echo 'active'; } ?>">
						      <img src="<?php echo $slide['gal_img'] ?>" alt="...">
						    </div>
						<?php 
						$i = 1; 
						} ?>
					  </div>
					</div>


		      </div>
		    </div>
		  </div>

	<?php
	$is++;  
	}
 ?>

 <div class="container">
 	<?php mostrar_anclas(5,16); ?>
 </div>

<?php get_footer(); ?>