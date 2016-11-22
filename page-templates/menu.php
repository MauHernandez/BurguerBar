<?php
/**
 * Template Name: Menú
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="container">

	<?php $loop = CFS()->get('menus'); 
		$ix = 0;
	?>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
  	<?php for ($i=0; $i < sizeof($loop) ; $i++) { ?>
  		 <li role="presentation" class="<?php if ($i ==0 ){ echo 'active'; }?>">
  			<a href="#<?php echo $loop[$i]['area_tit'];?>" aria-controls="<?php echo $loop[$i]['area_tit'];?>" role="tab" data-toggle="tab">
  				<?php echo $loop[$i]['area_tit'];?>
  			</a>
  		</li>
  	<?php } ?>
  </ul>

  <!-- Tab panes -->
 <div class="tab-content">
  	<?php foreach ($loop as $item) { ?>
	  	<div role="tabpanel" class="tab-pane <?php if($ix == 0){ echo 'active'; } ?>" id="<?php echo $item['area_tit'] ?>">
			<img src="<?php echo $item['area_img'] ?>" alt="">
	    </div>
  	<?php 
	  	$ix++;
  	} ?>
  </div>

</div>
	<?php essential(2); ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	
</div>
<div class="container anclas">
  <?php mostrar_anclas(10,16, ffcc99, 631201); ?>
</div>
<?php get_footer(); ?>