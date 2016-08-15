<?php
/*
Template Name: page-content
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

      <section class="contentbox-section content-cont">

            <?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/content', 'page');

            endwhile; // End of the loop.
            ?>


      </section>
   <!-- SIDEBAR -->
      <aside class="sidebar-cont sidebar-cont">
         <?php dynamic_sidebar('main_widget'); ?>
      </aside>

   </div><!-- main container -->
</div><!-- page-content -->



<?php
get_footer();
?>
