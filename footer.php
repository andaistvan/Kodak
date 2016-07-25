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

	<footer id="site-footer">

      <div id="footer-top" class="main-container">
         <div class="footer-2col footer-clear">
            <div class="footer-col">
               <h3>Szolgáltatásaink</h3>
               <?php wp_nav_menu(array('theme_location' => 'footer-szolg-menu', 'menu_id' => 'footer-szolg-menu')); ?>
            </div>
            <div class="footer-col footer-padding-termekek">
               <h3>Termékeink</h3>
               <?php wp_nav_menu(array('theme_location' => 'footer-termekek-menu', 'menu_id' => 'footer-termekek-menu')); ?>
            </div>
         </div>

         <div class="footer-2col footer-clear footer-padding30px">
            <div class="footer-col">
               <h3>Elérhetőségeink</h3>
               <p>BUDAPEST</p>
               <p>SAVOYA PARK<br>BEVÁSÁRLÓ KÖZPONT<br>1117 Budapest,<br>Hunyadi János út 19.</p>
               <p>Telefon: +36 1 887 1387<br>
                  e-mail: <a href="mailto:foto@kodakfoto.hu">foto@kodakfoto.hu</a></p>
               <p>Nyitva tartás:<br>H-Szo: 9.00 - 20.00</p>
            </div>
            <div class="footer-col footer-right-col-padding">
               <p>BÉKÉSCSABA</p>
               <p>CSABA CENTER<br>KODAK FOTÓ CENTER<br>Békéscsaba,<br>Andrássy út 37-43.</p>
               <p>Telefon: +36 66 631 314<br>
                  e-mail: <a href="mailto:fotocenter@freemail.hu">fotocenter@freemail.hu</a></p>
               <p>Nyitva tartás:<br>H-Szo: 9.00 - 20.00</p>
            </div>
         </div>
      </div><!-- footer-top -->

      <div id="footer-bottom" class="main-container">
         <div id="footer-logo-cont"></div>
         <p>
            Valdor Bt<br>1161 Budapest,<br>Szepesi u.1.<br><a href="mailto:valdor1@t-online.hu">valdor1@t-online.hu</a><br> Asz.: 20774682-2-42
         </p>
      </div><!-- footer-bottom -->

	</footer><!-- #site footer -->



</div><!-- #page -->

<!-- **********  off canvas  *************-->
      </div><!-- off-canvas-content -->
   </div><!-- off-canvas-wrapper-inner -->
</div><!-- off-canvas-wrapper -->
<!-- **********  off canvas  *************-->

<?php wp_footer(); ?>
<script type="text/javascript">
   $(document).foundation();
</script>

</body>


</html>
