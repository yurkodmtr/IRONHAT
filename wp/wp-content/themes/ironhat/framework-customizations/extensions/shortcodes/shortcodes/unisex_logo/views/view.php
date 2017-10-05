<?php 
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}
?>

	<div class="unisex__logo dark_bg">
		<div class="wrap">
			<div class="text__wrap">
				<div class="title">
					<?php echo do_shortcode( $atts['title'] ); ?>
				</div>
				<div class="p">
					<?php echo do_shortcode( $atts['descr'] ); ?>
				</div>
				<div class="item__list clearfix">
					<div class="item">
						<span>
							<img src="<?php echo $atts['img_1']['url']; ?>" alt="">
						</span>								
						<div><?php echo do_shortcode( $atts['img_1_descr'] ); ?></div>
					</div>
					<div class="item">
						<span>
							<img src="<?php echo $atts['img_2']['url']; ?>" alt="">
						</span>								
						<div>
							<?php echo do_shortcode( $atts['img_2_descr'] ); ?>
						</div>
					</div>
					<div class="item">
						<span>
							<img src="<?php echo $atts['img_3']['url']; ?>" alt="">
						</span>								
						<div>
							<?php echo do_shortcode( $atts['img_3_descr'] ); ?>
						</div>
					</div>
					<div class="item">
						<span>
							<img src="<?php echo $atts['img_4']['url']; ?>" alt="">
						</span>							
						<div>
							<?php echo do_shortcode( $atts['img_4_descr'] ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



