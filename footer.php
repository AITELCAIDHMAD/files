<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tyche
 */
?>
</div><!-- #content -->

<?php get_sidebar( 'footer' ); ?>

<?php
$enable_copyright = get_theme_mod( 'tyche_enable_copyright', true );
?>
<?php if ( $enable_copyright ) : ?>
	<!-- Copyright -->
	<footer class="site-copyright">
		<div class="site-info ">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php
						if ( has_nav_menu( 'social' ) ) {

							wp_nav_menu(
								array(
									'theme_location'  => 'social',
									'container'       => 'div',
									'container_id'    => 'menu-social',
									'container_class' => 'menu pull-left',
									'menu_id'         => 'menu-social-items',
									'menu_class'      => 'menu-items',
									'depth'           => 1,
									'link_before'     => '<span class="screen-reader-text">',
									'link_after'      => '</span>',
									'fallback_cb'     => '',
								)
							);
						}
						?>

						<div class="copyright-text pull-right">
							<?php
							echo wp_kses_post(
								get_theme_mod(
									'tyche_copyright_contents',
									vsprintf(
										// Translators: 1 is current year, 2 is separator, 3 is theme link.
										__( 'Copyright &copy; %1$s %2$s %3$s %2$s Powered by WordPress.', 'tyche' ),
										array(
											date_i18n( __( 'Y', 'tyche' ) ),
											'<span class="sep">|</span>',
											sprintf( '<a href="https://colorlib.com/tyche">%s</a>', __( 'Theme: Tyche', 'tyche' ) ),
										)
									)
								)
							);
							?>
						</div>
	<!-- added by me -->
						<div id="payment-options"> 
          
          <img src="http://www.lucyshopping.com/wp-content/uploads/2018/02/visa.png" alt="visa" title="visa">
           
          
          <img src="http://www.pixawear.com/wp-content/uploads/2018/02/mastercard.png" alt="mastercard" title="mastercard">
           
          
          <img src="http://www.pixawear.com/wp-content/uploads/2018/02/discover.png" alt="discover" title="discover">
           
          
          <img src="http://www.pixawear.com/wp-content/uploads/2018/02/google.png" alt="google" title="google">
           
          
          <img src="http://www.pixawear.com/wp-content/uploads/2018/02/paypal.png" alt="paypal" title="paypal">
          
          
          <img src="http://www.pixawear.com/wp-content/uploads/2018/02/amex.png" alt="amex" title="amex">
           
          
          <img src="http://www.pixawear.com/wp-content/uploads/2018/02/cirrus.png" alt="cirrus" title="cirrus">
          
          
          <img src="http://www.pixawear.com/wp-content/uploads/2018/02/maestro.png" alt="maestro" title="maestro">
           
        </div>
						
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59b18d6c9667ad26"></script> 
						
		<!-- added by me -->
					</div>
				</div>
			</div>
		</div>
	</footer><!-- / Copyright -->

<!-- Start of StatCounter Code for WordPress (either .com or .org) -->
<script type="text/javascript">
var sc_project=11651795;
var sc_invisible=1;
var sc_security="25bb7415";
</script>
<script type="text/javascript"
src="https://www.statcounter.com/counter/counter.js" async></script>
<noscript><div class="statcounter"><a title="Web Analytics"
href="http://statcounter.com/" target="_blank"><img class="statcounter"
src="//c.statcounter.com/11651795/0/25bb7415/1/" alt="Web
Analytics"></a></div></noscript>
<!-- End of StatCounter Code for WordPress (either .com or .org) -->



<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>


</body></html>
