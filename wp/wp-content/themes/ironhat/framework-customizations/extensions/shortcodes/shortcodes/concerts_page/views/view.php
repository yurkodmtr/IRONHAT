<?php 
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}
?>

<div class="content concerts">
		
	<div class="center">
		
		<h1 class="tac"><?php echo do_shortcode( $atts['title'] ); ?></h1>

		<div class="item__list clearfix">
			<?php foreach ( $atts['concerts'] as $concert ) : ?>
				<div class="item">
					<div class="date">
						<div class="date__top">
							<span><?php echo do_shortcode( $concert['day'] ); ?>, </span> <?php echo do_shortcode( $concert['time'] ); ?>
						</div>
						<div class="date__bottom">
							<?php echo do_shortcode( $concert['date'] ); ?>
						</div>
					</div>
					<figure style="background-image:url(<?php echo $concert['image']['url']; ?>);"></figure>
					<div class="title">
						"<?php echo do_shortcode( $concert['name'] ); ?>"
					</div>
				</div>	
			<?php endforeach; ?>
						
		</div>

	</div>

</div>	

