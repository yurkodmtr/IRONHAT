<?php 
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}
?>

	<section class="home__about" id="home__about" > 
		<div class="wrap">
			<div class="about_text clearfix">
				<div class="title">
					<?php echo do_shortcode( $atts['title'] ); ?>
				</div>
				<div class="p">
					<?php echo do_shortcode( $atts['descr'] ); ?>
				</div>
			</div>
		</div>				
	</section>


