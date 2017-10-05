<?php 
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}
?>

	<div class="unisex__pagenator clearfix">
		<article>	
			<div>
				<span><?php echo do_shortcode( $atts['prev_count'] ); ?></span>
				<a href="<?php echo do_shortcode( $atts['prev_link'] ); ?>"><?php echo do_shortcode( $atts['prev_text'] ); ?></a>
			</div>				
		</article>
		<article>
			<div>
				<span><?php echo do_shortcode( $atts['next_count'] ); ?></span>
				<a href="<?php echo do_shortcode( $atts['next_link'] ); ?>"><?php echo do_shortcode( $atts['next_text'] ); ?></a>
			</div>	
		</article>
	</div>


