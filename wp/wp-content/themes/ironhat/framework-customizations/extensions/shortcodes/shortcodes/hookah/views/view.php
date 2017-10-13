<?php 
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}
?>

<div class="hookah">
	<div class="center">

		<h1 class="tac"><?php echo do_shortcode( $atts['title'] ); ?></h1>

		<div class="hookah__content">
			<img src="<?php echo do_shortcode( $atts['image_1']['url'] ); ?>">
			<img src="<?php echo do_shortcode( $atts['image_2']['url'] ); ?>">		
		</div>

	</div>
</div>

