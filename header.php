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

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

   <!-- **********  off canvas  *************-->

   <div class="off-canvas-wrapper">
       <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
         <div class="off-canvas position-left" id="offCanvas" data-off-canvas>
            <h1>lófasz</h1>
            <?php dynamic_sidebar('offcanvas_widget'); ?>
         </div>
         <div class="off-canvas-content" data-off-canvas-content>

   <!-- **********  off canvas  *************-->


<div id="page" class="site">

	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'speed1b'); ?></a> -->


	<header id="masthead" class="site-header" role="banner">

		<div id="header-top" class="main-container">

         <!-- logo -->
         <a href="<?php echo esc_url(home_url('/'));  ?>" rel="home">
            <div class="logo-cont"></div>
         </a>
         <!-- logo -->

          <button type="button" class="button" data-toggle="offCanvas">Open Menu</button><!-- off canvas toggle -->

         <!-- search, login, contact  -->
         <div id="info-panel">

         </div>
         <!-- search, login, contact  -->

		</div><!-- header-top -->

      <div id="header-bottom" class="main-container">
         <!-- #site-navigation -->
         <?php
         echo'
            <div id="main-nav">
                <div class="top-bar-left">';
                    wp_nav_menu(array(
                        'container' => false,
                        'menu' => __('Top Bar Menu', 'speed1b'),
                        'menu_class' => 'dropdown menu',
                        'theme_location' => 'topbar-menu',
                        'items_wrap' => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
                        //Recommend setting this to false, but if you need a fallback...
                        'fallback_cb' => 'f6_topbar_menu_fallback',
                        'walker' => new F6_TOPBAR_MENU_WALKER(),
                    ));
                echo'
                </div>
            </div>';
         ?>
         <!-- #site-navigation -->
      </div><!-- #header-bottom -->


	</header><!-- #masthead -->

	<div id="content" class="site-content">
