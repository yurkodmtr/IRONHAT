<?php 
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}
?>

<div class="content photos">
		
	<div class="center">
		
		<h1 class="tac"><?php echo do_shortcode( $atts['title'] ); ?></h1>

		<div class="grid">
			<?php foreach ( $atts['photos'] as $photo ) : ?>
				<div class="grid-item">
					<a href="<?php echo do_shortcode( $photo['image']['url'] ); ?>" data-fancybox="gallery">
						<img src="<?php echo do_shortcode( $photo['image']['url'] ); ?>" alt="">
					</a>						
				</div>	
			<?php endforeach; ?>										
		</div>

		<div class="back">
			<a href="/albums/">Повернуться до альбомів</a>
		</div>

	</div>
	
</div>	

