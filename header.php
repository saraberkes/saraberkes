<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
<div id="about"></div>

<div class="logo">
  <?php 
     $custom_logo_id = get_theme_mod( 'custom_logo' );
     $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        ?>
  <a href="<?php echo home_url(); ?>"><img src="<?php echo $image[0]; ?>" alt=""></a>
</div>

<div class="content">
<div class="menuWrapper">
  <div class="primaryMenu">
  <div id="menuIcon">
    <a href="#" id="menu-item">
      <i class="fa fa-bars" aria-hidden="true"></i>
    </a>
  </div>
    <div class="menufixed" id="menufixed">
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'primary'
        )); ?>
      </div>
    </div>
  </div>
</div>
</header><!--/.header-->

