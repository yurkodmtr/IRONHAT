<?php 
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}
?>
	
<div class="story">
	<div class="center">

		<div class="block">
			<div class="title">
				
				<?php echo do_shortcode( $atts['title'] ); ?>
			</div>
			<div class="descr">
				<?php echo do_shortcode( $atts['descr'] ); ?>
			</div>
			<a href="#" class="more">Детальніше</a>
		</div>

	</div>
</div>

