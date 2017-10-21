<?php
/**
 * @package Modern_Business
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?> </title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <!-- Navigation -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top"" role="navigation">
	  	<div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
	        <?php
	        wp_nav_menu( array(
	            'theme_location'    => 'primary',
	            'depth'             => 2,
	            'container'         => 'div',
	            'container_class'   => 'collapse navbar-collapse',
	            'container_id'      => 'bs-example-navbar-collapse-1',
	            'menu_class'        => 'navbar-nav ml-auto',
	            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
	            'walker'            => new WP_Bootstrap_Navwalker())
	        );
	        ?>
	    </div>
	</nav>