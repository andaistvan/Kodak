<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
?>




<article class="contentbox-section" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

   <div class="post-header-image">
      <?php echo the_post_thumbnail('post-header-image'); ?>
   </div>


	<div class="entry-content">
		<?php
            the_content(sprintf(
                /* translators: %s: Name of current post. */
                wp_kses(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'speed1b'), array('span' => array('class' => array()))),
                the_title('<span class="screen-reader-text">"', '"</span>', false)
            ));

        ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<!-- <?php speed1b_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
