<div id="carousel-header" class="carousel slide" data-ride="carousel">

	<?php 
		$loop = CFS()->get('header_slider');
	?>

  <ol class="carousel-indicators">
  	<?php for ($i=0; $i < sizeof($loop) ; $i++) { ?>
  		<li data-target="#carousel-header" data-slide-to="<?php echo $i ?>" class="<?php if ($i == 0){ echo 'active'; } ?> "></li>
  	<?php } ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
	<?php 
	$i = 0;
	foreach ($loop as $slide) { ?>
		<div class="item <?php  if ($i == 0){ echo 'active'; } ?>">
	      <img src="<?php echo $slide['slider_img'] ?>" alt="...">
	      <div class="carousel-caption carousel-home-caption">
	        <?php echo $slide['slider_des'] ?>
	      </div>
	    </div>
	<?php 
	$i = 1; 
	} ?>
  </div>

</div>