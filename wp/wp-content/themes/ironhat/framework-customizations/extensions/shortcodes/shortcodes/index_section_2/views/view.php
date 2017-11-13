<?php 
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}
?>
	
<div class="event">
	<div class="center">

		<div class="block" style="background-image:url(<?php echo $atts['image']['url']; ?>)">
			<div class="label">
				Далі цікавіше
			</div>
			<div class="date">
				<div class="date__top">
					<?php echo do_shortcode( $atts['date'] ); ?>
				</div>
				<div class="date__bottom">
					<?php echo do_shortcode( $atts['time'] ); ?>
				</div>
			</div>
		</div>
		<div class="title">
			<span>
				<?php echo do_shortcode( $atts['title'] ); ?>
			</span>
			<a href="/concerts/">Розклад iншіх концертів</a>
		</div>

	</div>
</div>


