<?php 
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}
?>

	
	<div class="unisex__welcome dark_bg" style="background-image: url(<?php echo $atts['image']['url']; ?>">

		<div class="table">
			<div class="table-cell">
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
			</div>
		</div>

	</div>


