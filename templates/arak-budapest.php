<?php
/*
Template Name: árak-budapest
*/

 /**
  * The template for displaying all pages.
  *
  * This is the template that displays all pages by default.
  * Please note that this is the WordPress construct of pages
  * and that other 'pages' on your WordPress site may use a
  * different template.
  *
  * @link https://codex.wordpress.org/Template_Hierarchy
  */
 get_header();
?>

<?php get_template_part('template-parts/headline') ?>
<div class="page-content">

<!-- main content section -->
   <div class="main-container">
      <div class="content-cont">

         <section class="contentbox-section">
            <div class="table-cont">
               <!-- budapesti árak 1 napos -->
               <?php echo do_shortcode('[table id=budapest1 /]') ?>
            </div>
         </section>

         <section class="contentbox-section">
            <div class="table-cont">
               <!-- budapesti árak 1 órás -->
               <?php echo do_shortcode('[table id=budapest2 /]') ?>
            </div>
         </section>

         <section class="contentbox-section">
            <div class="table-cont">
               <!-- budapesti árak 1 perces digitről -->
               <?php echo do_shortcode('[table id=budapest3 /]') ?>
            </div>
         </section>

         <section class="contentbox-section">
            <div class="table-cont">
               <!-- budapesti árak naptár -->
               <?php echo do_shortcode('[table id=4 /]') ?>
            </div>
         </section>

         <section class="contentbox-section">
            <div class="table-cont">
               <p class="table-afa">
                  Szolgáltatásaink 2016.-ban érvényes árai. Az árak forintban (HUF)  értendők és az ÁFA-t tartalmazzák.
               </p>
            </div>
         </section>

      </div><!-- content-cont -->

   <!-- SIDEBAR -->
      <aside class="sidebar-cont">
         <?php dynamic_sidebar('main_widget'); ?>
      </aside>

   </div><!-- main container -->
</div><!-- page-content -->



<?php
get_footer();
?>
