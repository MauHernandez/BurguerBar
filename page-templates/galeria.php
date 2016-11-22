<?php
/**
 * Template Name: Galería
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div id="gal" class="container galleries">

<?php 
	$is = 0 ;
	$loop = CFS()->get('galleries');

	foreach ($loop as $gallery) { ?>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 gallery">
		
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 g-cover">
			<?php  $gal = $gallery['galleries_img']; ?>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 img">
				<a class="gal" data-id="<?php echo $is ?>" href="#pic-<?php echo $is ?>">
					<img src="<?php echo $gal[0]['gal_img'] ?>" alt="">
				</a>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<a class="gal" data-id="<?php echo $is ?>"  href="#pic-<?php echo $is ?>"><?php echo $gallery['galleries_des'] ?></a>
			</div>
		</div> <!-- g-cover -->

		<div id="pic-<?php echo $is?>" class="overlay">
		    <div class="popup">
		      <a class="close" href="#gal">&times;</a>
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
		  </div> <!-- Overlay -->
	
	</div> <!-- Gallery -->
	<?php
	$is++;  
	}
 ?>
</div>


 <div class="container anclas">
 	<?php mostrar_anclas(5,16,631201 ,ffcc99); ?>
 </div>

<script>
	jQuery(document).ready(function($){
		$(this).on("click","a.gal",function(event){
    
          var id_d = $(this).data("id");
	        $(document).keyup(function(e) {
				if(e.keyCode == 27 && $('#pic-'+id_d).css("visibility") != "hidden" ) {
					$('#pic-'+id_d).addClass("closing");
					window.location.hash = "#pic-"+id_d;
				}
			});

	        var aux = $(this).find('#pic-'+id_d).hasClass("closing");
	        if ($(aux)) {
	        	$('#pic-'+id_d).removeClass("closing");
	        	$('#pic-'+id_d).addClass("openning");
	        };

	        $('#pic-'+id_d+' .close').on( 'click', function ( e ) {
	        	event.preventDefault();
					$('#pic-'+id_d).addClass("closing");
					window.location.hash = "#pic-"+id_d;
				});
		
	       $('#pic-'+id_d).on( 'click', function ( e ) {
				if ( $( e.target ).closest('#pic-'+id_d+' .content').length === 0 ) {
					$('#pic-'+id_d).addClass("closing");
					window.location.hash = "#pic-"+id_d;
				}
			});

		});

		

	});
</script>

<?php get_footer(); ?>