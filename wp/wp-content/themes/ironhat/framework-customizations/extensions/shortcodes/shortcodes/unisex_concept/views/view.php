<?php 
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}
?>

	<div class="unisex__concept">
		<div class="wrap">
			<div class="text__wrap">
				<div class="title">
					<?php echo do_shortcode( $atts['title'] ); ?>
				</div>
				<div class="p">
					<?php echo do_shortcode( $atts['descr'] ); ?>
				</div>						
			</div>
			<div id="owl-concept" class="owl-carousel owl-theme">

				<?php 
					$index = 0;
					foreach ( $atts['tabs'] as $tab ) : 
				?>
					<?php 
						$class = '';
						$subClass = '';
						if ( $index == '0' ) {
							$class = 'active';
							$subClass = 'act';
						}
					?>
					<div class="item <?php echo $class; ?>">
						<div class="<?php echo $subClass; ?>">
							<img src="<?php echo $tab['tab_image']['url']; ?>" alt="">
						</div>								
					</div>
					<?php $index +=1;?>
				<?php endforeach; ?>			 
			</div>

			<script>
				jQuery(document).ready(function($) {
					var owl = $('#owl-concept');
			 		owl.owlCarousel({ 
				      	navigation : true, // Show next and prev buttons
				      	slideSpeed : 2000,
				      	paginationSpeed : 2000,
				      	singleItem:true,
				      	mouseDrag: true,
				      	addClassActive : false,
				      	rewindNav : false,
				      	addClassActive : true,
				      	afterMove : function (elem) {
							$('#owl-concept .item div').removeClass('act');
						}
				  	});
				});
			</script>
		</div>
	</div>



