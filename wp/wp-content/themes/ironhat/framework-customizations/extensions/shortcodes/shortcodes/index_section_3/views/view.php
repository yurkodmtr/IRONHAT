<?php 
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}
?>

<div class="menu">
	<div class="center">
		<div class="title">
			<?php echo do_shortcode( $atts['title'] ); ?>
		</div>
		<div class="item__list clearfix">
			<div class="item">
				<div class="item__title clearfix">
					<span>
						<?php echo do_shortcode( $atts['tab_id_1_title'] ); ?>						
					</span>
				</div>
				<div class="item__descr">
					<?php echo do_shortcode( $atts['tab_id_1_descr'] ); ?>					
				</div>
				<ul>
					<li class="color_green">
						<?php echo do_shortcode( $atts['tab_id_1_value_1'] ); ?>
					</li>
					<li>
						<span>
							<?php echo do_shortcode( $atts['tab_id_1_value_2'] ); ?> ₴	
						</span>
					</li>
				</ul>
			</div>
			<div class="item">
				<div class="item__title clearfix">
					<span>
						<?php echo do_shortcode( $atts['option_id_2_title'] ); ?>						
					</span>
					<b>
						<?php echo do_shortcode( $atts['option_id_2_title_descr'] ); ?>	
					</b>
				</div>
				<?php foreach ( $atts['tab_id_2_tabs'] as $tab ) : ?>
					<ul>
						<li>
							<?php echo $tab['title']; ?>
						</li>
						<li>
							<span>
								<?php echo $tab['price']; ?> ₴	
							</span>
						</li>
					</ul>	
				<?php endforeach; ?>			
			</div>
			<div class="item">
				<div class="item__title clearfix">
					<span>
						<?php echo do_shortcode( $atts['option_id_3_title'] ); ?>
					</span>
				</div>
				<?php foreach ( $atts['tab_id_3_tabs'] as $tab ) : ?>
					<ul>
						<li>
							<?php echo $tab['title']; ?>
						</li>
						<li>
							<b>
								<?php echo $tab['weight']; ?> г
							</b>
							<span>
								<?php echo $tab['price']; ?> ₴	
							</span>
						</li>
					</ul>	
				<?php endforeach; ?>
				<a href="#" class="menu_more_btn">Весь асортимент</a>
			</div>
		</div>
	</div>
</div>

