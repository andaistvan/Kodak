<?php
/**
 * The Template for displaying all single products.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 *
 * @author 		WooThemes
 *
 * @version     1.6.4
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header('shop'); ?>



<div class="page-content">
   <div class="main-container woo-single-container">
      <?php do_action('woo_header_breadcrump') ?>
   </div><!-- main-container woo-single-container -->

   <div class="main-container woo-single-container">
      <section class="contentbox-section content-cont woo-contentbox">

      	<?php
              /**
               * woocommerce_before_main_content hook.
               *
               * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
               * @hooked woocommerce_breadcrumb - 20
               */
              do_action('woocommerce_before_main_content');
          ?>

   		<?php while (have_posts()) : the_post(); ?>

   			<?php wc_get_template_part('content', 'single-product'); ?>

   		<?php endwhile; // end of the loop. ?>
      </section><!-- contentbox-section medium-9 columns woo-contentbox -->

      <!-- woocommerce sidebar -->
      <div class="sidebar-cont">
         <?php dynamic_sidebar('woosidebar_widget'); ?>
      </div><!-- medium-3 columns -->

   </div><!-- main-container woo-single-container -->
</div><!-- page-content -->

	<?php
        /**
         * woocommerce_after_main_content hook.
         *
         * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
         */
        do_action('woocommerce_after_main_content');
    ?>

<?php get_footer('shop'); ?>
