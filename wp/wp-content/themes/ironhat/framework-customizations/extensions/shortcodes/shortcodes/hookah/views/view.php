<?php 
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}
?>

<div class="hookah">
	<div class="center">

		<h1 class="tac"><?php echo do_shortcode( $atts['title'] ); ?></h1>

		<div class="hookah__content">

			<a href="<?php echo do_shortcode( $atts['image_1']['url'] ); ?>" data-fancybox="gallery_hookah">
				<img src="<?php echo aq_resize( $atts['image_1']['url'], 1170, true ); ?>" alt="">
			</a>
			<a href="<?php echo do_shortcode( $atts['image_2']['url'] ); ?>" data-fancybox="gallery_hookah">
				<img src="<?php echo aq_resize( $atts['image_2']['url'], 1170, true ); ?>" alt="">
			</a>
		</div>

	</div>
</div>

