<?php

function ironhat_scripts() {
	wp_enqueue_style( 'ironhat-style', get_template_directory_uri() . '/css/main.min.css' );

	
	wp_enqueue_script( 'ironhat-jq', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js' );
	wp_enqueue_script( 'ironhat-js', get_template_directory_uri() . '/js/app.js', array(), '20151215', true );


}
add_action( 'wp_enqueue_scripts', 'ironhat_scripts' );



/* add phone field */
class Add_Settings_Field__phone {
	public function __construct() {
		add_action( 'admin_init' , array( $this , 'register_fields' ) );
	}
	public function register_fields() {
		register_setting( 'general', 'admin_phone', 'esc_attr' );
		add_settings_field(
			'admin_phone_id',
			'<label for="admin_phone_id">' . __( 'Телефон' , 'admin_phone' ) . '</label>',
			array( $this, 'fields_html' ),
			'general'
		);
	}
	public function fields_html() {
		$value = get_option( 'admin_phone', '' );
		echo '<input type="text" id="admin_phone_id" name="admin_phone" value="' . esc_attr( $value ) . '" />';
	}
}
new Add_Settings_Field__phone();
function admin_phone_sc_func() {  
	$str = get_option( 'admin_phone', '' );
	return $str;
} 
add_shortcode( 'admin_phone_sc', 'admin_phone_sc_func'); 

