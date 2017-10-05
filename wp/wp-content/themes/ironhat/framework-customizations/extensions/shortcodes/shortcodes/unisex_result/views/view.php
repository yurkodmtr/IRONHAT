<?php 
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}
?>

	<div class="unisex__result">
		<div class="wrap">
			<div class="text__wrap">
				<div class="title">
					<?php echo do_shortcode( $atts['title'] ); ?>
				</div>
				<div class="p">
					<?php echo do_shortcode( $atts['descr'] ); ?>
				</div>
			</div>
		</div>	
		<img src="<?php echo $atts['image_large']['url']; ?>" alt="" class="unisex__result__large">		
		<img src="<?php echo $atts['image_small']['url']; ?>" alt="" class="unisex__result__small">		
	</div>


