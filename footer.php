<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url(__('https://wordpress.org/', 'speed1b')); ?>"><?php printf(esc_html__('Proudly powered by %s', 'speed1b'), 'WordPress'); ?></a>
			<span class="sep"> | </span>
			<?php printf(esc_html__('Theme: %1$s by %2$s.', 'speed1b'), 'speed1b', '<a href="http://underscores.me/" rel="designer">Istvan Anda</a>'); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

   <!-- **********  off canvas  *************-->
         </div><!-- off-canvas-content -->
      </div><!-- off-canvas-wrapper-inner -->
   </div><!-- off-canvas-wrapper -->
   <!-- **********  off canvas  *************-->

</div><!-- #page -->



<?php wp_footer(); ?>
<script type="text/javascript">
   $(document).foundation();
</script>

</body>


</html>
