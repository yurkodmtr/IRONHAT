<?php 
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}
?>


<div class="content about">		
	<div class="center">
		<h1 class="tac"><?php echo do_shortcode( $atts['title'] ); ?></h1>
		<div class="text">
			<?php echo do_shortcode( $atts['top_text'] ); ?>
			<img src="<?php echo get_template_directory_uri();?>/images/about_rocket.png" alt="" class="about__rocket_1">
			<img src="<?php echo get_template_directory_uri();?>/images/about_rocket.png" alt="" class="about__rocket_2">
		</div>
		<figure>
			<img src="<?php echo get_template_directory_uri();?>/images/about_man.png" alt="">
		</figure>
		<div class="text">
			<?php echo do_shortcode( $atts['bottom_text'] ); ?>
			<img src="<?php echo get_template_directory_uri();?>/images/about_rocket.png" alt="" class="about__rocket_3">
		</div>
	</div>
</div>


