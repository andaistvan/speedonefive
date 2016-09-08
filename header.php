<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?><!DOCTYPE html>
<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/speedonefive/dev/zurb/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/speedonefive/dev/zurb/bower_components/foundation-sites/dist/foundation.js"></script>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/speedonefive/dev/zurb/js/app.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

   <!-- **********  off canvas  *************-->
   <div class="off-canvas-wrapper">
       <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
         <div class="off-canvas position-left" id="offCanvas" data-off-canvas>
            <?php dynamic_sidebar('offcanvas_widget'); ?><!-- off-canvas menu -->
         </div>
         <div class="off-canvas-content" data-off-canvas-content>
   <!-- **********  off canvas  *************-->


<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
      <div class="main-container">

         <!-- SITE BRANDING -->
         <?php
         if (is_front_page() && is_home()) : ?>
            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
         <?php else : ?>
            <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
         <?php
         endif;

         $description = get_bloginfo('description', 'display');
         if ($description || is_customize_preview()) : ?>
            <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
         <?php
         endif; ?>
         <!-- SITE BRANDING -->


         <!-- logo -->
         <a href="<?php echo esc_url(home_url('/'));  ?>" rel="home">
               <div class="logo-cont"></div>
         </a>
         <!-- logo -->


         <!-- #site-navigation -->
         <nav id="site-navigation" class="main-navigation" role="navigation">
   			<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
   		</nav>
         <!-- #site-navigation -->


         <!-- MOBILE MENU BUTTON -->
         <!-- <button type="button" class="button" id="mobil-button" data-toggle="offCanvas">Menü</button> -->
         <!-- off canvas toggle -->

      </div><!-- main-container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
