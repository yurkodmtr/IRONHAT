<?php 
	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}
?>

<div class="menu_page">
	<div class="center">

		<h1 class="tac"><?php echo do_shortcode( $atts['title'] ); ?></h1>

		<div class="menu_page__nav">
			<div data-name="ua" class="act">ua <img src="<?php echo get_template_directory_uri();?>/images/ua.png" alt=""></div>
			<div data-name="pl">pl <img src="<?php echo get_template_directory_uri();?>/images/pl.png" alt=""></div>
			<div data-name="en">en <img src="<?php echo get_template_directory_uri();?>/images/en.png" alt=""></div>
		</div>

		<div class="menu_page__content">
			<article class="menu_page__content__ua act">
				<img src="<?php echo do_shortcode( $atts['tab_ua_image_1']['url'] ); ?>">
				<img src="<?php echo do_shortcode( $atts['tab_ua_image_2']['url'] ); ?>">
				<img src="<?php echo do_shortcode( $atts['tab_ua_image_3']['url'] ); ?>">
				<img src="<?php echo do_shortcode( $atts['tab_ua_image_4']['url'] ); ?>">
			</article>
			<article class="menu_page__content__pl">
				<img src="<?php echo do_shortcode( $atts['tab_pl_image_1']['url'] ); ?>">
				<img src="<?php echo do_shortcode( $atts['tab_pl_image_2']['url'] ); ?>">
				<img src="<?php echo do_shortcode( $atts['tab_pl_image_3']['url'] ); ?>">
				<img src="<?php echo do_shortcode( $atts['tab_pl_image_4']['url'] ); ?>">
			</article>
			<article class="menu_page__content__en">
				<img src="<?php echo do_shortcode( $atts['tab_en_image_1']['url'] ); ?>">
				<img src="<?php echo do_shortcode( $atts['tab_en_image_2']['url'] ); ?>">
				<img src="<?php echo do_shortcode( $atts['tab_en_image_3']['url'] ); ?>">
				<img src="<?php echo do_shortcode( $atts['tab_en_image_4']['url'] ); ?>">
			</article>			
		</div>

	</div>
</div>

