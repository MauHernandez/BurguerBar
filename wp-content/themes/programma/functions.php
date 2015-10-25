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

function mostrar_anclas($id1 , $id2, $color1, $color2){ ?>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 wrapper-anclas">
		<?php $url1 = wp_get_attachment_url( get_post_thumbnail_id($id1) ); ?>
		<a href="<?php echo get_permalink($id1); ?>">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ancla" style="background: url(<?php echo $url1 ?>)">
			<p><?php echo get_the_title($id1); ?></p>
			<div class="bg" style="background-color:#<?php echo $color1 ?>"></div>
		</div>
		</a>
		<?php $url2 = wp_get_attachment_url( get_post_thumbnail_id($id2) ); ?>
		<a href="<?php echo get_permalink($id2); ?>">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ancla" style="background: url(<?php echo $url2 ?>)">
			<p><?php echo get_the_title($id2); ?></p>
			<div class="bg" style="background-color:#<?php echo $color2 ?>"></div>
		</div>
		</a>
	</div>
<?php } 

function programma_menu(){ ?>
	<nav class="navbar-fixed-top navbar navbar-default">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#programma_collapse">
              <span class="sr-only"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo get_permalink(2); ?>"><img src="<?php echo get_stylesheet_directory_uri()?>/images/logo_menu.png" alt="BurguerBar"></a>
          </div>
        
      <?php 
        $argsm = array( 'menu_class' => 'nav navbar-nav', 'theme_location' => 'primary', 'container_class' => 'collapse navbar-collapse' , 'container_id' => 'programma_collapse' );
        $var = wp_nav_menu( $argsm );
      ?>
      </div>
    </nav>
	<?php 
	if (is_front_page()) { ?>
		<script>
			jQuery(document).ready(function($){
				var startY = $('header').position().top + $('header').outerHeight();
				
				$(window).scroll(function(){
				    checkY();
				});
				
				function checkY(){
				    if( $(window).scrollTop() > startY ){
				        $('.navbar-fixed-top').slideDown();
				    }else{
				        $('.navbar-fixed-top').slideUp();
				    }
				}
				
				// Do this on load just in case the user starts half way down the page
				checkY();
			});

		</script>
	<?php }
}

function essential($id){ ?>
	<div class="container about">
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
		      		echo '<h3>'.$slide['slider_tit'].'</h3>';
		      	}

		      	if (!empty($slide['slider_des'])) {
		      		echo '<p>'.$slide['slider_des'].'</p>'; 
		      	}

		      	if (!empty($slide['slider_date']) ){
				       	echo '<p>'.$slide['slider_date'].'</p>';
			       } 
		      	?>
		      </div>
			       
		    </div>
		<?php 
		$i = 1; 
		} ?>
	  </div>
	</div>
<?php }
?>