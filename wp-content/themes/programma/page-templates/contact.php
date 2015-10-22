<?php
/**
 * Template Name: Contacto
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<h2>Contactanos</h2>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<form>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div class="form-group">
			    <label for="nombre">Nombre</label>
			    <input type="text" class="form-control" id="nombre">
			  </div>	
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" id="email">
			  </div>
			  <div class="form-group">
			    <label for="ciudad">Ciudad</label>
			    <input type="text" class="form-control" id="ciudad">
			  </div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div class="form-group">
			    <label for="comentario">Comentario</label>
			    <input type="textarea" class="form-control" id="comentario">
			 </div>
			
			<?php 
				$post = get_page(get_the_ID());
				$content = apply_filters('the_content', $post->post_content);
				echo $content;
			 ?>
		</div>
		
	  <button type="submit" class="btn btn-default">Submit</button>
	  
	</form>
</div>

<?php get_footer(); ?>