<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */
get_header(); ?>


<header id="archive-header">
   <div class="main-container">
      <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
   </div>
</header>


<div class="page-content">
   <div class="main-container">
      <div class="content-cont">

		<?php
        while (have_posts()) : the_post();

            get_template_part('template-parts/content-single', get_post_format());

        endwhile; // End of the loop.
        ?>
   </div><!-- content-cont -->

   <aside class="sidebar-cont sidebar-cont">
     <?php dynamic_sidebar('main_widget'); ?>
   </aside>
</div><!-- main-container -->
</div><!-- page-content -->


<?php
get_footer();
