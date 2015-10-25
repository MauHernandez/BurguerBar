<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	
	<?php programma_menu(); ?>

	<header>
		<?php 
			if (is_front_page()) {
				get_template_part('header','home');
			}else{
				$bg = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));
				?>
			<div class="container page-cover" style="background: url(<?php echo $bg ?>)">
				<h1 class="centerv"><?php echo get_the_title(get_the_ID()); ?></h1>
			</div>
			<?php }
		 ?>
	</header>

	<div id="content" class="site-content">
	