<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="scss/_animations.scss">
  <link rel="shortcut icon" href="http://danawerpny.com/favicons/favicon.ico" type="image/x-icon">
  <link rel="icon" href="http://danawerpny.com/favicons/favicon.ico" type="image/x-icon">

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="logo">
    <div class="container">
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <img src="<?php bloginfo('template_directory'); ?>/img/logo3.png" alt="Dana Werpny">
        <?php //echo wp_get_attachment_link( 34, small ); ?>
        </a>
    </div> <!-- .logo -->

    <?php wp_nav_menu( array(
      'container' => false,
      'theme_locations' => 'primary'
    )); ?>

    <!-- <div class="social">
     <i class="fa fa-twitter"></i>
     <i class="fa fa-github"></i>
     <i class="fa fa-linkedin"></i>
    </div> -->

  </div> <!-- /.container -->
</header><!--/.header-->

