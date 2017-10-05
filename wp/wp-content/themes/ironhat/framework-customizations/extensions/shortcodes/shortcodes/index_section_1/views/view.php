<?php 
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}
?>
	
<div class="welcome">
	<div class="center">
		<figure>
			<img src="<?php echo $atts['image']['url']; ?>" alt="">
		</figure>
		<article>
			<h1>
				<?php echo do_shortcode( $atts['title'] ); ?>
			</h1>
			<div class="descr">
				<?php echo do_shortcode( $atts['descr'] ); ?>
			</div>
		</article>
	</div>
</div>


