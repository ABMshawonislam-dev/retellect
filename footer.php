
	<footer style="background: <?php echo get_theme_mod('retellect_footer_color_setting', '#f7ea66'); ?>;">
		<div class="logo ">
			<?php 
	 		 	if ( function_exists( 'the_custom_logo' ) ) {
				 the_custom_logo();
				}
  			?>
		</div>
		<p class="copy-right"><?php echo get_theme_mod('retellect_footer_text_setting', 'Copyright 2019. All rights reserved by DESIGNER.'); ?>;</p>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>