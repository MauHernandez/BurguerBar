<?php 

function programma_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/static/css/bootstrap.min.css');
}
add_action( 'wp_enqueue_scripts', 'programma_enqueue_styles' );

function theme_js() {
    wp_enqueue_script( 'bootstrapjs', get_stylesheet_directory_uri() . '/static/js/bootstrap.min.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );

function remove_admin_bar() {
	show_admin_bar(false);
}
add_action('after_setup_theme', 'remove_admin_bar');

function mostrar_anclas($id1 , $id2){ ?>
<div class="container ancla">
	<?php $url1 = wp_get_attachment_url( get_post_thumbnail_id($id1) ); ?>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="background: url(<?php echo $url1 ?>)">
		<p><?php echo get_the_title($id1); ?></p>
	</div>
	<?php $url2 = wp_get_attachment_url( get_post_thumbnail_id($id2) ); ?>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="background: url(<?php echo $url2 ?>)">
		<p><?php echo get_the_title($id2); ?></p>
	</div>
</div>
<?php } 

function programma_menu(){ ?>
	<nav class="navbar navbar-default">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#programma_collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
          </div>
        
      <?php 
        $argsm = array( 'menu_class' => 'nav navbar-nav', 'theme_location' => 'primary', 'container_class' => 'collapse navbar-collapse' , 'container_id' => 'programma_collapse' );
        $var = wp_nav_menu( $argsm );
      ?>
      </div>
    </nav>
<?php }

function essential($id){ ?>
	<div class="container">
		<?php 
			$post = get_page($id);
			$content = apply_filters('the_content', $post->post_content);
			echo $content;
		 ?>
		 <button type="button" class="btn btn-default">Conócenos</button>
	</div>
<?php }

function programma_register_menus() {
  register_nav_menus(
    array(
      'footer-col1' => __( 'Footer Col 1' ),
      'footer-col2' => __( 'Footer Col 2' ),
      'footer-col3' => __( 'Footer Col 3' )
    )
  );
}
add_action( 'init', 'programma_register_menus' );

function programma_slider($name){ ?>

	<div id="carousel-<?php echo $name ?>" class="carousel slide" data-ride="carousel">

		<?php 
			$loop = CFS()->get($name);
		?>

	  <ol class="carousel-indicators">
	  	<?php for ($i=0; $i < sizeof($loop) ; $i++) { ?>
	  		<li data-target="#carousel-<?php echo $name?>" data-slide-to="<?php echo $i ?>" class="<?php if ($i == 0){ echo 'active'; } ?> "></li>
	  	<?php } ?>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
		<?php 
		$i = 0;
		foreach ($loop as $slide) { ?>
			<div class="item <?php  if ($i == 0){ echo 'active'; } ?>">
		      <img src="<?php echo $slide['slider_img'] ?>" alt="...">
		      <div class="carousel-caption">
		      	<?php 

		      	if (!empty($slide['slider_tit'])) {
		      		echo $slide['slider_tit'];
		      	}

		      	if (!empty($slide['slider_des'])) {
		      		echo $slide['slider_des']; 
		      	} 

		      	?>
		      </div>
			       <?php if (!empty($slide['slider_date']) ){
				       	echo $slide['slider_date'];
			       }?>
		    </div>
		<?php 
		$i = 1; 
		} ?>
	  </div>
	</div>
<?php }

?>