<?php
/**
 * Footer template
 *
 * @package Portfolio+
 */
?>
		</div><!-- .col-width -->
	</div><!-- #main -->

	<footer id="colophon">
		<div class="col-width">

	    <?php if ( is_active_sidebar('footer-1') ||
			is_active_sidebar('footer-2') ||
			is_active_sidebar('footer-3') ||
			is_active_sidebar('footer-4') ) : ?>

			<div id="footer-widgets">

				<?php $i = 0; while ( $i <= 4 ) : $i++; ?>
					<?php if ( is_active_sidebar('footer-'.$i) ) { ?>

				<div class="block footer-widget-<?php echo $i; ?>">
		        	<?php dynamic_sidebar('footer-'.$i); ?>
				</div>

			        <?php } ?>
				<?php endwhile; ?>

				<div class="clear"></div>

			</div><!-- /#footer-widgets  -->

	    <?php endif; ?>

			<div id="site-generator">
				<p><?php if (!$footer = of_get_option('footer_text', false) ) { ?>
					<?php _e('Powered by', 'portfolio-plus'); ?> <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'portfolio-plus' ); ?>" rel="generator"><?php printf( __( 'WordPress', 'portfolio-plus' ) ); ?></a>  
					 &amp;&nbsp;<a href="http://www.barkingmadwc.com"><?php _e('Barkingmad Web Collective', 'barkingmadwc'); ?>.</a>
				
				<?php } else {
					echo stripslashes($footer);
					} ?>
				</p>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
