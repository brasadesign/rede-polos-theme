<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

		</div><!-- #main -->
		
		<footer id="footer" role="contentinfo">
			<div class="interno" id="parceiros"  >
				<h2>Parceiros</h2>
				
			</div><!--parceiros-->
			<div id="contatos"> Rua Augusta, 1239 - Cj 23 | telefones: (11) 32310265 / (11)23389631 / (11) 954584844</div>
			<div class="site-info">
				<span><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a> - <?php echo date( 'Y' ); ?> - <?php _e( 'Alguns direitos reservados', 'odin' ); ?> </span>
			</div><!-- .site-info -->
		</footer><!-- #footer -->
	</div><!-- .container -->

	<?php wp_footer(); ?>
	<script>
	  jQuery(document).ready(function(){
	    // Target your .container, .wrapper, .post, etc.
	    jQuery("#video_port").fitVids();
	  });
	</script>
</body>
</html>
