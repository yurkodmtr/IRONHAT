<?php 
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}
?>

	<div class="unisex__task">

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

		<img src="<?php echo $atts['image_large']['url']; ?>" alt="" class="unisex__task__large">

		<figure class="unisex__task__small">
			<img src="<?php echo $atts['image_small']['url']; ?>" alt="" >
		</figure>

	</div>


