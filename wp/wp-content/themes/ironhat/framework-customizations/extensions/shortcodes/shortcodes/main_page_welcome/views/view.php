<?php 
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}
?>

	<section class="home__welcome" id="home__welcome" data-background-color="#FFF">
		<div class="wrap">
			<div class="title">
				<?php echo do_shortcode( $atts['title'] ); ?>
			</div>
			<div class="p">
				<?php echo do_shortcode( $atts['descr'] ); ?>
			</div>
		</div>										
	</section>


